<?php
include("includes/db.php");

?><title>Claim Application Status</title>
<div class="box"><!--box start-->
<center>
<h1>Claim Application Status</h1>
<p>We focus on media that adds maximum value to your business<a href="#">
Claim Form</p></a>
</center>
<hr>
   <div class="table-responsive">
     <table class="table table-bordered table-hover">
       <thead>
             <tr>
             <th>S no</th>
                 <th>Claim no</th>
                 <th>Name</th>
                 <th>FIR no</th>
                 <th>CPLC no</th>
                 <th>Claim Date</th>
                 <th>Status</th>
                
             </tr>
         </thead>
         <tbody>
         <?php
       // $customer_session= $_SESSION['customer_email'];
       // $get_customer="SELECT * FROM customers WHERE customer_email='$customer_session'";
       // $run_cust=mysqli_query($con,$get_customer);
       // $row_cust=mysqli_fetch_array($run_cust);
       // $customer_email=$row_cust['customer_email'];


        




        $customer_session= $_SESSION['customer_email'];
        $get_customer="SELECT * FROM customers WHERE customer_email='$customer_session'";
        $run_cust=mysqli_query($con,$get_customer);
        $row_cust=mysqli_fetch_array($run_cust);
        $customer_id=$row_cust['customer_id'];
        $get_order="SELECT * FROM claim WHERE customer_id='$customer_id'";
        $run_order=mysqli_query($con,$get_order);
        $i=0;







        
        while($row_order=mysqli_fetch_array($run_order)){
          $claim_no=$row_order['claim_no'];
          $name=$row_order['name'];
          $fir=$row_order['fir_no'];
          $cplc=$row_order['cplc'];
          $date=$row_order['c_date'];
          //$order_date=substr($row_order['size'],0,11);
         // $order_date=$row_order['order_date'];
          $status=$row_order['status'];
          $i++;
        
        
         
         ?><tr>
                <td><?php echo $i ?></td>
                <td><?php echo $claim_no ?></td>
                <td><?php echo $name?></td>
                <td><?php echo $fir ?></td>
                <td><?php echo $cplc?></td>
                <td><?php echo $date ?></td>
                <td><?php echo $status ?></td>


                <?php
                }
                ?></tr>
         </tbody>
     </table>
   </div>


</div><!--box end -->