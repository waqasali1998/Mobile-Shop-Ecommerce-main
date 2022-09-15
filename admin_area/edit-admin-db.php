<?php 
include('includes/db.php');
if(isset($_SESSION['admin_email']))
{

?>

<?php
$admin_email=$_SESSION['admin_email'];
$get_admin="SELECT * FROM admins WHERE admin_email='$admin_email'";
$run_admin=mysqli_query($con,$get_admin);
$row_admin=mysqli_fetch_array($run_admin);
$admin_id=$row_admin['admin_id'];
$admin_name=$row_admin['admin_name'];
$admin_country=$row_admin['admin_country'];
$admin_contact=$row_admin['admin_contact'];
//$admin_address=$row_admin['admin_address'];
$admin_image=$row_admin['admin_image'];
$admin_email=$row_admin['admin_email'];
$admin_job=$row_admin['admin_job'];
$admin_about=$row_admin['admin_about'];


?>
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Categorie</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Form</a></li>
                            <li class="active">Update  Categorie</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<div class="card">
    
    <div class="card-body card-block">
                       
              <form class="form-horizontal" method="post" action="" >
                     <div class="col col-md-6">
                         <label class="col-md-8 control-label">Product Title </label>
                         <input type="text" name="cat_title" class="form-control" value="<?php echo $cat_title?>">
                     </div>
        
                     <div class="col col-md-12">
                         <label class="col-md-11 control-label">Product Description</label>
                        <textarea name="cat_desc" class="form-control" rows="6" cols="19"><?php echo $cat_desc?></textarea>
                     </div>

                     <div class="content mt-3">
             <div class="row">
<div class="col-md-12">
   <button name="update" class="btn btn-info" role="button" value="Add Categories">Update Product Categories</button>
   </div>
                        


   </div>
</form>
</div>
</div>
<div class="row">
  <div class="col-lg-3">

  </div>
 


</body>

</htm>

<?php
if(isset($_POST['update'])){
  

    $admin_name=$_POST['admin_name'];
    $admin_country=$_POST['admin_country'];
    $admin_contact=$_POST['admin_contact'];
    //$admin_address=$row_admin['admin_address'];
   // $admin_image=$_POST['admin_image'];
    $admin_email=$_POST['admin_email'];
    $admin_job=$_POST['admin_job'];
    $admin_about=$_POST['admin_about'];

    $admin_image=$_FILES['admin_image']['name'];
    $temp_name=$_FILES['admin_image']['tmp_name'];

    move_uploaded_file($temp_name, "admin_images/$admin_image");

  //$c_image=$_FILES['c_image']['name'];
  //$c_tmp_image=$_FILES['c_image']['tmp_name'];
  //move_uploaded_file($c_tmp_image,"customer/customer_images/$c_image");
 
  $update_admin="UPDATE admins SET admin_name='$admin_name',admin_email='$admin_email',admin_image='$admin_image',
  admin_country='$admin_country',admin_contact='$admin_contact',admin_job='$admin_job',admin_about='$admin_about' 
  WHERE admin_id='$admin_id'";
   
  $run_admin=mysqli_query($con,$update_admin);

  

}
  










<?php
include('footer.php');}
else{ header("location:login.php");}
?>       
  