<?php
// connect to database
require_once('connect.php');
if(isset($_POST['submit'])){
 $firstname = $_POST['field_firstname'];
 $infixname = $_POST['field_infixname'];
 $lastname = $_POST['field_lastname'];
 $email = $_POST['field_email'];
 $password = $_POST['field_password'];
 $sql = "INSERT INTO customer
     (firstname, infixname, lastname, email, password)
     VALUES('$firstname', '$infixname', '$lastname','$email', '$password')";
 if ($conn->query($sql) === TRUE) {
   echo "Nieuwe klant toegevoegd";
 } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }
}
// close database connection
$conn->close();
?>
