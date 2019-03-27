import cv2
import os
import time
import sys
from selenium.webdriver.chrome.options import Options
from selenium import webdriver

#   Global variables:

#   argument list fetched from php.
arg1 = sys.argv

#   target Domain fetched from url.
#targetDomain = "https://www.google.com/"
targetDomain = arg1[1]

#   Percentage Criteria for similarity.
comparePercentage = 9

#   DB is the list which contains
DB = list()

#   List of Urls/Domains associated with each image in img_db directory in ascending order of the name of the image.
urlList = [
    "https://retail.axisbank.co.in/",
    "https://www.netbanking.hdfcbank.com/",
    "https://shopping.icicibank.com/",
    "https://b2.icicibank.com/",
    "https://cibnext.icicibank.com/",
    "https://retail.onlinesbi.com/",
    "https://corp.onlinesbi.com/",
    "https://merchant.onlinesbi.com/",
	"https://paytm.com/"
]

#	Capture the Screenshot of the current url passed as argument from php.
def captureScreenshot():
    ''' Save a screenshot from spotify.com in current directory. '''
    DRIVER = 'C:/xampp/htdocs/phishing/chromedriver'
    #driver = webdriver.Chrome(DRIVER)

	#	Set chrome driver options for screenshot, specially --headless -> without rendering.
    options = Options()
    options.add_argument("--headless")	#	--headless -> without rendering.
    options.add_argument('window-size=1200x600') # optional for resolution of target image.

    driver = webdriver.Chrome(options=options)	#	Instantiate the chrome driver with the options specified above.

    driver.get(targetDomain)	#	targetDomain -> url of webpage to capture screenshot.
    f = driver.get_screenshot_as_png()	#	take the screenshot & save it in png format at the path specified in xampp server repo.
    with open("C:/xampp/htdocs/phishing/images/target/target.png", 'wb') as file:
        file.write(f)

    driver.quit()






'''
#	No Need for comparing the resolutions of the 2 images.
def checkEquality(original, image_to_compare):
    if original.shape == image_to_compare.shape:
        #print("The images have same size and channels")
        difference = cv2.subtract(original, image_to_compare)
        b, g, r = cv2.split(difference)
'#''
    #   Print msg. if images are completely equal.
        if cv2.countNonZero(b) == 0 and cv2.countNonZero(g) == 0 and cv2.countNonZero(r) == 0:
            print("The images are completely Equal")
        else:
            print("The images are NOT equal")
'''

#	Check Similarity of the original image (that has been captured via selenium screenshot API) 
#	with the currently iterating image stored in DB list (in cv2 format).
def checkSimilarity(original, image_to_compare):
    sift = cv2.xfeatures2d.SIFT_create()
    kp_1, desc_1 = sift.detectAndCompute(original, None)
    kp_2, desc_2 = sift.detectAndCompute(image_to_compare, None)

    index_params = dict(algorithm=0, trees=5)
    search_params = dict()
    flann = cv2.FlannBasedMatcher(index_params, search_params)

    matches = flann.knnMatch(desc_1, desc_2, k=2)

    good_points = []
    for m, n in matches:
        if m.distance < 0.6 * n.distance:
            good_points.append(m)

    # Define how similar they are
    number_keypoints = 0
    if len(kp_1) <= len(kp_2):
        number_keypoints = len(kp_1)
    else:
        number_keypoints = len(kp_2)

    #print("Keypoints 1ST Image: " + str(len(kp_1)))
    #print("Keypoints 2ND Image: " + str(len(kp_2)))
    #print("GOOD Matches:", len(good_points))

    similarityPercentage =  len(good_points) / number_keypoints * 100
    # print("How good it's the match: ", similarityPercentage)

    # result = cv2.drawMatches(original, kp_1, image_to_compare, kp_2, good_points, None)
    #
    # cv2.imshow("result", cv2.resize(result, None, fx=0.4, fy=0.4))
    # cv2.imwrite("feature_matching.jpg", result)
    #
    # cv2.imshow("Original", cv2.resize(original, None, fx=0.4, fy=0.4))
    # cv2.imshow("Duplicate", cv2.resize(image_to_compare, None, fx=0.4, fy=0.4))
    #cv2.waitKey(0)
    cv2.destroyAllWindows()
    return similarityPercentage


