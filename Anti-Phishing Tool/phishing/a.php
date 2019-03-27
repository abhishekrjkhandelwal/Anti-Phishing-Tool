<?php   
  
 /* 
  $url = $_GET['name'];
  
  $a1 = "1";
  $a2 = json_encode($a1);
  
  $response = JSON.parse($a2);
  echo $response;
*/ 
?>

<?php

$a1;
$result;

$url = $_GET['name'];

$a4 = exec("python C:/xampp/htdocs/phishing/night.py $url '2' ", $a1, $result);


$myArr = array("John", "Mary", "Peter", "Sally");
$myArr[2] = $result;

$myJSON = json_encode($myArr);

echo $myJSON;
?>
