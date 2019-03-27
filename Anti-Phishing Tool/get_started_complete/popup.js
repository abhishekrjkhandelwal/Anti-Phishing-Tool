chrome.windows.getCurrent(function(w){
	chrome.tabs.getSelected(w.id,
		function(response){
			
		var str = response.url;
		var secureFlag = false;
			
			//	Match Https.

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
					   "https://www.google.com/",
					   "https://www.facebook.com/",
					   "swapwindow.com",
					   "kohfaucet.000webhostapp.com"
				];
			
			//	Setup array for black database for whitelist.
				var blackDB = [
					   "https://www.nulled.to/",
					   "https://swapwindow.com/",
					   //"https://www.facebook.com/",
					   //"swapwindow.com",
					   //"kohfaucet.000webhostapp.com"
				];
			
			// document.write("\n" + urlDB[2] + "\n" + "Length: " + urlDB.length);
			
			//document.write("\n" + str + "\n" + "DB: " + urlDB[0] + "\n");	
			// Compare result with whitelist urlDB.
			for (var i = 0; i < urlDB.length; i++){
				var temp = str.localeCompare(urlDB[i]);
				if(temp == 0){
					//document.write("\n" + "DB: " + urlDB[i] + "\n" + "Matched");
					//document.write("Secure!");
					secureFlag = true;
				//	return;
						
					var xhttp2 = new XMLHttpRequest();
					xhttp2.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {	
						
							document.getElementById("result").innerHTML = (this.responseText);
							return;
							
						}
					};
					//var encodedJson = { url: name, value: status };
					
					xhttp2.open("GET", "http://localhost/phishing/ui.php?demo=" + 8, true); 	
					xhttp2.send();
				}
			}
			
			
			if(secureFlag)
				return;
			
			//	Compare BlackList.
			for (var i = 0; i < blackDB.length; i++){
				var temp = str.localeCompare(blackDB[i]);
				if(temp == 0){
					//document.write("\n" + "DB: " + urlDB[i] + "\n" + "Matched");
					//document.write("Secure!");
					secureFlag = true;
				//	return;
						
					var xhttp2 = new XMLHttpRequest();
					xhttp2.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {	
							document.getElementById("result").innerHTML = (this.responseText);
							chrome.tabs.update(null, {url: 'http://localhost/phishing/phishing.php'});
							return;
						}
					};
					//var encodedJson = { url: name, value: status };
					
					xhttp2.open("GET", "http://localhost/phishing/ui.php?demo=" + 17, true); 	
					xhttp2.send();
				}
			}

			if(secureFlag)
				return;
			
		//	Execute Python Script.
		 //catch php variable in javascript
		
	//	Invoke a.php file by passing url as an argument to invoke python script.
//	document.write(str);	
	var name = str;	
	
	var status;	
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {	
			var myObj = JSON.parse(this.responseText);
			document.getElementById("demo").innerHTML = myObj[2];
			
			var b1 = document.getElementById("demo").innerHTML;
			status = b1;

				var xhttp2 = new XMLHttpRequest();
				xhttp2.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {	
					
						document.getElementById("result").innerHTML = (this.responseText);

					}
				};
				
				xhttp2.open("GET", "http://localhost/phishing/ui.php?demo=" + status, true); 	
				xhttp2.send();
			
			if(b1 == "17")
				chrome.tabs.update(null, {url: 'http://localhost/phishing/phishing.php'});
			
		}
	};
	xhttp.open("GET", "http://localhost/phishing/a.php?name=" + name, true);
	xhttp.send();

 			
		}
	);
	}
);

/*
Time Stamp: 28th January 2K19, 01:05 PM..!!

Code Developed By,
K.O.H..!! ^__^
*/

