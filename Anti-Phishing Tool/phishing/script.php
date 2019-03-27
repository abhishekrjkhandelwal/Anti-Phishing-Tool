<?php   
       
/*	$bridge = mysqli_connect('localhost', 'root', 'A88902616066a','pdetection');	
	$query = mysqli_query($bridge,"SELECT urls FROM users = '$user'");
	while($row = mysqli_fetch_array($query)){		
		echo  $row['urls'];   	
	}
*/
?>

<?php 

//	result will store the status value returned by python script.
$result = 5;
/*
echo "\nInitial Value: ";
echo $result;
echo "\n";

//	url fetched from the JS using AJAX.
$url = $_GET['name'];
echo "Url: ";
echo $url;

//	Executing the python script via exec command line shell which takes following arguments:
//	Arguments								Description					Accessible value in python script.
//	python 								-> python interpreter		|	no value.
//	C:/xampp/htdocs/phishing/night.py 	-> pathToPythonScript.py	|	this will be stored in argv[0] in python script.
//	$url 								-> url fetched from js		|	this will be stored in argv[1] in python script.
$a4 = exec("python C:/xampp/htdocs/phishing/night.py $url '2' ", $a1, $result);

echo "\nStatus: ";
//echo $a2;

//	a2 -> 8 i.e. Safe 	|	a2 -> 17 i.e. Insecure Warning!

if($result == 8)
	echo "Website is Safe!";
else if ($result == 17)
	echo "Warning!";
*/

$a5 = 3;
$myArr = array("John", "Mary", "Peter", "Sally");
$myArr[2] = $a5;

$myJSON = json_encode($myArr);

echo $myJSON;		

	
?>



<?php 
/*
$a1 = "23ashdbhsdbvhs";
$a2 = "3";

$url = $_GET['name'];

$message = exec("G:/xampptimes/htdocs/phishing/0/src/Ex.py 'param10' 'lol' ", $a1, $a2);

//$url = '$_GET['name'];';
//echo $url;


//2>&1
//$myJSON = json_encode($message);

//echo $myJSON;
*/
?>

<?php
//$id = '$_GET['name'];
/* $url = 'https://www.swapwindow.com/';
 
 $screen_shot_json_data = file_get_contents("https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url=$url&screenshot=true");
 
 $screen_shot_result = json_decode($screen_shot_json_data, true);
 
 $screen_shot = $screen_shot_result['screenshot']['data'];
 
 $screen_shot = str_replace(array('_','-'), array('/', '+'), $screen_shot);
 
 $screen_shot_image = '<img src= "data:image/jpeg;base64, ' .$screen_shot.' "/>';
 
  echo  $screen_shot_image ; 
  */
?>
