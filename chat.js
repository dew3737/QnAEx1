function showChat(){
	
	//채팅내용 보여주기
	var str;
	str = document.getElementById("msg").value; console.log(str);
	document.getElementById("list").innerHTML = document.getElementById("list").innerHTML + str;

	if(str.length == 0){
		return;
	} else {
		var xmlhttp = new XMLHttpRequest(); //The XMLHttpRequest object can be used to request data from a web server
		xmlhttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){ console.log("good");
				document.getElementById("list").innerHTML = document.getElementById("list").innerHTML + this.responseText;
			}
		}
		
		xmlhttp.open("GET", "write.php?msg=</br></br>" + str, true);
		xmlhttp.send(); console.log(str);
		
	}
	
/*	//채팅내용에 따른 대답 보여주기
	if(str2 == ""){
		document.getElementById("list").innerHTML = "";
		return; 
	} 
	if(window.XMLHttpRequest){	
		xmlhttp = new XMLHttpRequest();		
	} else {
	    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	    }
	xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
			document.getElementById("list").innerHTML=this.responseText;
			}
		}
	
	xmlhttp.open("GET","getuser.php?q="+str,true);
	xmlhttp.send();*/
}