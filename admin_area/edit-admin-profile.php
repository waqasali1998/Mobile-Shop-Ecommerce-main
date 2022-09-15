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


<title>Edit Your Account</title>
<div class="container">
<div class="box"><!--start  box-->
  <center>
     <h1>Edit Your Account</h1>
  </center>
  <form action="#" method="post" enctype="multipart/form-data">

  <div class="form-group col-12 col-sm-6 mb-3">
          <label> Admin Name</label>
          <input type="text" name="admin_name" class="form-control" value="<?php echo $admin_name ?>">
        </div>

        <div class="form-group col-12 col-sm-6 mb-3">
          <label> E-mail</label>
          <input type="text" name="admin_email" class="form-control" value="<?php echo $admin_email ?>">
        </div>
    
        <div class="form-group col-12 col-sm-6 mb-3">
          <label> Country</label>
          <input type="text" name="admin_country" class="form-control" value="<?php echo $admin_country ?>">
        </div>
        

       

        

        <div class="form-group col-12 col-sm-6 mb-3">
          <label> Contact</label>
          <input type="text" name="admin_contact" class="form-control" value="<?php echo $admin_contact ?>">
        </div>
        <div class="form-group col-12 col-sm-6 mb-3">
          <label> Job</label>
          <input type="text" name="admin_job" class="form-control" value="<?php echo $admin_job ?>">
        </div>
        <div class="form-group col-12 col-sm-6 mb-3">
          <label> About</label>
          <input type="text" rows="5" name="admin_about" class="form-control" value="<?php echo $admin_about ?>">
         
       
        </div>

          <div class="form-group  col-4 col-sm-6 mb-3">
          <label> Image</label>
          <input type="file" name="admin_image" class="form-control"><br>
          <img  src="admin_images/<?php echo $admin_image ?>" height="250px" width="250px">
        </div>


        <div class="text-center col-12 ">
        <button type="submit" name="update" class="btn btn-primary">
        <i class="fa fa-user-md"></i>  Update Now
        </button>
        </div>
        
</div></form>

</div><!--end box-->


</div>

<style type="text/css">
body{
    margin-top:20px;
    background:#f8f8f8
}
</style>

<script type="text/javascript">

</script>
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

  if(mysqli_query($con,$update_admin)){

    $_SESSION['message']= '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
    <span class="badge badge-pill badge-success">Success</span>
   Your  Profile Updated Successfully.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
</div>';
  
// echo "<script>alert('Product update Successfully')</script>";
   echo "<script>window.open('index.php?admin_profile','_self')</script>";
} else{
echo "ERROR: Could not able to execute . " . mysqli_error($con);
}


}
  ?>
  <?php
include('footer.php');}
else{ header("location:login.php");}
?>       
  