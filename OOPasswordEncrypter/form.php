<?php


if(isset($_REQUEST["submit"]))
{
  include 'Resources/functions.php';
  
  $input = $_REQUEST["input"];
  
  $enc = new data($input);
  
  $enc->Encrypt($input);
  
  print_r($enc->output);
}
else
{
  //Nothing
}

?>


<html>
  <head>
<!--     <meta charset="utf-8"> -->
    <title>Connors Encryption Method</title>
  </head>
  <body>
    <form method="POST" action="<?php echo($_SERVER["PHP_SELF"]); ?>">
      <input type="text" name="input" required>
      </br>
      <input type="submit" name="submit" value="Encrypt!">
    </form>
  </body>
</html>