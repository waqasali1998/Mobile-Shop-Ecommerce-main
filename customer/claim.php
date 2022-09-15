

<?php
   

     $customer_session= $_SESSION['customer_email'];
     $get_customer="SELECT * FROM customers WHERE customer_email='$customer_session'";
     $run_cust=mysqli_query($con,$get_customer);
     while($row_order=mysqli_fetch_array($run_cust)){
     
      $customer_name=$row_order['customer_name'];
      $customer_email=$row_order['customer_email'];
      $customer_id=$row_order['customer_id'];

    }



   
    
    ?>


<title>Claim </title>


</div><!-- end col-md-3 -->
        <div class="col-md-9">
          <div class="box"><center>
             <h1 align="center">Claim Application Form</h1>
             <p>Check your Claim Application Sttaus<a href="#"> Claim Status</p></a></center>
               <form action="#" method="post" enctype="multipart/form-data">
                   <div class="form-group">
                     
                   <label>Name</label><br>
                   <input type="text"  class="form-control" name="name"  value=" <?php echo $customer_name?>" >

                     
                   </div>
                   <div class="form-group">
                      <label>Email</label>
                      <input type="text"  readonly class="form-control" name="email" value=" <?php echo $customer_email?>" require="">

                   </div>
                   
                     
                   <div class="form-group">
                      <label>FIR no.</label>
                      <input type="text" class="form-control" name="fir_no" require="">
                   </div>


                   <div class="form-group">
                      <label>CPLC Complaint no</label>
                      <input type="text" class="form-control" name="cplc" require="">
                   </div>

                   <div class="form-group">
                      <label>IMEI no 1 </label>
                      <input type="text" class="form-control" name="imei1" require="">
                   </div>

                   <div class="form-group">
                      <label>IMEI no 2 </label>
                      <input type="text" class="form-control" name="imei2" require="">
                   </div>

                   <div class="form-group">
                      <label>Select a time</label>
                      <input type="datetime-local" id="appt" name="date">
                   </div>

                  
                  
                   <div class="form-group">
                      <label>Description</label>
                      <textarea type="text" class="form-control" name="despt" require=""></textarea>
                   </div>
                        <div class="text-center">
                           <button type="submit" name="claim" class="btn btn-primary" btn-sm>
                          Submit Application
                           </button>
                        </div>
               </form>
          </div>
        </div>
    </div><!-- end container -->
    <?php
if(isset($_POST['claim'])){
  $app_no=mt_rand();
 
  $name=$_POST['name'];
  $email=$_POST['email'];
  $fir_no=$_POST['fir_no'];
  $date=$_POST['date'];
  $cplc=$_POST['cplc'];
  $despt=$_POST['despt'];
  $imei_1=$_POST['imei1'];
  $imei_2=$_POST['imei2'];
  //$date=$_POST['date'];
  
  $status="Pending";
  //$customer_id=['customer_id'];
  

  $insert_payment= "INSERT INTO claim(name,email,fir_no,cplc,date,despt,claim_no,c_date,status,imei_1,imei_2,customer_id) 
  VALUES ('$name','$email','$fir_no','$cplc','$date','$despt','$app_no',NOw(),'$status',$imei_1,$imei_2,'$customer_id')";
  $run_payment=mysqli_query($con,$insert_payment);



   //$pending_order="UPDATE pending_ordersSET order_status = '$complete' WHERE order_id='$update_id'";
  //$run_pending_order=mysqli_query($con,$pending_order);

  echo"<script>alert('Your Claim Appliaction  Has Been Received')</script>";
  echo "<script>window.open('my_account.php?claim','_self')</script>";






}









?>







