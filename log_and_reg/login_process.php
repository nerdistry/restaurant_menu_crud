<?php

require("../crud_function/dbcon.php");

#Checking for the exact error:
ini_set("display_errors", "1");
error_reporting(E_ALL);

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
$user_name = $_POST["user_name"];
$password = ($_POST["password"]);


#For inserting into the database:
$sql = "SELECT * FROM  users where user_name = '".$user_name."' AND password = '".$password."'";

$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result);
 
if($row["user_type"] == "user")
{
  $_SESSION["user_name"]=$user_name;
  $_SESSION["user_id"]=$row["user_id"];

  echo"You do not have rights to view this page";

  // header("location: ..\crud_function\index.php");
  
}

elseif($row["user_type"] == "admin")
{
  $_SESSION["user_name"]=$user_name;
  $_SESSION["user_id"]=$row["user_id"];


  header("location: ..\crud_function\index.php");
  
  
}

else
{
echo "username or password is incorrect.";
}

// if (mysqli_query($conn, $sql)) {
//   echo " New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
}

