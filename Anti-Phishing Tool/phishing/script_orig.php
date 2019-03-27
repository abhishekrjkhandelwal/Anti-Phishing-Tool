<?php 

//	result will store the status value returned by python script.
$result = 5;
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
	
?>