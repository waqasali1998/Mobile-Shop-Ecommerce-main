
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<?php 
include('includes/db.php');
if(isset($_SESSION['admin_email']))

{

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Delete Applications</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    
</head>

<body>

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Delete Applications</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Delete Applications</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="content row-1">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
          
                            <a href="index.php?application" class="btn btn-info" role="button">Recend  Application</a> 

                 <a href="index.php?approved-application" class="btn btn-success" role="button">Approved</a> 
                 <a href="index.php?application-delete" class="btn btn-danger" role="button">Deleted Application</a> 

                            </div></div>
                            <div class="card-body ">
                            <?php if(isset($_SESSION['message']))
                           {
                             echo $_SESSION['message'];
                             unset($_SESSION['message']);
                           }
         ?>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    
                                        <tr>
                                            
                                
                                      
                                        <th scope="col">S No:</th>
                                            <th scope="col">Claim NO:</th>
                                            <th scope="col">Name:</th>
                                            <th scope="col">Email:</th>
                                            <th scope="col">FIR:</th>
                                            <th scope="col">CPLC:</th>
                                            <th scope="col">DATE:</th>
                                            <th scope="col">DESCRIPTION:</th>
                                            <th scope="col">IMEI 1:</th>
                                            <th scope="col">IMEI 2:</th> 
                                            <th scope="col">CLaim Date:</th>
                                            <th scope="col">STATUS:</th> 
                                            <th scope="col">SELECT:</th> 
                                             
                                            <!-- <th scope="col">Delete:</th> --> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                   <?php
                                   $i=0;
                                   $get_orders="SELECT * FROM claim Where status='delete'";

                                   
                                   $run_orders=mysqli_query($con,$get_orders);
                                   while($row_orders=mysqli_fetch_array($run_orders)){
                                    $id=$row_orders['id'];
                                       $customer_id=$row_orders['customer_id'];
                                       $claim_no=$row_orders['claim_no'];
                                       $fir_no=$row_orders['fir_no'];
                                       $cplc=$row_orders['cplc'];
                                       $date=$row_orders['date'];
                                       $despt=$row_orders['despt'];
                                       $imei_1=$row_orders['imei_1'];
                                       $imei_2=$row_orders['imei_2'];
                                       $c_date=$row_orders['c_date'];
                                       $status=$row_orders['status'];
                                     //  $get_products="SELECT * FROM products WHERE product_id='$product_id'";
                                      // $run_products=mysqli_query($con,$get_products);
                                      // $row_products=mysqli_fetch_array($run_products);
                                      // $product_title=$row_products['product_title'];
                                      // $product_img1=$row_products['product_img1'];

                                       $i++;
                                  
                                   $get_customer="SELECT * FROM customers WHERE customer_id='$customer_id'";
                                   $run_customer=mysqli_query($con,$get_customer);
                                   $row_customer=mysqli_fetch_array($run_customer);	
                                   $customer_email=$row_customer['customer_email'];
                                   $customer_name=$row_customer['customer_name'];
                                 //  $length=substr($customer_address,0,30);
                                 //  $length=$length. "  /...Read more";
                                            
                                   
                                   
                                   
                                   
                                   ?>
                                        <tr>
                                         <th scope="row"><?php echo $i?></th>
                                          
                                           
                                            <td> <?php echo $claim_no ?> </td> 
                                            <td><?php  echo  $customer_name?></td>
                                            <td> <?php echo $customer_email?> </td> 
                                            <td><?php  echo $fir_no?></td>
                                            <td> <?php echo $cplc ?> </td> 
                                            <td> <?php echo $date ?> </td> 
                                            <td><?php  echo $despt?></td>
                                            <td> <?php echo $imei_1  ?> </td> 
                                            <td> <?php echo $imei_2  ?> </td> 
                                            <td> <?php echo $c_date?> </td> 
                                            <td> <?php echo $status ?> </td> 
                                            


                                            <td>
                                          
                                             <a class="btn btn-success btn-sm" href="index.php?approved-db=<?php echo  $id ?>">Approve</a><br><br> 
                                                                          </tr>

                                            <?php
                                   } 
                                            
                                            ?>
                                           
                                         
                                     
   
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
                          
</body>


    

</body>

<?php
include('footer.php');}
else{ header("location:login.php");}
?>       
  
</html>
<script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="assets/js/init-scripts/data-table/datatables-init.js"></script>
