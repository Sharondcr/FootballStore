<?php 

include('../../../../model/user.php');
include('../../../../database/db.php');
$user_model=new User(new DB_CON());
$users=$user_model->fecthUsers();
?>
<?= include("../../layout seller/head.php"); ?>
<?= include("../../layout seller/adminHeader.php"); ?>

    <div class="content-box shadow rounded border">
        <div class="container">
            
        </div>
    </div>


<?= include("../../layoutseller/footer.php"); ?>