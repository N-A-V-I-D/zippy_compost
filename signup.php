<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
   <h1 id="headline">
       Sign Up For Our Newsletter!
   </h1>

   <form action="signup.php" id="form1">
       <input type="text" name="username" id="username" placeholder="Username">
       <input type="text" name="password" id="password" placeholder="Password">
       <input type="text" name="verifypassword" id="verifypassword" placeholder="Repeat Password">
       <input type="submit" name="submit">
   </form>
</body>
</html>  -->

<!DOCTYPE html>
<html>
<head>
  <title>Store form data in .txt file</title>
</head>
<body>
  <form method="post">
    Enter Your Text Here:<br>
    <input type="text" name="textdata"><br>
    <input type="submit" name="submit">

  </form>
</body>
</html>
<?php

if(isset($_POST['textdata']))
{
$data=$_POST['textdata'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>
