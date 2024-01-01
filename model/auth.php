<?php

class auth
{
    var $_db;

    public function __construct($db)
    {
        $this->_db = $db->con;
    }

    public function login($username, $password)
    {
        $sql = "SELECT * FROM `seller` WHERE `seller_name`='$username'";
        $res = $this->_db->query($sql)->fetch_object();

        if ($res && password_verify($password, $res->password)) {
            session_start();
            $_SESSION['logined'] = true;
            $_SESSION['user_name'] = $res->name;
            $_SESSION['role'] = $res->role;

            if ($res->role == "customer") {
                echo "<script>
                    alert('Customer Login Success');
                    window.location.href='../index.php'
                    </script>";
            } elseif ($res->role == "seller") {
                echo "<script>
                    alert('Seller Login Success');
                    window.location.href='../template/dashboard/Sellerdash.php'
                    </script>";
            } else {

                echo "<script>
                    alert('Login Success');
                    window.location.href='../index.php'
                    </script>";
            }
        } else {
            echo "<script>
            alert('Login Failed');
            window.location.href='./login.php'
            </script>";
        }
    }
}

?>
