<!DOCTYPE html>
<html>
<head>
  <title>DS</title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/style.js"></script> 
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/style/style.css">
 </head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
 <?php
 include 'base.php';
 ?>
 <?php include("connection.php");?>
 <?php
 $status="";
 if(isset($_POST["btn1"]))
 {
 extract($_POST);
 $qry="insert into (id, compname, designation, cont_num, email, gotdetails, relationships, belongs to department)
 values('$name','$design','$contnum','$email','$question','$relationship','$department',)";
 $rs=executequery($qry);
 if($rs=="success")
 {
 $status="<h3>place Added succssfully</h3>";
 }
 else
 {
 $status="<h3>error to Added</h3>";
 }
 }
 ?>
 
  <div class="content-wrapper">
    <div class="container-fluid" style="margin-top: 30px;">
      <!-- Breadcrumbs-->
     
        
  
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                
              </div>
              <div class="mr-5">Last 7 days  hired Employees</div>
            </div>
            
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
               
              </div>
              <div class="mr-5">Last 15 days  hired Employees</div>
            </div>
           
              
              
                
              
          
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
               
              </div>
              <div class="mr-5">Last 30 days  hired Employees</div>
            </div>
            
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
               
              </div>
              <div class="mr-5">Total Employees</div>
            </div>
            <p>52</p>
              
              
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- Area Chart Example-->
    
    
    <div class="container-fluid mt--7">
<div class="row">
<div class="col">
  <div class="card shadow">
    <div class="card-header bg-transparent">
<div >
    
      <h3 >Company Reference Details</h3>
    </div>
    <div class="card-body">
     <div class="container">
      <form name="myformcont" class="my-2" action="" method="POST">
        <!-- <h2 class="text-center">LIC Form</h2> -->
        <div class="row jumbotron">

          <!-- <div class="col-sm-12 form-group" style="margin-top: -20px;">
            <label for="client_id">Client_id :</label>
            <input type="text" class="form-control" name="client_id" id="name-f" placeholder="Enter your Client_id." required>
          </div> -->

          <!--<div class="col-sm-6 form-group" style="margin-top: -20px;"> -->
            <!--High school-->
      
            <div class="col-sm-6 form-group">
            <label for=" name">Name</label>
            <input type="text" class="form-control" name="name" id="name-f" placeholder="  Name" required><br>
          </div>
          <div class="col-sm-6 form-group">
            <label for="besignation">Designation</label>
            <input type="text" class="form-control" name="design" id="name-l" placeholder=" Designation" required >
          </div>
          <div class="col-sm-6 form-group">
            <label for="contact no.">contact no.</label>
            <input type="phone" class="form-control" name="contnum" id="name-l" placeholder=" Contact no." required >
          </div>
          <div class="col-sm-6 form-group">
             <label for="passing year">Email</label>
            <input type="text" class="form-control" name="email" id="name-l" placeholder=" Email" required > 
          </div>
       
          <div class="col-sm-6 form-group">
             <label for="passing year">How Do You Knoe Him/Her</label>
            <input type="text" class="form-control" name="question" id="name-l" placeholder=" How Do You Knoe Him/Her" required > 
          </div>   <div class="col-sm-6 form-group">
             <label for="passing year">Relationship With Employee</label>
            <input type="text" class="form-control" name="relationship" id="name-l" placeholder=" Reletionship with Employee" required > 
          </div>   <div class="col-sm-6 form-group">
             <label for="passing year">Belongs To Department</label>
            <input type="text" class="form-control" name="department" id="name-l" placeholder=" Department name" required > 
          </div>
       
       
          
          
      <div class="col-sm-12">
        <input type="checkbox" class="form-check d-inline" id="chb" required><label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.
        </label>
      </div>

      <div class="col-sm-12 form-group mb-0">
       <button class="btn btn-primary float-right" name="btn1">Submit</button>
     </div>
     
   </div>
 </form>
</div> 
</div>
</div>
</div>
</div>
  


    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   <?php
   include 'footer.php';
   ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
