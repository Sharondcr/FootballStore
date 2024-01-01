<?php 

// Database connect 
include_once('../database/db.php');

class User{
    var $_db;
    public function __construct($db=new DB_CON()) {
        $this->_db = $db->con;
    }

    public function insert($username,$email,$password,$role)  
    {

        // $sql="INSERT INTO `customer` 
        $sql = $this->_db->prepare("INSERT INTO `customer` (`username`,`email`,`password`,`role`) VALUES (?, ?, ?, ?)");
        $sql->bind_param("ssss",$username, $email,$password,$role);
        return $sql->execute();
    }
    public function insertSeller($sellername,$email,$storename,$paymentmode,$password,$role)  
    {

        // $sql="INSERT INTO `seller` 
        $sql = $this->_db->prepare("INSERT INTO `seller` (`seller_name`,`email`,`store_name`,`payment_method`,`password`,`role`) VALUES (?, ?, ?, ?, ?, ?)");
        $sql->bind_param("ssssss",$sellername,$email,$storename,$paymentmode,$password,$role);
        return $sql->execute();
    }
}
?>