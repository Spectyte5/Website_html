<?php
// Taking data from the form


$subject = $_POST['SUBJECT'];
$type = $_POST['TYPE'];
$exam = $_POST['EXAM'];

// establishing connection with the database

$connection = mysqli_connect("localhost","s403170","wrobelrafal") or die("Connection with the database is impossible!");
$db = mysqli_select_db($connection ,"s403170")or die("Unable to select the database!");

// adding new records to the database

$sql = "INSERT INTO list_of_classes (name_of_class, type_of_class, exam) VALUES ('$subject','$type','$exam')";

if (mysqli_query($connection, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);
?>
