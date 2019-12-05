<!DOCTYPE html>
<?php

include "Class/Database.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/fontawesme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>


    <form action="" method="post" enctype="multipart/form-data" class="container">
        <div class="form-group">
            <label for="Username">username</label>
            <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId"
                placeholder="Username">

        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <select class="form-control" name="country" id="country">
                <option value="Bangladesh">Bangladesh</option>
                <option value="Japan">Japan</option>
                <option value="USA">USA</option>
            </select>
        </div>
        <div class="form-group">
            <label for="file">Upload Photo</label>
            <input type="file" class="form-control-file" name="file" id="file" placeholder=""
                aria-describedby="fileHelpId">
        </div>

        <button type="submit" class="btn btn-primary form-control" name="submit">Submit</button>
    </form><br>

    <a href="profile.php" class="btn btn-primary">Profile</a>




    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>