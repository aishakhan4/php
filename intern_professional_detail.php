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
<script type="text/javascript" src="assets/js/proffesional.js"></script>
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
            </div>
            
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
               
              </div>
              <div class="mr-5">Last 15 days hired Employees</div>
            </div>
           
              
              
                
              
          
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
               
              </div>
              <div class="mr-5">Last 30 days hired Employees</div>
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
      


      <?php include("connection.php");?>
<?php
$status="";
if(isset($_POST["btn1"]))
{
$a=4;
$b="jff";
  extract($_POST);
  
    //$files=array("file1","file2","file3","file4","file5");

    $target_dir="image/";
    

    
    $target_file0=$target_dir.basename($_FILES["file1"]["name"]);
    $target_file1=$target_dir.basename($_FILES["file2"]["name"]);
    $target_file2=$target_dir.basename($_FILES["file3"]["name"]);
    $target_file3=$target_dir.basename($_FILES["file4"]["name"]);
    $target_file4=$target_dir.basename($_FILES["file5"]["name"]);

  
    move_uploaded_file($_FILES["file1"]["tmp_name"],$target_file0);
    move_uploaded_file($_FILES["file2"]["tmp_name"],$target_file1);
    move_uploaded_file($_FILES["file3"]["tmp_name"],$target_file2);
    move_uploaded_file($_FILES["file4"]["tmp_name"],$target_file3);
    move_uploaded_file($_FILES["file5"]["tmp_name"],$target_file4);
    
    $qry="insert into internprofessionaldetail(school_name, board, percent, passing_year, school_marksheet, hschool_name,hsboard, passing_hyear,
    hpercent, hschool_marksheet, univercity, degree, gpercent,year, g_marksheet, pgdegree, pgunivercity, pgyear, pgpercent,
     pg_marksheet, otherdegree, otherunivercity, otheryear, otherpercent, other_marksheet)
   values('$sname','$sboard','$spercent','$spassing','$target_file0','$hsname','$hsboard','$hspassing','$hspercent',
   '$target_file1','$gname','$gdegree','$gpercent','$gpassing','$target_file2','$pgdegree','$pgname','$pgpassing','$pgpercent'
   ,'$target_file3','$odegree','$oname','$opassing','$opercent','$target_file4')";
 
 $rs=executequery($qry);
 if($rs=="success")
 {
 $status="<h3>Category Added succssfully</h3>";
 }
 else
 {
 $status="<h3>error to Added</h3>";
 }  
}
?>

<div class="container-fluid mt--7"  style="padding-top: 100px;">


<div class="row">
<div class="col">
  <div class="card shadow">
    <div class="card-header bg-transparent">
<div >
    
      <h3 class="mb-0">Profession Details</h3>
    </div>
    <div class="card-body">
   
     <div class="container">
      <form name="myformcont" class="my-2" action="" method="POST" enctype="multipart/form-data">
        <h2 class="text-center"></h2>
        <div class="row jumbotron">

          <!-- <div class="col-sm-12 form-group" style="margin-top: -20px;">
            <label for="client_id">Client_id :</label>
            <input type="text" class="form-control" name="client_id" id="name-f" placeholder="Enter your Client_id." required>
          </div> -->

          <!--<div class="col-sm-6 form-group" style="margin-top: -20px;"> -->
            <!--High school-->
            <div class="col-sm-6 form-group">
            <h1>Higher School</h1>
          </div>
          <div class="col-sm-6 form-group">
            
          </div>

            <div class="col-sm-6 form-group">
            <label for="school name">School Name:</label>
            <input type="text" class="form-control" name="sname" id="name-f" placeholder=" School Name" ><br>
          </div>
          <div class="col-sm-6 form-group">
            <label for="bord">Board:</label>
            <input type="text" class="form-control" name="sboard" id="name-l" placeholder=" Examination Bord"  >
          </div>
          <div class="col-sm-6 form-group">
            <label for="percent">percent:</label>
            <input type="text" class="form-control" name="spercent" id="name-l" placeholder=" Percent" >
          </div>
          <div class="col-sm-6 form-group">
             <label for="passing year">Passing Year:</label>
            <input type="text" class="form-control" name="spassing" id="name-l" placeholder=" Passsing Year"  > 
          </div>
          <div class="col-sm-6 form-group">
            <label for="choose">Enter Document:</label>
            <input type="file" class="form-control" name="file1" id="name-l" placeholder=" Document"  >
          </div>
        
       
        <!-- Higher secondery school-->
        <div class="col-sm-6 form-group">
            
          </div>

