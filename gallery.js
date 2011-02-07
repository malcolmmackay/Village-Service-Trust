function next() {
	var photoElement=document.getElementById("photo");
	var imageIndex=photoElement.alt;
	var newIndex;
	if (imageIndex<6) {
		newIndex = eval(imageIndex)+1;
		photoElement.src='photos/'+newIndex+'.jpg';
		photoElement.alt=newIndex;
		document.getElementById("caption"+imageIndex).style.display="none";
		document.getElementById("caption"+newIndex).style.display="block";
	}
}
function prev() {
	var photoElement=document.getElementById("photo");
	var imageIndex=photoElement.alt;
	var newIndex;
	if (imageIndex>1) {
		newIndex = eval(imageIndex)-1;
		photoElement.src='photos/'+newIndex+'.jpg';
		photoElement.alt=newIndex;
		document.getElementById("caption"+imageIndex).style.display="none";
		document.getElementById("caption"+newIndex).style.display="block";
	}
}
