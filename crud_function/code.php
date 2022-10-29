<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_food']))
{
    $food_id = mysqli_real_escape_string($con, $_POST['delete_food']);

    $query = "DELETE FROM food WHERE id='$food_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Food has been deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Food has Not been Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_food']))
{
    $food_id = mysqli_real_escape_string($con, $_POST['food_id']);

    $food_name = mysqli_real_escape_string($con, $_POST['food_name']);
    $ingredients = mysqli_real_escape_string($con, $_POST['ingredients']);
    $time = mysqli_real_escape_string($con, $_POST['time']);

    $query = "UPDATE food SET food_name='$food_name', ingredients='$ingredients', time='$time' WHERE id='$food_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Menu Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Food Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_food']))
{
    $food_name = mysqli_real_escape_string($con, $_POST['food_name']);
    $ingredients = mysqli_real_escape_string($con, $_POST['ingredients']);
    $time = mysqli_real_escape_string($con, $_POST['time']);
    

    $query = "INSERT INTO food (food_name,ingredients,time) VALUES ('$food_name','$ingredients','$time')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Food has been added to menu successfully";
        header("Location: food_create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Food has not been added";
        header("Location: food_create.php");
        exit(0);
    }
}

?>