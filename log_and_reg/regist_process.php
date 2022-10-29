<?php

require("../crud_function/dbcon.php");

#Checking for the exact error:
// ini_set("display_errors", "1");
// error_reporting(E_ALL);

$user_name = $_POST["user_name"];
$email = $_POST["email"];
$password = $_POST["password"];
$user_type = $_POST["user_type"];



#For inserting into the database:
$sql = "INSERT INTO users (user_name,email,password,user_type)
  VALUES ('$user_name', '$email', '$password','$user_type')";

if (mysqli_query($con, $sql)) {
  echo " Record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

