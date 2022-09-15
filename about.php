<?php
include("includes/db.php");
include("functions/getfunctions.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>About</title>
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
Welcome Guest

  </a>
<a href="#" >
Welcome Guest
Total price PKR <?php totalPrice();?>,Total Items  <?php item();?> </a>
</div><!--end-col-md-6 offer -->
<div class="col-md-6">
<ul class="menu">
   <li>
   <?php
  if(!isset($_SESSION['customer_email'])){
    echo " <a href='customer_registration.php'>Register</a>";

  }else{
    echo " <a> Active Now  </a>";
  }


?>
   </li>
<li>
<?php
    if(!isset($_SESSION['customer_email'])){
      echo "<a href='checkout.php'>My Account</a>";
    }else{
      echo "<a href='customer/my_account.php?my_order'>My Account</a>";
     
    }
  ?>
</li>
<li>
    <a href="cart.php">Goto Card</a>
</li>
<li>
<?php
  if(!isset($_SESSION['customer_email'])){
    echo " <a href='checkout.php'>login</a>";

  }else{
    echo " <a href='logout.php'>logout</a>";
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
               <a href="index.php">Home</a>
             </li>
             <li>
               <a href="shop.php">shop</a>
             </li>
             
             <li >
             <?php
    if(!isset($_SESSION['customer_email'])){
      echo "<a href='checkout.php'>My Account</a>";
    }else{
      echo "<a href='customer/my_account.php?my_order'>My Account</a>";
     
    }
  ?>
             </li>
             <li >
               <a href="cart.php">Shopping Card</a>
             </li>
             <li class="active">
             <a href="about.php">About</a>
</li>
<li>
<a href="Installment.php">Installment Planes</a>
</li>
             <li >
               <a href="contact.php">Contact us</a>
             </li>
       </ul>
   </div><!--end padding nav -->
   <a href="cart.php" class="btn btn-primary navbar-btn right">
       <i class ="fa fa-shopping-card">
           <span> <?php item();?> item in card</span>
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
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About us</a></li>
        </ul>
    </div><!-- start col-md-12 -->

    <div class="col-md-3"><!-- start col-md-3 -->
    <?php
include("includes/sidebar.php");
    ?>
    </div><!-- end col-md-3 -->

    <div class="col-md-9"><!-- start col-md-9 -->
         <div class="box"><!-- start box -->
           <div class="box-header"><!--start box-header -->
             
           <img src="images/about.jpg" alt="Girl in a jacket" width="785" >

           <div class="box" id="details">
       <h4 style="color:rgb(79, 191, 168); font-weight:bold; font-family:Lucida Sans Unicode;">Our Vision</h4>
           <p>" To redefine the landscape of retailing and E-commerce in Pakistan by working towards a more customer-centric business approach and to ensure customer convenience and gratification. "
             </p><br>
             
             <h4 style="color:rgb(79, 191, 168); font-weight:bold; font-family:Lucida Sans Unicode;">Our Mission</h4>
           <p>" Converging over 27 years of rich experience and pioneer status by providing a one-stop solution for all of your shopping needs through Mobile Shop.pk Online, Retail, the Corporate and Wholesale network backed by efficient after-sales service and quality branded products. "
             </p><br>
             
             

             <h4 style="color:rgb(79, 191, 168); font-weight:bold; font-family:Lucida Sans Unicode;">The Company :</h4>
           <p>" Mobile SHop.pk is a brand of Tradelink enterprises, a company having 27 years of excellence in dealing with cellular phones and consumer electronics from all the leading brands, with competitive pricing, vast range of products and providing efficient after-sales service and support to customers with convenience through its online shopping platform and brick-and-mortar outlets spreading nationwide with a wide range of mobile phones from all leading mobile brands, IT and networking products, home appliances, home entertainment products, consumer electronics, and all other branded products under one roof.
             </p><br>

             <p>Mobile Shop.pk is considered to be among the Top 3 E-commerce companies in Pakistan having more than 150,000 products and only e-commerce brands to have omnichannel presence i.e Online Marketplace & 6 Outlets and expanding nationwide. Mobile Shop.pk  is also the only brand in Pakistan selling Premium Gold Plated Products with a wide range to choose from i.e. mobile phones, laptops, watches, Jewellery, pens, cufflinks, and other accessories, etc.</p>
             
             








             </div>


           </div><!--start box-header -->
          
               

          
         </div><!-- start box -->
    </div><!-- start col-md-9 -->

 <?php
   sendmail();
 
 ?>




























    </div><!-- end container -->


</div><!-- end content -->

<?php
include("includes/footer.php");
?>