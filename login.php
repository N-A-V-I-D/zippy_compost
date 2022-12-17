<!DOCTYPE html>
<html>
<head>
  <title>Store form data in .txt file</title>
</head>
<body>
  <?php

  if(isset($_POST['clients.txt']))
  {
  //itirate over text in client php file
  //check if login info can be found on get_included_file
  //if login info can be found on get_included_file
  //then direct to index page with full menu
  

  $data=$_POST['textdata'];
  $fp = fopen('login.txt', 'a');
  fwrite($fp, $data);
  fclose($fp);
  }
  ?>

</body>
</html>
