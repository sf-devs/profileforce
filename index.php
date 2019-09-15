<!DOCTYPE html>
<html>
	<head>
	    <title>Peopleforce</title>
	    <script>
	    	window.onload = function(){
	    		let pathname = (new URL(window.location.href)).pathname;
	    		if(pathname.toLowerCase() === "/index.html"){
	    			pathname = pathname.replace('/index.html','')
	    			window.history.replaceState({}, document.title, "/");
	    		}
	    		document.getElementById("profileforce").src = "https://sf-devs-developer-edition.ap15.force.com/profileforce" + pathname; 
	    	}
		</script>
	</head>
	<body style="margin:0;">
  		<iframe id="profileforce" src="" style="height:100vh;width:100vw;overflow:visible;border:none;"/>
  	</body> 
</html>
