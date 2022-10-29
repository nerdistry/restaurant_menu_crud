
<?php
session_start();
require 'dbcon.php';
if(!isset($_SESSION["user_name"]))
{
    header("location:../log_and_reg/login_regist.php");
}
?>
<!doctype html>
<html lang="en">

<head>
  <style>
    nav {
width: 100%;
height: 75px;
background-color: white;
line-height: 75px;
padding: 0px 100px;
position: fixed;
z-index: 1;
}


nav ul {
float: right;
}

nav ul li {
display: inline-block;
list-style: none;
}

nav ul li a {
color: black;
text-decoration: none;
font-size: 30px;
text-transform: uppercase;
padding: 0px 32px;
font-weight: bold;
}

.btn-sm,.btn-danger{
background: linear-gradient(to right, #38a2d7, #38a2d7);
} 

  </style>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Menu CRUD</title>
</head>

<body>
  <nav>
    <ul>
<li><a href=""><?php
            echo"♞ hi,";
            echo $_SESSION["user_name"];
            echo"<a href='../log_and_reg/logging_out.php'>Log Out</a>";
            

                ?>
                </li>
                </ul>
                </nav>

  <div class="container mt-4">

    <?php include('message.php'); ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Menu Details
              <a href="food_create.php" class="btn btn-primary float-end">Add Food</a>
            </h4>
          </div>
          <div class="card-body">

            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                <th>Id</th>

                  <th>Food name</th>
                  <th>Ingredients</th>
                  <th>Commence cooking</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = "SELECT * FROM food";
                $query_run = mysqli_query($con, $query);

                if (mysqli_num_rows($query_run) > 0) {
                  foreach ($query_run as $food) {
                ?>
                    <tr>
                      <td><?= $food['id']; ?></td>
                      <td><?= $food['food_name']; ?></td>
                      <td><?= $food['ingredients']; ?></td>
                      <td><?= $food['time']; ?></td>
                      
                      <td>
                        <a href="food_create.php?id=<?= $food['id']; ?>" class="btn btn-info btn-sm">Create</a>
                        <a href="food_edit.php?id=<?= $food['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                        <form action="code.php" method="POST" class="d-inline">
                          <button type="submit" name="delete_food" value="<?= $food['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                      </td>
                    </tr>
                <?php
                  }
                } else {
                  echo "<h5> No Record Found </h5>";
                }
                ?>

              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>