<?php   
       
/*	$bridge = mysqli_connect('localhost', 'root', 'A88902616066a','pdetection');	
	$query = mysqli_query($bridge,"SELECT urls FROM users = '$user'");
	while($row = mysqli_fetch_array($query)){		
		echo  $row['urls'];   	
	}
*/
?>

<?php 
$a1 = "23ashdbhsdbvhs";
$a2 = "3";

if(isset($_GET['name'])){
	$url = $_GET['name'];
}

$message = exec("G:/xampptimes/htdocs/phishing/0/src/Ex.py 'param10' 'lol' ", $a1, $a2);

//$url = '$_GET['name'];';
//echo $url;


//2>&1
//$myJSON = json_encode($message);

//echo $myJSON;

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


<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">
  <div class="col-md-3">
  <div class="row">
   <img src="images/warning.png" class="rounded" alt="Cinque Terre">
    <div class="warning">
	    <h1 class="text-warning">WARNING!</h1>
	</div>
   <h3 style="margin-left:340px">INSECURE WEBSITE</h3>

	</div>	
	</div>
	<div class="sug">
   <h5>This Website might try to steal your personal information eg. Password, Messages, Credit/Debit card information. 
            Please do not Enter Personal Information.</h5>
	</div>
		<div class="button">
	       <a href="https://www.google.com/" class="btn btn-success" role="button">Take Me Away!</a>
	    </div>
    
	
	<div class="dropdown dropright">
		<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
		    Move Options
		</button>
		<div class="dropdown-menu">
		  <a class="dropdown-item" onclick = "myFunction()"    href="">Add to Block List</a>
		  <a class="dropdown-item" href="#">Never Block This Site</a>
		  <a class="dropdown-item" href="#">Continue Anyway</a>
		</div>
  </div>  
	</div>
</body>
</html>