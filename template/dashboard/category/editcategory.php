<?php 
$title="Edit category";
include('../../../../model/category.php');
include('../../../../database/db.php');
$category_model=new Category(new DB_CON());
$id=intval($_GET['id']);
$Category=$category_model->categoryById($id);
?>
<?= include("../../layoutseller/head.php"); ?>
<?= include("../../layoutseller/header.php"); ?>

    <div class="content-box shadow rounded border">
        <div class="container">
            <form method="post">
                <input type="hidden" name="id"  value="<?= $Category->id ?>">
                <div class="mt-3">
                    <label for="">Category Name</label>
                    <input type="text" name="category_name" class="form-control" value="<?= $Category->category_name ?>">
                </div>
                <div class="mt-3">
                    <label for="">Category Description</label>
                    <textarea  name="category_Description" cols="5" rows="10" class="form-control"><?= $Category->category_description ?></textarea>
                </div>
                <div class="mt-3">
                   <input type="submit" value="Update" class="btn btn-warning">
                </div>
            </form>
        </div>
    </div>


<?= include("../../layoutseller/footer.php"); ?>

<?php 

   // Request
   if ($_SERVER['REQUEST_METHOD']=="POST") {
    
       $category_name=$_REQUEST['category_name'];
       $category_Description=$_REQUEST['category_Description'];
       $Id=$_REQUEST['id'];
    
        // insert
        $res=$category_model->updateCategory($Id,$category_name,$category_Description);
        if ($res) {
            echo "<script>
                location.href='./category.php';
                </script>";
        } else {
            echo "<script>
                alert('failed');
            </script>";
        }
        

   } 
?>