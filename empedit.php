<?php include("connection.php");
?>


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
<script type="text/javascript" src="assets/js/personal.js"></script>

 <script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js">
</script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/style/style.css">
<link rel="stylesheet" type="text/css" href="assets/style/personal.css">

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
      <?php 



$status="";
if(isset($_POST["btn1"]))
{
$pid=$_GET['id'];



extract($_POST);

$target_dir="image/";

if($_FILES["file"]["error"]==0)
{

$target_file=$target_dir.basename($_FILES["file"]["name"]);
if(move_uploaded_file($_FILES["file"]["tmp_name"],$target_file));
{
  echo $target_file;
  echo "ndnndmmdd";
$qry="update emppersonaldetail set pfile='$target_file', full_name='$name', email='$email', `mobile_no.`='$phone', aadhar_number='$aadhar', pancard='$pan', gender='$gender', 
dob='$dob', blood_group='$bloodgroup', father_name='$fname', father_occupation='$occupation', father_num='$fnum', address='$address', state='$state', city='$city',  
pincode='$pincode', join_date='$joindate' where id=$pid";
$rs=executequery($qry);

if($rs=="success")
{
$status="<h3>catagory updated successfully</h3>";
}
else
{
$status="<h3>error to update</h3>";
}
}
}
}
?>

      
      <?php
      $pid=$_GET['id'];
      $file="";
$fullname="";
$email="";
$phone="";
$aadhar="";
$pan="";
$gender="";
$dob="";
$bloodgroup="";
$fname="";
$occupation="";
$fnum="";
$city="";
$state="";
$pincode="";
$address="";
$joindate="";	
$qry="select * from emppersonaldetail where id='$pid'";
$rs=readrecord($qry);
if(mysqli_num_rows($rs)>0)
{
$row=mysqli_fetch_array($rs);
$file=$row["pfile"];
$fullname=$row["full_name"];
$email=$row["email"];
$phone=$row["mobile_no."];
$aadhar=$row["aadhar_number"];
$pan=$row["pancard"];
$gender=$row["gender"];
$dob=$row["dob"];
$bloodgroup=$row["blood_group"];
$fname=$row["father_name"];
$occupation=$row["father_occupation"];
$fnum=$row["father_num"];
$city=$row["city"];
$state=$row["state"];
$pincode=$row["pincode"];
$address=$row["address"];
$joindate=$row["Join_date"];

}
?>



<div class="container-fluid mt--7" style="padding-top: 100px;">
<div class="row">
<div class="col">
  <div class="card shadow">
    <div class="card-header bg-transparent">
<div >
    
    
    </div>
    <div class="card-body">
     <div class="container">
      <form name="myformcont" class="my-2" action="" method="POST" enctype="multipart/form-data">
<h3>Personal Details</h3>
        <!-- <h2 class="text-center">LIC Form</h2> -->
        <div class="row jumbotron">
        <input type="hidden" name="id" value="<?php echo $pid; ?>">

          <!-- <div class="col-sm-12 form-group" style="margin-top: -20px;">
            <label for="client_id">Client_id :</label>
            <input type="text" class="form-control" name="client_id" id="name-f" placeholder="Enter your Client_id." required>
          </div> -->
 <div class="col-sm-3 form-group" style="margin-top: -20px;">
          <div class="container">
    <div class="picture-container">
        <div class="picture" style="height: 170px; width: 170px; margin-top: 25px;">
           <!--  <img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no" class="picture-src" id="wizardPicturePreview" title=""> -->
            <canvas id= "canv1" ></canvas>
            <input type="file" multiple="false"  name="file" accept="image/*" id=finput onchange="upload()" value="<?php echo $file;?>">
        </div>
         <h6 class="">Choose Picture</h6>

    </div>
