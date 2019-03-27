import cv2
import os
import time
import sys
from selenium.webdriver.chrome.options import Options
from selenium import webdriver


arg1 = sys.argv

#   Source Domain in Argument from JS.
#sourceDomain = "eleventh.coms"
sourceDomain = arg1[1]

#original = cv2.imread("C:/xampp/htdocs/phishing/images/target.png")
#image_to_compare = cv2.imread("E:/HEADQUARTERS..!!/CodeBase/Python/Test1/res/apple/duplicate.png")

comparePercentage = 39
nehraList = []
result = "null"

urlList = [
    "https://www.google.com/",
    "https://retail.axisbank.co.in/",
    "3rd.com",
    "4th.com",
    "5.com",
    "6.com",
    "7.com",
    "8.com",
    "9.com",
    "10.com",
    "https://www.google.com/"
]

def captureScreenshot():
    ''' Save a screenshot from spotify.com in current directory. '''
    DRIVER = 'C:/xampp/htdocs/phishing/chromedriver'
    #driver = webdriver.Chrome(DRIVER)

    options = Options()
    options.add_argument("--headless")
    options.add_argument('window-size=1200x600') # optional for resolution of target image.

    driver = webdriver.Chrome(options=options)

    driver.get(sourceDomain)	#	sourceDomain -> url of webpage to capture screenshot.
    f = driver.get_screenshot_as_png()
    with open("C:/xampp/htdocs/phishing/images/target.png", 'wb') as file:
       file.write(f)
	   
    driver.quit()

captureScreenshot()

original = cv2.imread("C:/xampp/htdocs/phishing/images/target.png")





def checkEquality(original, image_to_compare):
    if original.shape == image_to_compare.shape:
        #print("The images have same size and channels")
        difference = cv2.subtract(original, image_to_compare)
        b, g, r = cv2.split(difference)
'''
    #   Print msg. if images are completely equal.
        if cv2.countNonZero(b) == 0 and cv2.countNonZero(g) == 0 and cv2.countNonZero(r) == 0:
            print("The images are completely Equal")
        else:
            print("The images are NOT equal")
'''

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


def compareTwoImages(original, image_to_compare):
    # 1) Check if 2 images are equals
#    checkEquality(original, image_to_compare)

    # 2) Check for similarities between the 2 images
    return checkSimilarity(original, image_to_compare)


# compareTwoImages(original, image_to_compare)

def major(DB):
    pathList = getPathList()
    i2 = 0
    for i in DB:
        similarityPercentage = compareTwoImages(original, i)
        # print('Current Image: ' + pathList[i2])
        # print('Percentage: ' + str(similarityPercentage) )
        print('\n----------------------\n')

        if(similarityPercentage >= comparePercentage):
            print("Index: " + str(i2))
            print('Percentage: ' + str(similarityPercentage))
            print("Image Path : " + pathList[i2])
            nehraList.append(i2)
        i2 += 1


def getPathList():
    pathList = []
    for folder, subs, files in os.walk("C:/xampp/htdocs/phishing/images"):
        for filename in files:
            pathList.append(os.path.abspath(os.path.join(folder, filename)))
    return pathList


def buildImageDB():
    pathList = getPathList()

    for i in pathList:
        temp = cv2.imread(str(i))
        updateImageList(DB, temp)


def updateImageList(imageList, currentImg):
    imageList.append(currentImg)


def displayDB(list):
    # for i in list:
    print("Total No. Of Images in DB: " +  str(len(DB)) )


DB = list()
print("Begin.")


startTime = int(round(time.time() * 1000))
print (startTime)

buildImageDB()

major(DB)
displayDB(DB)

finishTime = int(round(time.time() * 1000))
print (finishTime)

#	Find that index of nehraList whose similarityPercentage is max. & store it in result.
for i in nehraList:
    print(i)
    result = max(nehraList)
print(":" + str(result))

targetDomain = urlList[result-1]

print("Domain: " + targetDomain)

r = -1

#   Compare the domains of the result & sourceUrl
if(targetDomain == sourceDomain):
    #print("Safe")
	
	sys.exit(3)
else:
    #print("NotSafe")
	sys.exit(4)
	#r = 4

#print ("Time Taken: " + str(finishTime - startTime) )

#print("End.")

#r = 1
if (r < 2):
	sys.exit(423)
else:
	sys.exit(456)


sys.exit(34)