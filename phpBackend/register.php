<?php 
include "params.php";

error_reporting(E_ALL);

//posts and gets go here

$forename = $_POST['forename'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];

// passwords are checked for validity at the HTML level.
//Sha256 obvs.
$encryptPass = hash('sha256', $password);

//mySQLI statements:

$dupe = "SELECT email FROM `accounts` WHERE '$email' = email ";
$insertAcc = "INSERT INTO accounts (forename,surname,email,password) 
VALUES('$forename','$surname','$email','$encryptPass')";


//chex for dupes
$dupechex = mysqli_query($connect, $dupe);
$rows = mysqli_num_rows($dupechex);

if ($dupechex == 0) {

			if ($query = mysqli_query($connect, $insertAcc)) {
			//success
			echo mysqli_error($query);

			}

			else { 
			//no success
			echo mysqli_error($query);
			}
} 

else {
//duplicate
echo mysqli_error($query);

}

?>