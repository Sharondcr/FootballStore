<?= include("../../layotseller/head.php"); ?>
<?= include("../../layotseller/header.php"); ?>

    <div class="content-box shadow rounded border">
        <div class="container">
            <form method="post">
                <div class="mt-3">
                    <label for="">Category Name</label>
                    <input type="text" name="category_name" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="">Category Description</label>
                    <textarea  name="category_Description" cols="5" rows="10" class="form-control"></textarea>
                </div>
                <div class="mt-3">
                   <input type="submit" value="Save" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>


<?= include("../../layoutseller/footer.php"); ?>

<?php 

   // Request
   if ($_SERVER['REQUEST_METHOD']=="POST") {
    // Add user model
    include('../../../../model/category.php');
    include('../../../../database/db.php');
        $category_model=new Category(new DB_CON());
       $category_name=$_REQUEST['category_name'];
       $category_Description=$_REQUEST['category_Description'];
       
        // insert
        $res=$category_model->addCategory($category_name,$category_Description);
        if ($res) {
            echo "<script>
                alert('category Added');
            </script>";
        } else {
            echo "<script>
                alert('failed');
            </script>";
        }
        

   } 
?>