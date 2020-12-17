<?php 
include ("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="int.css">
  <script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js">
</script>
 
</head>
<body> 
  <?php
$status="";
if(isset($_POST["btn1"]))
{
  extract($_POST);
  if($_FILES["file"]["error"]==0)
{
  $target_dir="image/";
  $target_file=$target_dir.basename($_FILES["file"]["name"]);
//  $imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSIONS)); 

  if(move_uploaded_file($_FILES["file"]["tmp_name"],$target_file))
{
 $qry="insert into internpersnoldetail (profile, name, email, phone_no, aadhar_no, pan_card, gender, date_of_birth, blood_group, father_name,father_occupation, father_no, city, state, pin_code, address) values('$target_file','$name','$email','$phone','$aadhar_no','$pan_card','$gender','$dob','$bloodgroup','$fathername','$fatheroccu','$fatherno','$city','$state','$pincode','$address')";
  $rs=executequery($qry);
if($rs=="success")
{
  header("Location:int_persnol_show.php");
$status="<h3>Category Added succssfully</h3>";
}
else
{
$status="<h3>error to Added</h3>";
}
}
}
}
?>


<div class="container-fluid mt--7">
<div class="row">
<div class="col">
  <div class="card shadow">
    <div class="card-header bg-transparent">
<div >
    
    
    </div>
    <div class="card-body">
     <div class="container">
      <form name="myformcont" class="my-2" action="" method="POST" enctype="multipart/form-data">
    
<h3>Persnol Details</h3>
        <!-- <h2 class="text-center">LIC Form</h2> -->
        <div class="row jumbotron">

          <!-- <div class="col-sm-12 form-group" style="margin-top: -20px;">
            <label for="client_id">Client_id :</label>
            <input type="text" class="form-control" name="client_id" id="name-f" placeholder="Enter your Client_id." required>
          </div> -->
 <div class="col-sm-3 form-group" style="margin-top: -20px;">
          <div class="container">
    <div class="picture-container">
        <div class="picture" style="height: 170px; width: 170px; margin-top: 25px;">
            <canvas id= "canv1" ></canvas>
            <input type="file" multiple="false"  name="file" accept="image/*" id=finput onchange="upload()">
        </div>
         <h6 class="">Choose Picture</h6>

    </div>
</div>
          </div>
          
          
          <div class="col-sm-9 form-group" style="margin-top: -20px;">
            <label for="name">Name :</label>
            <input type="text" class="form-control" name="name" id="name-f" placeholder=" Full Name." required><br>
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="name-l" placeholder=" Email" required >
          </div>
         
          <div class="col-sm-6 form-group">
            <label for="phone_no">Phone No:</label>
            <input type="number" name="phone" class="form-control" id="Date" placeholder=" Phone No." required>
          </div>
          <div class="col-sm-6 form-group">
            <label for="aadhar card">Adhar no..</label>
            <input type="number" class="form-control" name="aadhar_no" id="name-f" placeholder=" Adhar Number" required>
          </div>
          <div class="col-sm-6 form-group">
            <label for="pan card"> Pan Card</label>
            <input type="text" class="form-control" name="pan_card" id="cost_center" placeholder=" Pain Card Number" required>
          </div>
    
        <!-- <div class="col-sm-6 form-group">
            <label for="grade">Policy Type</label>
            <input type="text" class="form-control" name="policy_type" id="zip" placeholder="Enter grade " required>
        </div>
      -->
      <div class="col-sm-6 form-group">
        <label for="gender">Gender</label>
        <select input type="text" class="form-control" name="gender" id="name-l" value="Gender" placeholder="Gender" required>
          <option >Female</option>
        <option>Male</option>
        
        </select>
      </div>
      <div class="col-sm-6 form-group">
        <label for="dob">Date Of Birth</label>
        <input type="Date" class="form-control" name="dob" id="name-l" placeholder="DOB" required>
      </div>

      <div class="col-sm-6 form-group">
        <label for="bloodgroup"> Blood Group</label>
        <select input type="text" class="form-control" name="bloodgroup" id="address-1" placeholder=" Blood Group" required>
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
        <label for="father name">Father Name</label>
        <input type="text" class="form-control" name="fathername" id="description" placeholder=" Father Name" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="father_occupation"> Father Occoupation</label>
        <input type="text" class="form-control" name="fatheroccu" id="pan-no" placeholder=" Father Occoupation " required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="father_no">Father Number</label>
        <input type="phone" class="form-control" name="fatherno" id="pan-no" placeholder=" Father Number" required>
      </div>
      
      <div class="col-sm-6 form-group">
        <label for="city">City</label>
        <input type="text" name="city" class="form-control datetimepicker" id="Date" placeholder=" City" required>
      </div>

      <div class="col-sm-6 form-group">
        <label for="state">State</label>
        <input type="text" name="state"  class="form-control datetimepicker" id="Date" placeholder="State " required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="pincode">Pincode</label>
        <input type="number" name="pincode"  class="form-control datetimepicker" id="Date" placeholder=" Pincode" required>
      </div>
        <div class="col-sm-12 form-group">
        <label for="address">Address</label>
        <input type="text" name="address"  class="form-control datetimepicker" id="Date" placeholder=" Address" required>
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

</body>
<script type="text/javascript">
  function upload(){
  var imgcanvas = document.getElementById("canv1");
  var fileinput = document.getElementById("finput");
  var image = new SimpleImage(fileinput);
  image.drawTo(imgcanvas);
}
</script>
<script type="text/javascript">
  $(document).ready(function(){
// Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    });
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
</html>
