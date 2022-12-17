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
      // process login instruction

      // extract infor from form
      $user = $_POST["username"];
      $password =$_POST['password'];


      // open the file users.txt

      $file = fopen("user.txt", "r");

      $flag = FALSE;

      // read one line at time from file and assign each line to a string called $line
      while(!(feof($file)))
      {

      // get one line at time from file
      $line= fgets($file);

      // remove end of line character from line using rtrim function
      $line = rtrim($line);

      // split string on : to get each field separatly and put values in an array

      $info = explode(":", $line);

      // check for a match between what user inputted and whats in file

      if (($user == $info[0] ) && ( $password == $info[1] ))
      {
      // if there is a match set flag to true and exit
      $flag = TRUE;
      break;
      }

      }

      // check to see if there is a match flag = TRUE

      if ($flag)
      	{
      	echo "<div class='response'><h2> Good to see you fellow composter " . $user . "!</h2>" . "<br><p class='response'><a href='indexAfterLogin.html'><button id='responseButton' type='button' name='button'> Home Page </button></a> <br><a href='profile.html'><button id='responseButton' type='button' name='button'> Profile Page </button></a></div> ";;
      	}

      else
      {
      	echo "<div class='response'>Can't enter site because of wrong username and password <br> <a href='login.html'><button id='responseButton' type='button' name='button'> Try Again </button></a></div>";
      }

      ?>

</body>
</html>
