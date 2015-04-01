<?php
define('HOST', '127.0.0.1');
define('NAME' , 'rock_accounts');
define('USER' , 'root');
define('PASSWORD', 'root');

$connect=mysqli_connect(HOST,USER,PASSWORD) or die("failed to connect");
 
$database = mysqli_select_db($connect, NAME) or die ("failed to connect error 2");
?>