# compareTwoImages(original, image_to_compare)
def compareTwoImages(original, image_to_compare):
    # 1) Check if 2 images are equals
    #    checkEquality(original, image_to_compare)

    # 2) Check for similarities between the 2 images
    return checkSimilarity(original, image_to_compare)


#	major method which iterates through each image of DB & compares it with the original.
#	returns the index value of the image that matches the most with the original i.e. which has the highest similarityPercentage.
def major(original):
    pathList = getPathList()
    maxPercentage = 0    # to store current indexed similarityPercentage.
    resultIndex = -1  #   index for the image pos. in DB whose sP is max.

	#	Iterate through the DB to compare its each individual image with the original.
    i2 = 0
    for i in DB:
        similarityPercentage = compareTwoImages(original, i)
        # print('Current Image: ' + pathList[i2])
        # print('Percentage: ' + str(similarityPercentage) )

        if(similarityPercentage >= comparePercentage):

			#	retain the maxPercentage & resultIndex for that image whose similarityPercentage is Maximum.
            if(similarityPercentage >= maxPercentage):
                maxPercentage = similarityPercentage
                resultIndex = i2

#            print("Index: " + str(i2))
 #           print('Percentage: ' + str(similarityPercentage))
  #          print("Image Path : " + pathList[i2])
            # add the similarityPercentage rather than the index value.
            # nehraList.append(i2)
        i2 = i2 + 1
    return resultIndex


#	Walk the directory to aquire the pathList that contains all the names of the images in img_db dir.
def getPathList():
    pathList = []
    for folder, subs, files in os.walk("C:/xampp/htdocs/phishing/images/img_db"):
        for filename in files:
            pathList.append(os.path.abspath(os.path.join(folder, filename)))
    return pathList

#	Initialize the DB by iterating through the pathList, storing the images in cv2 format in DB list.
def buildImageDB():
    pathList = getPathList()

    for i in pathList:
        temp = cv2.imread(str(i))   #   temp -> image (found in img_db directory) converted into cv2 format.
        updateImageList(temp)


#	append the currentImg at the end of the DB.
def updateImageList(currentImg):
    DB.append(currentImg)

#	Display the length of the DB.
def displayDB(list):
    # for i in list:
    print("Total No. Of Images in DB: " +  str(len(DB)) )

	
#	Fire Start the Image Processing..!!	
def start():

    #   Note the Start Time of the program.
#    startTime = int(round(time.time() * 1000))
#    print (startTime)

    print("Begin.")

    #   Initialize the DB i.e. images list in cv2 format.
    buildImageDB()

    #   Capture the screenshot of the current url fetched from php.
    captureScreenshot()

    #   store the captured screenshot in cv2 format in original variable.
    original = cv2.imread("C:/xampp/htdocs/phishing/images/target/target.png")

    #   major will accept the target image which is already in cv2 format & will compare it with
    #   each image (cv2 format) in DB list.
    #   check if its similarityPercentage is greater than comparePercentage
    #   then check if its greater than maxPercentage, obtain the maxPercentage & resultIndex value of the image
    #   that matches the most with the target image.
    resultIndex = major(original)

    #   display the length of the DB.
#    displayDB(DB)

    #   display the resultIndex value i.e. index pos. of the domain in urlList.
#    print("Result: " + str(resultIndex))

    #   display the domain present at the resultIndex pos. in urlList.
    bestMatchedDomain = urlList[resultIndex]
#    print("Domain: " + bestMatchedDomain)

    #   Calculate the finishing time & the time difference between start & finish timestamp.
#    finishTime = int(round(time.time() * 1000))
#    print (finishTime)
#    print ("Time Taken: " + str(finishTime - startTime) )

    #   Compare the domains of the resultIndex & sourceUrl
    if(targetDomain == bestMatchedDomain):
        #print("Safe")
        sys.exit(8)
    else:
        #print("NotSafe")
        sys.exit(11)
		

#	Fire start the python script for image processing.	
start()

'''

Time Stamp: 2nd Feb. 2K19, 02:56 AM..!!
Time Stamp: 2nd Feb. 2K19, 03:19 AM..!!

Url has been fetched,
screenshot has been captured successfully in less than 10 seconds.
Image Processing is working fine.

Code Developed By,
~K.O.H..!! ^__^

'''
