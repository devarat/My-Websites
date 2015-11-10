<?php

 if(isset($_POST['submit_btn']))
 {
  $fname = $_POST['fname'];
  
  $email = $_POST['emailaddr'];
  $username = $_POST['uname'];
  $password = $_POST['pwd'];
  $text = $fname . "|" . $email . "|" . $username . "|" . $password . "\n";
  $fp = fopen('accounts.txt', 'a+');

    if(fwrite($fp, $text))  {
        //echo '<script language="javascript">';
        //echo 'alert("REGISTRATION SUCESSFUL!! GO AHEAD LOGIN!! ")';
         
		  //echo '</script>';
         include('products.php');
    }
fclose ($fp);    
}
?>