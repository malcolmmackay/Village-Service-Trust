function kgToRs()
		{
		kgField = document.getElementById("kg");
		// Fill in the Rupees field.
		rsField = document.getElementById("Rs");
		rsField.value = kgField.value * 38;
		// Compensate for PayPal's 3.4% + $0.30 reduction.
		rsField.value = parseInt(1.06*rsField.value)+15;
		// Update the myCurrency field.
		ajaxFunction();
		}
	
		function RsTokg()
		{
		// Fill in the kg field.
		rsField = document.getElementById("Rs");
		kgField = document.getElementById("kg");
		var kg = Math.round((0.94*rsField.value)-15 / 38);
		}

		function updateItemName() {
		// Update PayPal item name.
		var numKg = document.getElementById("kg").value;
		var itemName = numKg+" kg of rice for the VST Shelter Home";
		document._xclick.item_name.value = itemName;
		// Update Currency Label on form.
		document.getElementById("curLabel").firstChild.nodeValue = document._xclick.selConvertTo.value;
		}
		
		function kgDown() {
		if (document._xclick.kg.value > 10) {
			document._xclick.kg.value=parseInt(document._xclick.kg.value)-10;
			kgToRs();	
		}
		}

		function kgUp() {
			document._xclick.kg.value=parseInt(document._xclick.kg.value)+10;
			kgToRs();			
		}



function ajaxFunction() {
	var ajaxRequest;  // The variable that makes Ajax possible!
	
	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			document.getElementById("myCurrency").value = ajaxRequest.responseText;
			// Change the name of the item to 'x' kg of rice.
			updateItemName();

														}
	}
	// Malcolm - extra stuff.
	numRs = document.getElementById("Rs").value;
	myCur = document.getElementById("selConvertTo").value;
	strParameters = "currencyFrom=INR&currencyTo="+myCur+"&amount="+numRs;
	strGetRequest = "../donate/getConversion.php?"+strParameters;
	ajaxRequest.open("GET", strGetRequest, true);
	ajaxRequest.send(null); 
}


function reverseConversion() {
	var ajaxRequest;  // The variable that makes Ajax possible!
	
	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			document.getElementById("Rs").value = ajaxRequest.responseText;
			RsTokg();
			// Change the name of the item to 'x' kg of rice.
			updateItemName();

														}
	}
	// Malcolm - extra stuff.
	numCur = document.getElementById("myCurrency").value;
	myCur = document.getElementById("selConvertTo").value;
	strParameters = "currencyFrom="+myCur+"&currencyTo=INR&amount="+numCur;
	strGetRequest = "../donate/getConversion.php?"+strParameters;
	ajaxRequest.open("GET", strGetRequest, true);
	ajaxRequest.send(null); 
}

		

