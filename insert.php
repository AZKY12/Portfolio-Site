<?php

$name = $_GET['name'];
$email = $_GET['email'];
$subject = $_GET['subject'];
$project_details = $_GET['project_details'];

//Call the dbcon.php file
require_once("dbcon.php");

//SQL Query
$query = "INSERT INTO student VALUES ('$name', '$email', '$subject','$project_details')";

if (mysqli_query($connection, $query))
{
  echo "New record created successfully";
} 
else 
{
  echo "Error: " . $query . "<br>" . mysqli_error($connection);
}

?>



