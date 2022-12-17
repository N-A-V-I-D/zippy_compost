<!DOCTYPE html>
<html>
<head>
  <title>Store form data in .txt file</title>
  <link rel="stylesheet" href="contactAboutus.css"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=JetBrains Mono" >
  <style>body, button {
    font-family: "JetBrains Mono";
  }
</style>
</head>
<body>

  <?php
    // get values from form
    $name = $_POST['username'];
    $psw = $_POST['password'];

    // open the file to store data in with append operation
    $filea = fopen("signup.txt","a") or die("can't open file");

    // create line to store all values
    $line= $name.":".$psw."\n";

    // write/store line into file
    fwrite($filea, $line);

    // close the file
    fclose($filea);



    echo "<h1 class='response'>Thank you for signing up, ".$name ." !</h1> <br> <br> <h3 class='response'>Welcome to our members only Zippy Compost website, enjoy!! </h3><a href='indexAfterLogin.html'><button id='responseButton' type='button' name='button'> Home Page</button></a>";


    ?>
</body>
</html>
