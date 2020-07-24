<?php
    include dirname(__FILE__).'./config.php';
class Database()
{
    private $host = HOST;
    private $user = USER;
    private $pass = PASS;
    private $dbname = DBNAME;
    public $conn;

    function __construct()
    {
        $this->$conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname;)
        if($this->conn->connect_error)
        {
            die('Database Connection Failed.'.$this->conn->connect_error.__LINE__);
        }
    }
}
?>