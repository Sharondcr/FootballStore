<?php 

include('../../../../model/category.php');
include('../../../../database/db.php');
$category_model=new Category(new DB_CON());
$Categories=$category_model->fecthCategory();
?>
<?= include("../../layoutseller/head.php"); ?>
<?= include("../../layoutseller/header.php"); ?>

    <div class="content-box shadow rounded border">
        <div class="container">
        <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($Categories as $row){ ?>
                        <tr>
                            <td><?= $row['category_name'] ?></td>
                            <td><?= $row['category_description'] ?></td>
                            <td class="d-flex">
                                <a href="./edit-category.php?id=<?= $row['id']?>" class="btn btn-warning">Edit</a>
                                <form method="post">
                                    <input type="hidden" name="id" value="<?= $row['id']?>">
                                    <input type="submit" class="btn btn-danger  ms-2" value="Delete" >
                                </form>
                          
                            </td>
                        </tr>
                    <?php }?>
                        
                </tbody>
            </table>
        </div>
    </div>


<?= include("../../layoutseller/footer.php"); ?>

<?php
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        $Id=$_REQUEST['id'];
        $category_model->deleteById($Id);
        echo "<script>
                location.href='./category.php';
                </script>";
    }
?>