<?php

class Connect
{
    private $hostname = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "fileud";
    public $link;

    public function __construct()
    {
        $this->connFunction();
    }

    public function connFunction()
    {

        $this->link = mysqli_connect($this->hostname, $this->user, $this->pass, $this->dbname);
        if ($this->link) {
            echo "Connected";
        } else {
            echo "Not Connected";
        }
    }
}
new Connect;