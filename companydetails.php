<?php include("connection.php");?>
<!DOCTYPE html>
<html>
<head>
  <title>DS</title>
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

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
              <div class="mr-5">Last 7 days hired Employees</div>
              <?php
              $from_date= date("Y-m-d",strtotime("-7 days") ) ;
               $to_date=date("Y-m-d");
              $qry="SELECT * FROM emppersonaldetail WHERE Join_date BETWEEN '" . $from_date . "' AND  '" . $to_date . "'
ORDER by id DESC";
                 $rs=readrecord($qry);
                 $row= mysqli_num_rows($rs);
                 echo '<h1> '.$row.'</h1>';
         ?>
            </div>
            
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
               
              </div>
              <div class="mr-5">Last 15 days  hired Employees</div>
              <?php
              $from_date= date("Y-m-d",strtotime("-15 days") ) ;
               $to_date=date("Y-m-d");
              $qry="SELECT * FROM emppersonaldetail WHERE Join_date BETWEEN '" . $from_date . "' AND  '" . $to_date . "'
ORDER by id DESC";
                 $rs=readrecord($qry);
                 $row= mysqli_num_rows($rs);
                 echo '<h1> '.$row.'</h1>';
         ?>
            </div>
           
              
              
                
              
          
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
               
              </div>
              <div class="mr-5">Last 30 days  hired Employees</div>
              <?php
              $from_date= date("Y-m-d",strtotime("-30 days") ) ;
               $to_date=date("Y-m-d");
              $qry="SELECT * FROM emppersonaldetail WHERE Join_date BETWEEN '" . $from_date . "' AND  '" . $to_date . "'
ORDER by id DESC";
                 $rs=readrecord($qry);
                 $row= mysqli_num_rows($rs);
                 echo '<h1> '.$row.'</h1>';
         ?>
            </div>
            
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
               
              </div>
              <div class="mr-5">Total Employees</div>
              <?php
             $qry="SELECT id FROM emppersonaldetail ORDER BY id";
             $rs=readrecord($qry);
              $row2= mysqli_num_rows($rs);
              echo '<h1> '.$row2.'</h1>';
      ?>
            </div>
              
              
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- Area Chart Example-->
     
        



       <div class="card mb-3">
        <div class="card-header">
          
        <div class="card-body">
          <div class="table-responsive">
             <table class="table">
    <thead class="thead-light">
      <tr>
      	<th>ID</th>
        <th> Name</th>
        <th>Company ID</th>
        <th>Designation</th>
        <th>Department</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>DigitalSpirit</td>
        <td>web Devloper</td>
        <td>abc</td>
        
        <td>
        
        <button type="button" class=" btn-primary">Update</button>
        <button type="button" class=" btn-danger">Delete</button>
        </td>
      </tr>
      <tr>
     	 <td>1</td>
        <td>Yaamini</td>
        <td>yaamini123@gmail.com</td>
        <td>65484</td>
         
           <td>
        
        <button type="button" class=" btn-primary">Update</button>
        <button type="button" class=" btn-danger">Delete</button>
        </td>
      </tr>
      
    </tbody>
  </table>
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
