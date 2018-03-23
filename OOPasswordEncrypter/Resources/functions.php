<?php


class data
{
  var $input;
  var $key;
  var $output;
  
  function __construct($input)
  {
    $this->input = $input;
  }
  
  function Encrypt($key)
  {
    //Split the input into an array 
    $array = str_split($this->input);
    print_r($array);
    print_r("</br></br>");
    foreach ($array as &$value) 
    {
      //Encrypt each now
      $salt = "32096c2e0eff33d844ee6d675407ace18289357d7a81af3e591ac713f8";
      $value = sha1($value,$salt);
      //var_dump($value);
      $this->output .= $value;

    }
    print_r("</br>" . $this->output);
    print_r("</br>");
  }
}



?>