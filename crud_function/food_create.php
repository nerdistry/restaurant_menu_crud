<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <style>
        .btn-primary{
            background: linear-gradient(to right, #561139, #38a2d7);
} 
.float-end{
            background: linear-gradient(to right, #561139, #38a2d7);
} 
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Menu for the Day</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Food Add
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Food Name</label>
                                <input type="text" name="food_name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Ingredients</label>
                                <input type="text" name="ingredients" class="form-control">                                </textarea>
                            </div>
                                                
                            <div class="mb-3">
                                <label>Time to start cooking</label>
                                <input type="time" name="time" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_food" class="btn btn-primary">Save to menu</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>