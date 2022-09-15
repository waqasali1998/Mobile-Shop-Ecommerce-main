<?php

include("../functions/getfunctions.php");
?>
<?php
session_start();
if(!isset($_SESSION['customer_email'])){
    echo"<script>window.open('../checkout.php','_self')</script>";
}else{

include("includes/db.php");
if(isset($_GET['order_id'])){
  $order_id=$_GET['order_id'];
}
?>
<!DOCTYPE html>
<html>
<head><title>Confirm Order</title>
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
   </li>
<li>
    <a href="my_account.php">My Account</a>
</li>
<li>
    <a href="../cart.php">Goto Card</a>
</li>
<li>
<?php
  if(!isset($_SESSION['customer_email'])){
    echo " <a href='checkout.php'>login</a>";

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
            <image src="images/logo.png"  alt="store" class="hidden-xs">
            <image src="images/small.png" alt="store" class="visible-xs">
        </a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
            <span class="sr-only">Toggle Navigation</span>
            <i class="fa fa-align-justify"></i>
        </button>
        <button type="button" class="navbar-toggle" data-toggle="navbar-toggle" data-target="#search">
            <span class="sr-only"></span>
            <i class="fa fa-search"></i>
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
               <a href="../services.php">Services</a>
             </li>
             <li>
               <a href="../contact.php">Contact us</a>
             </li>
       </ul>
   </div><!--end padding nav -->
   <a href="cart.php" class="btn btn-primary navbar-btn right">
       <i class ="fa fa-shopping-card">
       <span>  <?php item(); ?> item in card</span>
       </i>
</a>
<div class="navbar-collapse collapse right"><!-- start navbar-collapse collapse-right -->
    <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
        <span class="sr-only">Toggle search</span>
        <i class="fa fa-search"></i>
</button>
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

     $customer_session= $_SESSION['customer_email'];
     $get_customer="SELECT * FROM customers WHERE customer_email='$customer_session'";
     $run_cust=mysqli_query($con,$get_customer);
     $row_cust=mysqli_fetch_array($run_cust);
     $customer_id=$row_cust['customer_id'];
     $get_order="SELECT * FROM customer_order WHERE customer_id='$customer_id'";
     $run_order=mysqli_query($con,$get_order);
     $i=0;
     while($row_order=mysqli_fetch_array($run_order)){
     
       $order_invoice=$row_order['invoice_no'];
       $due_amount=$row_order['due_amount'];
   
       $installment_3 = intdiv( $due_amount, 3);
       $installment_6 = intdiv( $due_amount, 6);
       $installment_9 = intdiv( $due_amount, 9);
       $installment_12 = intdiv( $due_amount, 12);
     }
    ?>
    </div><!-- end col-md-3 -->
        <div class="col-md-9">
          <div class="box">
             <h1 align="center">Please Confirm You Payment</h1>
               <form action="confirm.php?update_id=<?php echo $order_id ?>" method="post" enctype="multipart/form-data">
                   <div class="form-group">
                   <label>INVOICE NUMBER</label><br>
                    
                     <input type="text"  readonly class="form-control" name="invoice_no" value=" <?php echo  $order_invoice?>" require="">
                     
                   </div>
                   <div class="form-group">
                      <label>Amount</label>
                      <input type="text" readonly  class="form-control" name="amount"  value=" <?php echo  $due_amount?>" require="">
                   </div>
                 <div class="form-group">
                      <label>Select Payment Mode</label>
                        <select required class="form-control" name="payment_mode">
                            <option>Bank transfer</option>
                            <option>paypal</option>
                            <option>Jazzcash</option>
                            <option>easilypaise</option>
                            
                        </select>

                        <div class="form-group"><br>
                      <label>CNIC</label>
                      <input required type="text" class="form-control" name="cnic" require>
                   </div>
                  
                   <div class="form-group"><br>
                      <label>Account no / IBAN</label>
                      <input required type="text" class="form-control" name="trfr_number" require="">
                   </div>
                      
 </div>
 <div class="box" id="details"><h2>Installment Plans</h2><br>
 <p style="color:Blue ; font-weight:bold; font-family:Lucida Sans Unicode;">*Only Credit Card holders are eligible for installment plan <br> 1. One Time Service Fee: 2.5% will be charged.

 <br>2. Please ensure Name and CNIC are of the cardholder.</p>  <br>    
 
 <table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">EMI</th>
      <th scope="col">Monthly Installment</th>
      <th scope="col">Select</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>3 Months</td>
      <td>RS <?php echo $installment_3 ?>/-</td>
      <td><input type="radio" name="radio" value= " 3 - <?php echo $installment_3 ?>"></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>6 Months</td>
      <td>RS <?php echo $installment_6 ?>/-</td>
      <td><input type="radio" value=" 6 -  <?php echo $installment_6 ?>" name="radio"></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>9 Months</td>
      <td>RS <?php echo $installment_9 ?>/-</td>
      <td><input type="radio" name="radio" value=" 9 -  <?php echo $installment_9 ?>"></td>
    </tr>
     <tr>
      <th scope="row">4</th>
      <td>12 Months</td>
      <td>RS <?php echo $installment_12 ?>/-</td>
      <td><input type="radio" name="radio" value=" 12 -  <?php echo $installment_12 ?>"></td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td>Full Payment</td>
      <td>RS <?php echo $due_amount ?>/-</td>
      <td><input type="radio" name="radio" value=" Full Payment "></td>
    </tr>
   



  </tbody>
</table>




             </div>
             <div class="text-center">
                           <button type="submit" name="confirm_payment" class="btn btn-primary" btn-sm>
                           confirm payment
                           </button>
                        </div><br>
                        <p style="color:red ; font-weight:bold; font-family:Lucida Sans Unicode;" >Note : After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order.</p>

        </div>
    </div><!-- end container -->


</div><!-- end content -->



<div class="container table-responsive py-5"> 

</div>


</form>


<?php
include("includes/footer.php");
}
?>
<?php
if(isset($_POST['confirm_payment'])){
  $update_id=$_GET['update_id'];
  $invoice_no=$_POST['invoice_no'];
  $amount=$_POST['amount'];
  $payment_mode=$_POST['payment_mode'];
  $trfr_number=$_POST['trfr_number'];
  //$date=$_POST['date'];
  $payment_status="Paid";
  $status="Recived";
 $installment=$_POST['radio'];
 $cnic=$_POST['cnic'];

 
  //$installment="waqas";

 
  //$customer_id=['customer_id'];
  
  $get_cust="SELECT * FROM customers WHERE customer_id='$customer_id'";
  $run_pro=mysqli_query($con, $get_cust);

  $insert_payment= "INSERT INTO payments(invoice_id,customer_id,amount,payment_mode,reference_no,payment_date,status,installment,cnic) 
  VALUES ('$invoice_no','$customer_id','$amount','$payment_mode','$trfr_number',NOW(),'$status','$installment','$cnic')";
  $run_payment=mysqli_query($con,$insert_payment);

  $update_q="UPDATE customer_order SET payment_status = '$payment_status' WHERE order_id='$update_id'";
  $run_update=mysqli_query($con,$update_q);

   //$pending_order="UPDATE pending_ordersSET order_status = '$complete' WHERE order_id='$update_id'";
  //$run_pending_order=mysqli_query($con,$pending_order);

  echo"<script>alert('Your Order Has Been Received')</script>";
  echo "<script>window.open('my_account.php?my_order','_self')</script>";






}









?>
