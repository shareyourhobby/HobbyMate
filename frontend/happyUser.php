<?php
?>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description"
	content="HobbyMate | One stop shop for your Hobby needs">
<meta name="author" content="Vishal Arhatia">
<title>HobbyMate!!! | Learn, Share & Teach Hobbies!!!</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap responsive -->
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<!-- Font awesome - iconic font with IE7 support -->
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/font-awesome-ie7.css" rel="stylesheet">
<!-- Bootbusiness theme -->
<link href="css/boot-business.css" rel="stylesheet">

<script>
		function dispalyUsers()
		{
			if (window.XMLHttpRequest)
			{// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			}
			else
			{// code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
				}	
			}
			xmlhttp.open("GET","getuser.php",true);
			xmlhttp.send();
   		   
		}

		//This function is written keeping future in mind. We may need to invoke more than 1 function so this is required.
		function addLoadEvent(func) {
		  var oldonload = window.onload;
		  if (typeof window.onload != 'function') {
			window.onload = func;
		  } else {
		//	window.onload = function() {
//			  if (oldonload) {
				oldonload();
	//		  }
			  func();
			//}
		  }
		}
		addLoadEvent(function() {
		})
		
	</script>
</head>
<body>
	<!-- Start: MAIN CONTENT -->
	<!--PHP call-->
	<script>
			addLoadEvent(dispalyUsers);
		</script>
	<span id="txtHint"></span>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/boot-business.js"></script>
</body>