</div>
          </div>
          
          
          <div class="col-sm-9 form-group" style="margin-top: -20px;">
            <label for="name">Name :</label>
            <input type="text" class="form-control" name="name" id="name-f" placeholder=" Full Name." required value="<?php echo $fullname;?>"><br>
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="name-l" placeholder=" Email"  value="<?php echo $email;?>" >
          </div>
         
          <div class="col-sm-6 form-group">
            <label for="Date">Phone No:</label>
            <input type="text" name="phone" class="form-control" id="Date" placeholder=" Phone No." required value="<?php echo $phone;?>">
          </div>
          <div class="col-sm-6 form-group">
            <label for="e_group">Adhar no..</label>
            <input type="text" class="form-control" name="aadhar" id="name-f" placeholder=" Adhar Number" required value="<?php echo $aadhar;?>">
          </div>
          <div class="col-sm-6 form-group">
            <label for="cost_center"> Pan Card</label>
            <input type="text" class="form-control" name="pan" id="cost_center" placeholder=" Pain Card Number" required value="<?php echo $pan;?>">
          </div>
    
        <!-- <div class="col-sm-6 form-group">
            <label for="grade">Policy Type</label>
            <input type="text" class="form-control" name="policy_type" id="zip" placeholder="Enter grade " required>
        </div>
      -->
      <div class="col-sm-6 form-group">
        <label for="bname">Gender</label>
        <select input type="text" class="form-control" name="gender" id="name-l" placeholder="  Gender " required value="<?php echo $gender;?>">
        <option >Female</option>
        <option>Male</option>
        
        </select>
      </div>
      <div class="col-sm-6 form-group">
        <label for="Dname">Date Of Birth </label>
        <input type="Date" class="form-control" name="dob" id="name-l" placeholder="DOB" required value="<?php echo $dob;?>">
      </div>

      <div class="col-sm-6 form-group">
        <label for="Payslip"> Blood Group</label>
        <select input type="text" class="form-control" name="bloodgroup" id="address-1" placeholder=" Blood Group" required value="<?php echo $bloodgroup;?>">
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        
         </select>
      </div>
      
      
      <div class="col-sm-6 form-group">
        <label for="cc description">Father Name</label>
        <input type="text" class="form-control" name="fname" id="description" placeholder=" Father Name" required value="<?php echo $fname;?>">
      </div>
      <div class="col-sm-6 form-group">
        <label for="pan_no"> Father Occoupation</label>
        <input type="text" class="form-control" name="occupation" id="pan-no" placeholder=" Father Occoupation " required value="<?php echo $occupation;?>">
      </div>
      <div class="col-sm-6 form-group">
        <label for="created_on">Father Number</label>
        <input type="int" class="form-control" name="fnum" id="pan-no" placeholder=" Father Number" required value="<?php echo $fnum;?>">
      </div>
      
      <div class="col-sm-6 form-group">
        <label for="renew_date">City</label>
        <input type="text" name="city" class="form-control datetimepicker" id="Date" placeholder=" City" required value="<?php echo $city;?>">
      </div>

      <div class="col-sm-6 form-group">
        <label for="renew_date">State</label>
        <input type="text" name="state"  class="form-control datetimepicker" id="Date" placeholder="State " required value="<?php echo $state;?>">
      </div>
      <div class="col-sm-6 form-group">
        <label for="renew_date">Pincode</label>
        <input type="text" name="pincode"  class="form-control datetimepicker" id="Date" placeholder=" Pincode" required value="<?php echo $pincode;?>">
      </div>
        <div class="col-sm-6 form-group">
        <label for="renew_date">Address</label>
        <input type="text" name="address"  class="form-control datetimepicker" id="Date" placeholder=" Address" required value="<?php echo $address;?>">
      </div>
      <div class="col-sm-6 form-group">
        <label for="join date">Join Date</label>
        <input type="date" name="joindate"  class="form-control datetimepicker" id="Date" placeholder=" Address" required value="<?php echo $joindate;?>">
      </div>

      <div class="col-sm-12">
        <input type="checkbox" class="form-check d-inline" id="chb" required><label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.
        </label>
      </div>

      <div class="col-sm-12 form-group mb-0">
       <button class="btn btn-primary float-right" name="btn1">update</button>
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
  <?php 
echo $status;
?>
</body>
</html>