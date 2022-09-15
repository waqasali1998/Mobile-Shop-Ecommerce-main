<?php
session_start();
include("../functions/getfunctions.php");

?><?php
if(!isset($_SESSION['customer_email'])){
    echo"<script>window.open('../checkout.php','_self')</script>";
}else{

include("includes/db.php");

?>
<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/style.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"></head>
<body> 
<div id="top"><!--top bar -->
<div class="container"><!--start contanier -->
<div class ="col-md-6 offer"><!--col-md-6 offer -->
<a href="#" class ="btn btn-success btn-sm">
<?php
  if(!isset($_SESSION['customer_email'])){
    echo "Welcome Guest";

  }else{
    echo "Welcome: ".$_SESSION['customer_email'];
    
  }

?>

</a>
<a href="#" >

Total price PKR <?php totalPrice();?>,Total Items <?php item();?> </a>

</div><!--end-col-md-6 offer -->
<div class="col-md-6">
<ul class="menu">
   <li>
      
       <?php
  if(!isset($_SESSION['customer_email'])){
    echo " <a href='../customer_registration.php'>Register</a>";

  }else{
    echo " <a> Active Now  </a>";
  }


?>
<li>
    <a href="my_account.php">My Account</a>
</li>
<li>
    <a href="../cart.php">Goto Card</a>
</li>
<li>
<?php
  if(!isset($_SESSION['customer_email'])){
    echo " <a href='../checkout.php'>login</a>";

  }else{
    echo " <a href='../logout.php'>logout</a>";
  }


?>



</li>
   </ul>
       </div>
    </div><!--end contanier -->
</div><!-- end top bar -->

    <div class="navbar navbar-default" id="navbar"><!--start navbar -->
<div class="contanier">
    <div class="navbar-header"><!--start head  navbar -->
        <a class="navbar-brand home" href="index.php">
        <h1 style="color:rgb(79, 191, 168); text-shadow: 5px 5px 10px rgb(79, 191, 168);  text-decoration: underline overline; padding-top: 0px; padding-left: 40px; font-weight: bold;font-size: 40px;margin-left: 0px; margin-top: 5px;">MOBILE SHOP.PK</h1>

            
        </a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
            <span class="sr-only">Toggle Navigation</span>
            <i class="fa fa-align-justify"></i>
        </button>
       
    </div><!--end head  navbar -->
    <div class="navbar-collapse collapse" id="navigation"><!--start  navbar-collapse collapse -->
   <div class="padding-nav"><!--start  padding nav -->
       <ul class="nav navbar-nav navbar-left">
           <li >
               <a href="../index.php">Home</a>
             </li>
             <li >
               <a href="../shop.php">shop</a>
             </li>
             
             <li class="active" >
               <a href="my_account.php">My Account</a>
             </li>
             <li>
               <a href="../cart.php">Shopping Card</a>
             </li>
             <li >
<a href="../about.php">About</a>
</li>
<li>
<a href="../installment.php">Installment Planes</a>
</li>
             <li>
               <a href="../contact.php">Contact us</a>
             </li>
       </ul>
   </div><!--end padding nav -->
   <a href="../cart.php" class="btn btn-primary navbar-btn right">
       <i class ="fa fa-shopping-card">
       <span>  <?php item(); ?> item in card</span>
       </i>
</a>

</div><!-- End navbar-collapse collapse-right -->
<div class="collapse clearfix" id="search">
    <form class="narbar-form" method="get" action="result.php">
        <div class="input-group">
            <input type="text" name="user_query" placeholder="search" class="form-control">
            <span class="input-group-btn">
            <button type="submit" value="search" name="search" class="btn btn-primary">
                <i class="fa fa-search"></i>
            </button>
</span>
</div>
</form>
</div>
    </div><!--end  navbar-collapse collapse -->
</div>
     </div><!--end  default navbar -->

     <div id="content"><!-- content -->
    <div class="container"><!-- start container -->
    <div class="col-md-12"><!-- start col-md-12 -->
        <ul class="breadcrumb">
            <li><a href="home.php">Home</a></li>
            <li><a href="">My account</a></li>
        </ul>
    </div><!-- start col-md-12 -->
    <div class="col-md-3"><!-- start col-md-3 -->
    <?php
include("includes/sidebar.php");
    ?>
    </div><!-- end col-md-3 -->
    <div class="col-md-9"><!-- start col-md-9 -->
        <!--including my_order page start-->

        
        
        <?php  
        if(isset($_GET['my_order'])){
            include("my_order.php");
        }
        ?>  
        <!--including my_order page end--> 

         <!--including payoffline page start-->
        <?php  
        if(isset($_GET['pay_offline'])){
            include("pay_offline.php");
        }
        ?>  
        <!--including payoffline  page end-->

        <!--including edit account start-->
        <?php  
        if(isset($_GET['edit_account'])){
            include("edit_account.php");
        }
        ?>  
        <!--including edit account  page end--> 

        <!--including edit account start-->
        <?php  
        if(isset($_GET['change_password'])){
            include("change_password.php");
        }
        ?>  
        <!--including edit account  page end--> 

        <!--including edit account start-->
        <?php  
        if(isset($_GET['delete_account'])){
            include("delete_account.php");
        }
        ?>  

<?php  
        if(isset($_GET['claim'])){
            include("claim.php");
        }
        ?> 

<?php  
        if(isset($_GET['claim-list'])){
            include("claim-list.php");
        }
        ?> 
        
        






        
        <!--including edit account  page end--> 

 
    </div>

     </div><!-- end container -->


</div><!-- end content -->

<?php
include("includes/footer.php");
    }
?>
