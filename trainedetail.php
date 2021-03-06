<?php include("connection.php");?>
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
              <div class="mr-5">Last 7 days Employees</div>
            </div>
            
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
              
              </div>
              <div class="mr-5">Last 15 days Employees</div>
            </div>
            
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                
              </div>
              <div class="mr-5">Last 30 days Employees </div>
            </div>
            
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                
              </div>
              <div class="mr-5">Overall Employees</div>
            </div>
           
          </div>
        </div>
      </div>
      <!-- Area Chart Example-->
     
        



       <div class="card mb-3">
        <div class="card-header">
          
        <div class="card-body">
          <div class="table-responsive">
          <form action="showtraine.php">
            <table  class="table">
             
    <thead class="thead-light">
    
      <tr>
      <th>ID</th>
      <th>PROFILE</th>
        <th>Name</th>
        <th>PHONE NO.</th>
        <th>EMAIL</th>
        <th>ADHAR NO.</th>
        <th>PAN CARD</th>
        <th>GENDER</th>
        <th>DOB</th>
        <th>BLOOD GROUP</th>
        <th>FATHER Name</th>
        <th>FATHER OCCUPATION</th>
        <th>FATHER PHONE NO.</th>
        <th>ADDRESS</th>
        <th>STATE</th>
        <th>CITY</th>
        <th>PINCODE</th>

      </tr>
    </thead>
    <?php
$status="";
$id=$_GET['Tid'];
$qry="select * from tranpersonaldetail where id='$id'";
/*if(isset($_POST["btnsearch"]))
{
extract($_POST);
$qry="select * from category where catname like '%$tsearch%' order by catid desc";
}*/
$rs=readrecord($qry);
if(mysqli_num_rows($rs)>0)
{
?>
<?php
  while($row=mysqli_fetch_array($rs))
  {
    ?>

    <tbody>
    <tr>
    <td><?php echo $row["Tid"]; ?></td>
    <td><img src='<?php echo  $row["profile"]; ?>' style="height:85px;"></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["phone_no"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["aadhar_no"]; ?></td>
    <td><?php echo $row["pan_card"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["date_of_birth"]; ?></td>
    <td><?php echo $row["blood_group"]; ?></td>
    <td><?php echo $row["father_name"]; ?></td>
    <td><?php echo $row["father_occupation"]; ?></td>
    <td><?php echo $row["father_no"]; ?></td>
    <td><?php echo $row["city"]; ?></td>
    <td><?php echo $row["state"]; ?></td>
    <td><?php echo $row["pin_code"]; ?></td>
    <td><?php echo $row["address"]; ?></td>
</tr>
    
        
       
    
    
      
    </tbody>
    <?php
  }
}
   ?> 
    <button type="submit" class=" btn-primary">BACK</button>
        <!-- <button type="button" class=" btn-danger">Danger</button> -->    

  </table>
  </form>
  
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

<!-- 