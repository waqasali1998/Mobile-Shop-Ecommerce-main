<?php
include("includes/db.php");
include("functions/getfunctions.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Installment Plane</title>
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
             <li >
             <a href="about.php">About</a>
</li>
<li>
  <li class="active">
<a href="installment.php">Installment Planes</a>
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
            <li><a href="installment.php">Installment Planes</a></li>
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
             
           <img src="images/4.jpg" alt="installment" width="785" >

           <div class="box" id="details">
           <center>     <h4 style="color:rgb(79, 191, 168); font-weight:bold; font-family:Lucida Sans Unicode;">Buy Now & Pay Later | Easy Monthly Instalments at Mobileshop.pk</h4></center>
<p>Mobileshop.pk offers Easy Monthly Instalments with an easy interest-free payment plan to enable its customers to access and purchase the items they want and need while managing their finances during the turbulent economy. With multiple payment tenures and easy interest-free instalments it intends to help people spend responsibly without incurring interest or extended debt.<br>Easy Monthly Instalment plan (EMI) is available for credit card holders. EMI plan applies for all products with a value of Rs. 10,000 or above. Please click the links below to reach terms and conditions of the specific plan.             </p><br>
             
<ol>
  <li>MCB</li>
  <li>UBL</li>
  <li>Bank Alfalah</li>
  <li>Faysal Bank</li>
  <li>SilkBank</li>
</ol>     



  <p>PriceOye will charge 2.5% service fee on every instalment plan.</p>


  <h4 style="color:rgb(79, 191, 168); font-weight:bold; font-family:Lucida Sans Unicode;">For Non Credit Card Holders</h4>
  <ol>
  <li>Fine pro</li>
  
</ol>     


<img src="images/5.png" alt="installment" width="740" >
<center>
<h4 style="color:rgb(79, 191, 168); font-weight:bold; font-family:Lucida Sans Unicode;">How to buy on instalments from Mobileshop.pk?</h4>
  </center>
<ol>
  <li >To buy from Mobileshop.pk on (EMI) instalment, first choose your product and add it to your cart.</li>
  <li>The cart should only contain one product worth at least Rs. 10,000/-</li>
  <li>Click Check Out, Proceed to Payment, and then choose Instalment as your payment method.</li>
  <li>Choose your bank, the length of your EMI, and enter your credit card information.</li>
  <li>A code will be sent to your registered phone number and email address. Enter the code and place your order.</li>
<li>Please remember that your EMI plan may take up to 7 working days to activate. This is the time between placing your order and receiving your bill. Once your EMI plan has processed, you will receive a SMS from your bank.</li>
</ol>    
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