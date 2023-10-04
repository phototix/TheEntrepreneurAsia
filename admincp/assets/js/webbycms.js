function updateSideMenu(){
	if(window.XMLHttpRequest){updateSideMenu=new XMLHttpRequest();
	}else{ updateSideMenu=new ActiveXObject("Microsoft.XMLHTTP"); }
	updateSideMenu.onreadystatechange=function(){
		if (updateSideMenu.readyState==4 && updateSideMenu.status==200){
		}
	}
	updateSideMenu.open("GET","../assets/php/updateSideMenu.php",true);
	updateSideMenu.send();
}