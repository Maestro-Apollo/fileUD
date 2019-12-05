<?php

include "connection.php";

class Select extends Connect
{

    public function selectFunction()
    {
        $res = "Select * from user_tbl";
        $sql = mysqli_query($this->link, $res);

        return $sql;
    }

}

$give = new Select;
$skl = $give->selectFunction();