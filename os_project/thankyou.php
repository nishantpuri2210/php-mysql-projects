<?php
require 'connection.php';

$name    = $conn->real_escape_string($_POST['u_name']);
$email   = $conn->real_escape_string($_POST['u_email']);
$subj    = $conn->real_escape_string($_POST['subj']);
$response = $conn->real_escape_string($_POST['response']);
$query   = "INSERT into tb_form (u_name,u_email,subj,response) VALUES('" . $name . "','" . $email . "','" . $subj . "','" . $response . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You...!!!! <br>";

 

   if( $_POST["u_name"] || $_POST["u_email"] || $_POST["subj"] || $_POST["response"]) {
      echo "Welcome ". $_POST['u_name']. "<br />";
      echo "Your email is ". $_POST['u_email']. "<br />";
	echo "Your subject is ". $_POST['subj']. "<br />";
	echo "you have a  ". $_POST['response']. " response";
      
      exit();
   }
$conn->close();
?>
 