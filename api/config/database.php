<?php
class Database{
 
 
 /*
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "hospital_db";
    private $username = "root";
    private $password = "";
    public $conn;
 */
    $mysqli = new mysqli(getenv('RDS_HOSTNAME'), getenv('RDS_USERNAME'), getenv('RDS_PASSWORD'), getenv('RDS_DATABASE'));
 
    // get the database connection
    public function getConnection(){
 
        if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
       }
    }
}
?>
