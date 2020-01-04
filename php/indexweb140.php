<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Website">
	<meta name="keywords" content="web">
	<meta name="author" content="Juan Diaz">
	<title>My Website | Welcome</title>
	<link rel="stylesheet" type="text/css" href="http://students.cpcc.edu/~jdiaz028/00-personal/php/index.css">
	<!-- social media icon to library -->

</head>
<body>
	<header>
		<div class="container">
			<a href="http://students.cpcc.edu/~jdiaz028/00-personal/resumeWeb.html" target="_blank">
				<img class="logo" src="http://students.cpcc.edu/~jdiaz028/sharedfiles/images/logo//juandiaz.png" alt="JuanDiazPhoto">
			</a>
			<h1> Portfolio</h1>
			<a href="http://www.colombia.travel/en" target="_blank" title="About_Colombia">
				<img src="https://s-i.huffpost.com/gen/1254951/images/o-COLOMBIA-FLAG-facebook.jpg" alt="Colombia" style="float:right;width:150px;">
			</a>
			<a href="#" title="Website In Contruction" style="color:white;">
				<h2>...</h2>		<!--setting link?		-->
			</a>
		</div>
	</header>
<main>
	<nav id="navbar">
			<div class="container">
				<ul>
					<li>
							<a href="?p=tocweb140.php">TOC-Web140</a></li>
					<li class="current">
						<a href="?p=contact_me.php"">Contact Me</a>
					</li>
					<li>
							<a href="?p=#" title="login comming soon">...</a>
					</li>		<!--		<li>
						<a href="?p=php/extra.php"">...</a>
					</li>
					<li>
							<a href="?p=php/contract.php">Contract</a>
					</li>					<li>
							<a href="?p=php/template.php">Template</a>
					</li>
					<li>
						<a href="?p=php/brand.php"">Brand</a>
	-->				</li>
				</ul>
			</div>
		</nav>



<!-- dynamic content goes here -->

<?php
	$sPage = $_GET["p"];
	//echo ("You picked the page: " . $sPage); 
	
	if($sPage == "") {  $sPage = "introduction.php"; }
	include($sPage);
?>

<!--	End dynamic content from other sources		-->


</main>
	<footer>
		<p>Copyright &copy; 2018 My Website</p>
	<!--social, now it on contactMe.php-->

	<div id="validate">  
		<a href="http://validator.w3.org/check?uri=referer">
			<img src="http://www.tropicalteachers.com/web110/images/valid_html5.gif" alt="Valid HTML 5" width="90" style="border:0px;" />
		</a>
   	<a href="http://jigsaw.w3.org/css-validator/check/referer">
			<img src="http://jigsaw.w3.org/css-validator/images/vcss-blue"  alt="Valid CSS!" width="90" style="border:0px;"/>
		</a>
 	</div>
       <p>Designed by Juan D&iacute;az</p>
</footer>	
</body>
</html>