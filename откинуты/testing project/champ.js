$(document).ready(function(){
	$("#logForm").fadeIn(1000);
});
 function security(){ 
		var login = $("#log").val();
		var password = $("#password").val(); 
	  if (window.XMLHttpRequest) {
	    // code for IE7+, Firefox, Chrome, Opera, Safari
	    xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
	    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
	    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	    	 document.body.innerHTML=xmlhttp.responseText;
	    }
	  }
	  $.ajaxSetup({cache: false}); 
	  xmlhttp.open("GET","security.php?login="+login+" & password="+password,true);
	  xmlhttp.send();
}