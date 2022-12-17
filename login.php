<!DOCTYPE html>
<html>
<head>
  <title>Store form data in .txt file</title>
</head>
<body>
  <?php
      // process login instruction

      // extract infor from form
      $user = $_POST['username'];
      $password =$_POST['password'];

      // open the file users.txt

      $file = fopen("users.txt", "r");

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
      	echo "<h2>Welcome Back" . $user . "!</h2>." . "<p>Please click on  <a href='private.html'> here </a> to visit your private site! ";;
      	}

      else
      {
      	echo "Can't enter site because of wrong username and password";
      }

      ?>

</body>
</html>
