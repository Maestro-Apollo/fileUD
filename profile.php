<!DOCTYPE html>
<?php

include "Class/select.php";

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


    <section class="mx-auto container">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Passowrd</th>
                    <th scope="col">Country</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($sl = mysqli_fetch_assoc($skl)) {?>
                <tr>
                    <th scope="row"><?php echo $sl['username']; ?></th>
                    <td><?php echo $sl['password']; ?></td>
                    <td><?php echo $sl['country']; ?></td>
                    <td><img src="Upload/<?php echo $sl['image']; ?>" alt=""></td>
                </tr>

                <?php }?>
            </tbody>
        </table>

    </section>




    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>