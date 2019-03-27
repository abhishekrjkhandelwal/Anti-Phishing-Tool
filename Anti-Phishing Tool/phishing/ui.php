
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

   <!-- success mode  -->
<style>		
.check_mark {
  width: 80px;
  height: 130px;
  margin: 0 auto;
}

button {
  cursor: pointer;
  margin-left: 15px;
}

.hide{
  display:none;
}

.sa-icon {
  width: 80px;
  height: 80px;
  border: 4px solid gray;
  -webkit-border-radius: 40px;
  border-radius: 40px;
  border-radius: 50%;
  margin: 20px auto;
  padding: 0;
  position: relative;
  box-sizing: content-box;
}

.sa-icon.sa-success {
  border-color: #4CAF50;
}

.sa-icon.sa-success::before, .sa-icon.sa-success::after {
  content: '';
  -webkit-border-radius: 40px;
  border-radius: 40px;
  border-radius: 50%;
  position: absolute;
  width: 60px;
  height: 120px;
  background: white;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

.sa-icon.sa-success::before {
  -webkit-border-radius: 120px 0 0 120px;
  border-radius: 120px 0 0 120px;
  top: -7px;
  left: -33px;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-transform-origin: 60px 60px;
  transform-origin: 60px 60px;
}

.sa-icon.sa-success::after {
  -webkit-border-radius: 0 120px 120px 0;
  border-radius: 0 120px 120px 0;
  top: -11px;
  left: 30px;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-transform-origin: 0px 60px;
  transform-origin: 0px 60px;
}

.sa-icon.sa-success .sa-placeholder {
  width: 80px;
  height: 80px;
  border: 4px solid rgba(76, 175, 80, .5);
  -webkit-border-radius: 40px;
  border-radius: 40px;
  border-radius: 50%;
  box-sizing: content-box;
  position: absolute;
  left: -4px;
  top: -4px;
  z-index: 2;
}

.sa-icon.sa-success .sa-fix {
  width: 5px;
  height: 90px;
  background-color: white;
  position: absolute;
  left: 28px;
  top: 8px;
  z-index: 1;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

.sa-icon.sa-success.animate::after {
  -webkit-animation: rotatePlaceholder 4.25s ease-in;
  animation: rotatePlaceholder 4.25s ease-in;
}

.sa-icon.sa-success {
  border-color: transparent\9;
}
.sa-icon.sa-success .sa-line.sa-tip {
  -ms-transform: rotate(45deg) \9;
}
.sa-icon.sa-success .sa-line.sa-long {
  -ms-transform: rotate(-45deg) \9;
}

.animateSuccessTip {
  -webkit-animation: animateSuccessTip 0.75s;
  animation: animateSuccessTip 0.75s;
}

.animateSuccessLong {
  -webkit-animation: animateSuccessLong 0.75s;
  animation: animateSuccessLong 0.75s;
}

@-webkit-keyframes animateSuccessLong {
  0% {
    width: 0;
    right: 46px;
    top: 54px;
  }
  65% {
    width: 0;
    right: 46px;
    top: 54px;
  }
  84% {
    width: 55px;
    right: 0px;
    top: 35px;
  }
  100% {
    width: 47px;
    right: 8px;
    top: 38px;
  }
}
@-webkit-keyframes animateSuccessTip {
  0% {
    width: 0;
    left: 1px;
    top: 19px;
  }
  54% {
    width: 0;
    left: 1px;
    top: 19px;
  }
  70% {
    width: 50px;
    left: -8px;
    top: 37px;
  }
  84% {
    width: 17px;
    left: 21px;
    top: 48px;
  }
  100% {
    width: 25px;
    left: 14px;
    top: 45px;
  }
}
@keyframes animateSuccessTip {
  0% {
    width: 0;
    left: 1px;
    top: 19px;
  }
  54% {
    width: 0;
    left: 1px;
    top: 19px;
  }
  70% {
    width: 50px;
    left: -8px;
    top: 37px;
  }
  84% {
    width: 17px;
    left: 21px;
    top: 48px;
  }
  100% {
    width: 25px;
    left: 14px;
    top: 45px;
  }
}

@keyframes animateSuccessLong {
  0% {
    width: 0;
    right: 46px;
    top: 54px;
  }
  65% {
    width: 0;
    right: 46px;
    top: 54px;
  }
  84% {
    width: 55px;
    right: 0px;
    top: 35px;
  }
  100% {
    width: 47px;
    right: 8px;
    top: 38px;
  }
}

.sa-icon.sa-success .sa-line {
  height: 5px;
  background-color: #4CAF50;
  display: block;
  border-radius: 2px;
  position: absolute;
  z-index: 2;
}

.sa-icon.sa-success .sa-line.sa-tip {
  width: 25px;
  left: 14px;
  top: 46px;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

.sa-icon.sa-success .sa-line.sa-long {
  width: 47px;
  right: 8px;
  top: 38px;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

@-webkit-keyframes rotatePlaceholder {
  0% {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
  }
  5% {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
  }
  12% {
    transform: rotate(-405deg);
    -webkit-transform: rotate(-405deg);
  }
  100% {
    transform: rotate(-405deg);
    -webkit-transform: rotate(-405deg);
  }
}
@keyframes rotatePlaceholder {
  0% {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
  }
  5% {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
  }
  12% {
    transform: rotate(-405deg);
    -webkit-transform: rotate(-405deg);
  }
  100% {
    transform: rotate(-405deg);
    -webkit-transform: rotate(-405deg);
  }
}

div1 {
  width: 100px;
  height: 100px;
  background-color: red;
  -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
  -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
  animation-name: example;
  animation-duration: 4s;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
  0%   {background-color: red;}
  25%  {background-color: yellow;}
  50%  {background-color: blue;}
  100% {background-color: green;}
}

/* Standard syntax */
@keyframes example {
  0%   {background-color: red;}
  25%  {background-color: yellow;}
  50%  {background-color: blue;}
  100% {background-color: green;}
}
</style>


<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:100,300,400');

.dropping-texts {
  display: inline-block;
  width: 280px;
  text-align: left;
  height: 56px;
  vertical-align: -2px;
}

.dropping-texts > div {
  font-size:0px;
  opacity:0;
  margin-left:-30px;
  position:absolute;
  font-weight:300;   
  box-shadow: 0px 60px 25px -20px rgba(0,0,0,0.5);
}

.dropping-texts > div:nth-child(1) {
  animation: roll 5s linear infinite 0s;
}
.dropping-texts > div:nth-child(2) {
  animation: roll 5s linear infinite 1s;
}
.dropping-texts > div:nth-child(3) {
  animation: roll 5s linear infinite 2s;
}
.dropping-texts > div:nth-child(4) {
  animation: roll2 5s linear infinite 3s;
}

@keyframes roll {
  0% {
    font-size:50px;
    opacity:0;
    margin-left:-30px;
    margin-top:0px;
    transform: rotate(-25deg);
  }
  3% {
    opacity:1;
    transform: rotate(0deg);
  }
  5% {
    font-size:inherit;
    opacity:1;
    margin-left:0px;
    margin-top:0px;
  }
  20% {
    font-size:inherit;
    opacity:1;
    margin-left:0px;
    margin-top:0px;
    transform: rotate(0deg);
  }
  27% {
    font-size:50px;
    opacity:0.5;
    margin-left:20px;
    margin-top:100px;
  }
  100% {
    font-size:50px;
    opacity:0;
    margin-left:-30px;
    margin-top:0px;
    transform: rotate(15deg);
  }
}

@keyframes roll2 {
  0% {
    font-size:50px;
    opacity:0;
    margin-left:-30px;
    margin-top:0px;
    transform: rotate(-25deg);
  }
  3% {
    opacity:1;
    transform: rotate(0deg);
  }
  5% {
    font-size:inherit;
    opacity:1;
    margin-left:0px;
    margin-top:0px;
  }
  30% {
    font-size:inherit;
    opacity:1;
    margin-left:0px;
    margin-top:0px;
    transform: rotate(0deg);
  }
  37% {
    font-size:1500px;
    opacity:0;
    margin-left:-1000px;
    margin-top:-800px;
  }
  100% {
    font-size:50px;
    opacity:0;
    margin-left:-30px;
    margin-top:0px;
    transform: rotate(15deg);
  }
}

@keyframes bg {
  0% {background: #ff0075;}
  3% {background: #0094ff;}
  20% {background: #0094ff;}
  23% {background: #b200ff;}
  40% {background: #b200ff;}
  43% {background: #8BC34A;}
  60% {background: #8BC34A;}
  63% {background: #F44336;}
  80% {background: #F44336;}
  83% {background: #F44336;}
  100% {background: #F44336;}
}

</style>

</head>
<body>

<div class="container">
    <div id="result"></div>
    <div id="demo"></div>	
<!-- Sucess -->
<?php

	
$status = $_GET['demo']; 

//echo "\nstatus: $status";	
/*
//	Extract the domain out of the url of the current webpage.
	function extractDomain($url){

    $url = str_replace('\\', '/', $url); 

    if(strpos($url, ":")){
        $colon = strpos($url, ":");
        $temp = substr($url, $colon + 3);
        $slash = strpos($temp, "/");
        
          // echo " : $colon\n";
    //    echo " slash : $slash\n";
     //   echo "temp: $temp\n";
        
        $length = $slash - $colon + 3;
        
        $domain = substr($temp, 0, $slash);
       
    }
    
    //  www.google.com/a12/asf
    else{
        
        $slash = strpos($url, "/");
        
        $domain = substr($url, 0, $slash);
        //echo "Domain : $domain \n";
    }
    
    return $domain;
    
    }
    
    $domain = extractDomain($url);

            $urlDB = [
                   "www.google.com",
				   "www.fb.com",
				   "swapwindow.com",
				   "kohfaucet.000webhostapp.com"
			];
			
			// document.write("\n" + urlDB[2] + "\n" + "Length: " + urlDB.length);
			
			// Compare result with whitelist urlDB.
			for($i = 0; $i < count($urlDB); $i++){
				$temp = strcmp($url,$urlDB[$i]);
				//document.write("\n" + temp + "\n" + "DB: " + urlDB[i] + "\n");	
				if($temp == 0){
					//document.write("\n" + "DB: " + urlDB[i] + "\n" + "Matched");
					//document.write("Secure!");
					$secureFlag = true;
					//return;
				}	
			}
*/

//	Match Https.
  //$user = $url;
  if($status == 8)  { ?>
	
  <div class="check_mark">
     <div class="sa-icon sa-success animate">
       <span class="sa-line sa-tip animateSuccessTip"></span>
       <span class="sa-line sa-long animateSuccessLong"></span>
       <div class="sa-placeholder"></div>
       <div class="sa-fix"></div>
     </div>
  </div>
  <div class="text-center">  
      <h3 class="display-4">Safe Website </h3>
  </div>
  <h5> <?php //echo $domain; ?></h5>
<div class="dropping-texts">
  <div>Goodluck</div>
     <div>Stay Secured</div>
  </div>
</div>

  <?php }  else { ?>
 
<div class="container"> 
  <div class="result"></div>
     <div class="demo"></div>  
	  
       <div class="text-center" style="color: red">
      <h3 class="display-1">Warning</h3>
  </div>
  <h5><?php //echo $url; ?></h5>
  <h3>This Website doesn't involves any Payment Portals. Please do not enter your Banking Credentials.</h3>
  <form action="">
    <input type="radio" name="gender" value="male">NeverBlock Site<br>
    <input type="radio" name="gender" value="female"> Add to Black List<br>
 </form>
  <div class="dropping-texts">
     <div>Goodluck</div>
  </div>
</div>	  
  <?php } ?>

</body>
</html>