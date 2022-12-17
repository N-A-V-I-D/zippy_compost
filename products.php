<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
?>

<!DOCTYPE>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="contactAboutus.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=JetBrains Mono" >
	<style>body, button {font-family: "JetBrains Mono";}</style>
</head>
<body>
	<?php
	print("<h1 class='response'> Thank you for shopping with us!<br>The entered information is displayed here!</h1>");
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
