chrome.windows.getCurrent(function(w){
	chrome.tabs.getSelected(w.id,
		function(response){
			var str = response.url;	  
			var secureFlag = false;
			
			//	Match Https.
			if(str.includes("https")){
				//document.write("Secure!");
				return ;
			}
			//document.write("Not Secure!");
			
			
			//	Extract the domain out of the url of the current webpage.
			var result = "a";
			if(str.includes(":")){
				//document.write("\ninside if\n");
				var colon = str.indexOf(":");
				var slash = str.substring(colon+3).indexOf("/");
				result =  str.substring(colon+3, colon+3 + slash);
			}
			else{
				//document.write("\ninside else\n");
				var slash = str.indexOf("/");
				if(slash > 0)
					result = str.substring(0,slash);
				result =  str;
			}
			
			//	result now contains only domain extracted from the str url.
			//document.write(result);
			
			//	Setup array for url database for whitelist.
			var urlDB = [
                   "www.google.com",
				   "fb.com",
				   "swapwindow.com",
				   "kohfaucet.000webhostapp.com"
			];
			
			// document.write("\n" + urlDB[2] + "\n" + "Length: " + urlDB.length);
			
			// Compare result with whitelist urlDB.
			for (var i = 0; i < urlDB.length; i++){
				var temp = result.localeCompare(urlDB[i]);
				//document.write("\n" + temp + "\n" + "DB: " + urlDB[i] + "\n");	
				if(temp == 0){
					//document.write("\n" + "DB: " + urlDB[i] + "\n" + "Matched");
					//document.write("Secure!");
					secureFlag = true;
					//return;
				}
			}

		//	Execute Python Script.
		 //catch php variable in javascript
		 var myObj;
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				 myObj = JSON.parse(this.responseText);
                document.getElementById("result").innerHTML = myObj;
				
				//myObj = JSON.parse(this.responseText);
				//document.getElementById("result").innerHTML = myObj;
		//document.write("\n2. " + String(myObj) + "\n");
		
            }
        };
        xmlhttp.open("GET", "http://localhost/phishing/script.php", true);
        xmlhttp.send();

		//document.write("\n2. " + "j" + "\n");
		
		
		
		

		
			//Take screenshot 

/*chrome.tabCapture.captureOffscreenTab('https://swapwindow.com', { 
    audio: true, 
    video: true 
}, function() { 
   	
});
*/
 			
		}
	);
	}
);

/*
Time Stamp: 28th January 2K19, 01:05 PM..!!

Code Developed By,
K.O.H..!! ^__^
*/


/*
function compareInDB(var url, var DB){
	
	for (var i = 0; i < DB.length; i++){
		var temp = url.localeCompare(DB[i]);
		if(temp == 0)
			document.write("Matched");
		else
			document.write("Not Matched1");
	}
	
}

function  setupArray(var array){
	array = [
                   "google.com",
				   "fb.com",
				   "swapwindow.com"
				];
}
 
*/