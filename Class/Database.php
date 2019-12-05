<?php

include 'connection.php';

class Database extends Connect
{

    public function insetData()
    {

        if (isset($_POST['submit'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];
            $country = $_POST['country'];
            $image = $_FILES['file'];
            $img_name = $image['name'];
            $destination = 'Upload/' . $img_name;
            $tmp_name = $image['tmp_name'];
            if (move_uploaded_file($tmp_name, $destination)) {
                $sql = "insert into user_tbl(username,password,country,image) values ('$username','$password','$country','$img_name')";
                $res = mysqli_query($this->link, $sql);
                if ($res) {
                    echo "Data added";
                } else {
                    echo "Not Added";
                }
            } else {
                echo "Image not added";
            }
        }
    }
}

$db = new Database;
$db->insetData();