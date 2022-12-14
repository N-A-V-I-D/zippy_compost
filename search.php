<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Search</title>
	<link rel="stylesheet" href="sass/products.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
	<nav id="sumNavbar" class="navbar navbar-dark bg-dark navbar-expand-lg">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="indexAfterLogin.html">
	    	<img src="images/navbarIcon.png" alt="brand icon" />
			<h1>ZC</h1>
			</a>

    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    	</button>

	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auzto mb-2 mb-lg-0">
	        <li class="nav-item ">
	          <a class="nav-link active"aria-current="page" href="aboutus.html">ABOUT US</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="products.html">PRODUCTS</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="contact.html">CONTACT US</a>
	        </li>
					<li class="nav-item">
	          <a class="nav-link" href="search.html">SEARCH</a>
	        </li>
 	        <li class="nav-item">
	          <a class="nav-link" href="index.html">LOG OUT</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<div class="center box">
	<?php
		$productName = $_GET['productName'];

		$file = fopen("products.txt", "r");
		$flag = FALSE;
		$count = 1;
		$collect = array();

		while(!(feof($file))){
			$line = fgets($file);
			$line = rtrim($line);
			$info = explode(":", $line);
			$c = 0;

			$cleanInfo = strtolower($info[0]);
			$cleanSearch = strtolower($productName);

			if (strpos($cleanInfo, $cleanSearch)){
				$flag = TRUE;
				$c++;
				array_push($collect, $info);
			}
		}

		if ($flag){
			print(" <h1 class='textTitle'>Relevant products</h1>");
			foreach($collect as $key => $valueSum){
				print("<div class='display'>");
				foreach ($valueSum as $value){
					print("<li style='list-style:none;'><p class='search'> $value </p></li>");
					}
					print("</div>");
					print("<br><br>");
			}
		}
		else{
			print("<p><span>Sorry, the product is unavailable!</span></p>");
		}
	?>
	</div>
	<div id="footer" class="container-fluid center">
		<p>@ 2022 by Zippy Compost, All Rights Reserved</p>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
