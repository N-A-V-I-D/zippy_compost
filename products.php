<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
?>
<!DOCTYPE>
<html>
<head>
  <title>Store form data in .txt file</title>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="contactAboutus.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=JetBrains Mono' >
    <style>
        body {
            font-family: 'JetBrains Mono';

      }
			li {
				text-align: center;
			}
    </style>
</head>
<!-- <head>
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="contactAboutus.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=JetBrains Mono" >
	<style>body, button {font-family: "JetBrains Mono";}</style>
</head> -->
<body>
	<?php
	echo " <div class='header'><nav id='sumNavbar' class='navbar navbar-dark bg-dark navbar-expand-lg'><div class='container-fluid'>
				<a class='navbar-brand' href='index.html'>
						<img class='navBarImg' src='images/navbarIcon.png' alt='brand icon'/>
								<h1>ZC</h1>
						</a>

				<button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
			<span class='navbar-toggler-icon'></span>
				</button>

				<div class='collapse navbar-collapse' id='navbarSupportedContent'>
					<ul class='navbar-nav me-auzto mb-2 mb-lg-0'>
						<li class='nav-item '>
								<a class='nav-link active'aria-current='page' href='aboutus.html'>ABOUT US</a>
							</li>
											<li class='nav-item'>
												<a class='nav-link' href='products.html'>PRODUCTS</a>
										</li>
										<li class='nav-item'>
												<a class='nav-link' href='contact.html'>CONTACT US</a>
										</li>
										<li class='nav-item'>
												<a class='nav-link' href='search.html'>SEARCH</a>
										</li>
										<li class='nav-item'>
												<a class='nav-link' href='index.html'>LOG OUT</a>
										</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>";
	echo "<h1 class='response'> Thank you for shopping with us!<br>The entered information is displayed here!</h1>";
	$line = "";

	foreach ($_POST as $key => $value)
	{
	$line .= $value . ":";
	print("<li style='list-style:none;'> $key: $value ");
	}
	$line .= "\n";
	$filea = fopen("clients.txt","a+") or die("can't open file");
	fwrite($filea, $line);
	fclose($filea);
?>


</body>
</html>
