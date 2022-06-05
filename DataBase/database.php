<?php
class Database{
    public function __construct()
    {
        $this->conn=mysqli_connect("localhost","root","","movie_app");
        if(!$this->conn)
        {
            echo "Connection failed";
        }
    }
}
$conn=new Database;
?>