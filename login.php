<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
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
    </style>
=======
  <title>Store form data in .txt file</title>
  <link rel="stylesheet" href="contactAboutus.css"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=JetBrains Mono" >
  <style>body, button {
    font-family: "JetBrains Mono";
  }
</style>
>>>>>>> master
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
<<<<<<< HEAD
      	// echo "<h1 class='textTitle'>Welcome Back" . $user . "!</h2>.";
          echo " <div class='header'>
          <nav id='sumNavbar' class='navbar navbar-dark bg-dark navbar-expand-lg'>
              <div class='container-fluid'>
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
        echo "<h1 class='textTitle'>Welcome Back!</h1>";
        echo "<h3 style='text-align: center;'>Your Username: $user <?h3>";
        echo "<h3 style='text-align: center;'>Your Password: $password <?h3>";
        
=======
      	echo "<div class='response'><h2> Welcome Back Fellow Composter!!" . $user . "!</h2>" . "<br><p class='response'><a href='indexAfterLogin.html'><button id='responseButton' type='button' name='button'> Home Page </button></a> <br><a href='profile.html'><button id='responseButton' type='button' name='button'> Profile Page </button></a></div> ";;
>>>>>>> master
      	}

      else
      {
      	echo "<div class='response'>Can't enter site because of wrong username and password <br> <a href='login.html'><button id='responseButton' type='button' name='button'> Try Again </button></a></div>";
      }

      ?>


</body>
</html>