<div class="col-sm-6 form-group">
            <h1>Higher Secondery School</h1>
          </div>
          <div class="col-sm-6 form-group">
            
          </div>


        <div class="col-sm-6 form-group">
            <label for="school name">School Name:</label>
            <input type="text" class="form-control" name="hsname" id="name-f" placeholder=" School Name" ><br>
          </div>

          <div class="col-sm-6 form-group">
            <label for="bord">Bord:</label>
            <input type="text" class="form-control" name="hsboard" id="name-l" placeholder=" Examination Bord"  >
          </div>
          <div class="col-sm-6 form-group">
            <label for="percent">percent:</label>
            <input type="text" class="form-control" name="hspercent" id="name-l" placeholder=" Percent"  >
          </div>
          <div class="col-sm-6 form-group">
             <label for="passing year">Passing Year:</label>
            <input type="text" class="form-control" name="hspassing" id="name-l" placeholder=" Passsing Year" > 
          </div>
          <div class="col-sm-6 form-group">
            <label for="choose">Enter Document:</label>
            <input type="file" class="form-control" name="file2" id="name-l" placeholder=" Document"  >
          </div>
        

        <!--Graduation details-->
        <div class="col-sm-6 form-group">
            
          </div>

<div class="col-sm-6 form-group">
            <h1>Graduation Details</h1>
          </div>
          <div class="col-sm-6 form-group">
            
          </div>

            <div class="col-sm-6 form-group">
            <label for="univercity name">Univercity Name:</label>
            <input type="text" class="form-control" name="gname" id="name-f" placeholder="  Univercity Name" ><br>
          </div>
          <div class="col-sm-6 form-group">
            <label for="degree">Degree:</label>
            <input type="text" class="form-control" name="gdegree" id="name-l" placeholder=" Degree"  >
          </div>
          <div class="col-sm-6 form-group">
            <label for="Percent">Percent:</label>
            <input type="text" class="form-control" name="gpercent" id="name-l" placeholder=" Percent"  >
          </div>
          <div class="col-sm-6 form-group">
             <label for="passing year">Passing Year:</label>
            <input type="text" class="form-control" name="gpassing" id="name-l" placeholder=" Passsing Year"> 
          </div>
          <div class="col-sm-6 form-group">
            <label for="choose">Enter Document:</label>
            <input type="file" class="form-control" name="file3" id="name-l" placeholder=" Document" >
          </div>
        

        <!--Post Graduation details-->
         <div class="col-sm-6 form-group">
            
          </div>

<div class="col-sm-6 form-group">
            <h1>Post-Graduation Details</h1>
          </div>
          <div class="col-sm-6 form-group">
            
          </div>

           <div class="col-sm-6 form-group">
            <label for="univercity name">Univercity Name:</label>
            <input type="text" class="form-control" name="pgname" id="name-f" placeholder="Univercity Name"><br>
          </div>
          <div class="col-sm-6 form-group">
            <label for="degree">Degree:</label>
            <input type="text" class="form-control" name="pgdegree" id="name-l" placeholder=" Degree"  >
          </div>
          <div class="col-sm-6 form-group">
            <label for="percent">Percent:</label>
            <input type="text" class="form-control" name="pgpercent" id="name-l" placeholder=" Percent"  >
          </div>
          <div class="col-sm-6 form-group">
             <label for="passing year">Passing Year:</label>
            <input type="text" class="form-control" name="pgpassing" id="name-l" placeholder=" Passsing Year" > 
          </div>
          <div class="col-sm-6 form-group">
            <label for="choose">Enter Document:</label>
            <input type="file" class="form-control" name="file4" id="name-l" placeholder=" Document"  >
          </div>


<!--other details-->
<div class="col-6"></div>
<div class="col-sm-6 form-group">

            <h1>Other Details</h1>
          </div>
          <div class="col-sm-6 form-group">
            
          </div>

           <div class="col-sm-6 form-group">
            <label for="univercity name">Univercity Name:</label>
            <input type="text" class="form-control" name="oname" id="name-f" placeholder=" Univercity Name" ><br>
          </div>
          <div class="col-sm-6 form-group">
            <label for="degree">Degree:</label>
            <input type="text" class="form-control" name="odegree" id="name-l" placeholder=" Degree" >
          </div>
          <div class="col-sm-6 form-group">
            <label for="percent">Percent:</label>
            <input type="text" class="form-control" name="opercent" id="name-l" placeholder=" Percent"  >
          </div>
          
          <div class="col-sm-6 form-group">
             <label for="passing year">Passing Year:</label>
            <input type="text" class="form-control" name="opassing" id="name-l" placeholder=" Passsing Year"  > 
          </div>
          <div class="col-sm-6 form-group">
            <label for="choose">Enter Document:</label>
            <input type="file" class="form-control" name="file5" id="name-l" placeholder=" Document"  >
          </div>

<!-- <div class="col-6"></div>
<div class="col-sm-6 form-group">

            <h1>Education Brack</h1>
          </div>
          <div class="col-sm-6 form-group">
            
          </div>

           <div class="col-sm-12 form-group">
            
            <input type="text" class="form-control" name="break" id="name-f" placeholder=" Univercity Name" ><br>
          </div>   
 -->      <div class="col-sm-12">
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
