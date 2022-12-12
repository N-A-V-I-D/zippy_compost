<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
?>

<!DOCTYPE>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="sass/products.css">
</head>
<body>
	<?php
	print("<h1> Thank you for shopping with us!<br>The entered information is displayed here!</h1>");
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

