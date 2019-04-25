<?php
session_start();
require_once('connect.php');
?>

<?php
if (isset($_POST['save'])){
  $name = $_POST['name'];
  $location = $_POST['location'];

  $sql->query("INSERT INTO data (name, location) VALUES('$name', '$location')") or die ($mysqli->error);
}

 ?>
