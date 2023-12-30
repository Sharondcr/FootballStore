<?php 

// Database connect 
include_once('../database/db.php');

class User{
    var $_db;
    public function __construct($db=new DB_CON()) {
        $this->_db = $db->con;
    }

    public function insert($name,$email,$password)  {

        // $sql="INSERT INTO `customer` (`name`,`email`,`password`) VALUES ('$name','$email','$password')";
        $sql = $this->_db->prepare("INSERT INTO `customer` (`username`,`email`,`password`) VALUES (?, ?, ?)");
        $sql->bind_param("sss",$username, $email,$password);
        return $sql->execute();
    }
}
?>