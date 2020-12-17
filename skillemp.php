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
<script type="text/javascript" src="assets/js/skill.js"></script>
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
      
      <?php  
$status="";
if(isset($_POST["btn1"]))
{
 $number = count($_POST["skill"]);
 echo "Skilll".$_POST['skill'][0]."<br>";
echo "skill".$_POST['skill'][1]."<br>";

$skills="";
$positions="";
$experiences="";
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {
       if( $_POST["skill"][$i] != '' && $_POST["position"][$i] != '' && $_POST["experience"][$i] != '' ) 
           {  
             $skill=mysqli_real_escape_string( getconnect(), $_POST["skill"][$i]);
             $position=mysqli_real_escape_string(getconnect(), $_POST["position"][$i]);
             $experience=mysqli_real_escape_string(getconnect(), $_POST["experience"][$i]);
            
            $skills.=$skill.',';
            $positions.=$position.',';
            $experiences.=$experience.',';
           }
      
      }

    }
           $sql = "INSERT INTO skill(skill,position,experience) VALUES('$skills','$positions','$experiences')";  
                $rs=executequery($sql);
           }
           ?>

 <div class="container">  
                <br />  
                <br />  
                <h3 style="text-align:center"> Employee Skills  </h3>  
                <div class="form-group">  
                     <form name="add_name" id="add_name" method="POST" action="">  
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                        
                                        <td><input type="text" name="skill[]" placeholder="Skills" class="form-control name_list" /></td> 
                                        <td> 
        <select input type="text" class="form-control" name="position[]" id="address-1" placeholder=" Blood Group" required>
        <option value="Beginner">Beginner</option>
        <option value="Intermediate">Intermediate</option>
        <option value="Expert">Expert</option></select>
       </td> 
                                        <td> <select input type="text" class="form-control" name="experience[]" id="address-1" placeholder=" Blood Group" required>
        <option value="0-1 month">0-1 month</option>
        <option value="0-2 month">0-2 month</option>
        <option value="0-3 month">0-3 month</option>
         <option value="0-4 month">0-4 month</option>
          <option value="0-5 month">0-5 month</option>
           <option value="0-6 month">0-6 month</option>
            <option value="0-7 month">0-7 month</option>
             <option value="0-8 month">0-8 month</option>
              <option value="0-9 month">0-9 month</option>
               <option value="0-10 month">0-10 month</option>
                <option value="0-11 month">0-11 month</option>
      </select></td>  
                                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                               </table>  
                               <input type="submit" name="btn1" id="submit" class="btn btn-info" value="Submit" />  
                          </div>  
                     </form>  
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
