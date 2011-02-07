function showInfoLayer(id){
		infoLayerDiv = document.getElementById(id);
		parentNode = document.getElementById("main");
		coverDiv = document.getElementById("cover");
		if (infoLayerDiv.style.display=="none"){
			infoLayerDiv.style.display="block";
			coverDiv.style.display="block";
		}
		else {
			infoLayerDiv.style.display="none";
			coverDiv.style.display="none";
		}
	}

function closeLayer(div_element) {
	alert(div_element);
	}

function toggleInfoPane(list_element){
		openNode = list_element.getElementsByTagName('p')[0];
		if(openNode.style.display=="none")
		{
			//first close all drawers
			drawers = list_element.parentNode;
			drawer_nodeList = drawers.getElementsByTagName('p');
			for (var i = 0; i<drawer_nodeList.length; i++)
   			{
   				drawer_nodeList[i].style.display="none";
   			}
			//open the relevant drawer
			openNode.style.display="block";
		}
		else
		{
			openNode.style.display="none";
		}
	}
function toggleBulletPoint(list_element){
		
		openDetail = list_element.getElementsByTagName('p')[0];
		openHeader = list_element.getElementsByTagName('a')[0];
		if(openDetail.style.display=="none")
		{
			drawers = list_element.parentNode;
			drawer_nodeList = drawers.getElementsByTagName('p');
			for (var i = 0; i<drawer_nodeList.length; i++)
   			{
   				drawer_nodeList[i].style.display="none";
   			}
			drawer_nodeList = drawers.getElementsByTagName('a');
			for (var i = 0; i<drawer_nodeList.length; i++)
   			{
   				drawer_nodeList[i].style.display="block";
   			}

			openDetail.style.display="block";
			openHeader.style.display="none";
		}
		else
		{
			openDetail.style.display="none";
			openHeader.style.display="block";
		}
	}

