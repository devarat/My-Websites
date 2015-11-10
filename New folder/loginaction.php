<?php
if(isset($_POST['login_btn']))
 {
$userN = $_POST['user-name'];
$passW = $_POST['pass-word'];
$userlist = file ('accounts.txt');

$email = "";
$company = "";

$success = false;

foreach ($userlist as $user) {

    $user_details = explode('|', $user);
	
if(in_array($userN, $user_details))
	{
	$key = array_search($userN, $user_details);
	$key+1;
	
    if ( $user_details[$key] == $passW) {
        $success = true;
        $email = $user_details[1];
        $company = $user_details[0];
        break;
    }
}
}
if ($success) {
echo '<script language="javascript">';
        echo 'alert("ENJOY YOUR SHOPPING ")';
         
		  echo '</script>';
include('productsshow.html');
    
} else {
    echo "<br> You have entered the wrong username or password. Please try again. <br>";
}
}
?>