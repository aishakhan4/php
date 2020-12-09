<!DOCTYPE HTML>
<html>
 <head>
 <title>PHP Multi Page Form</title>
 <link rel="stylesheet" href="style.css" />
 </head>
 <body>
 <div class="container">
 <div class="main">
 <h2>******************</h2>
 <?php
 session_start();
 if (isset($_POST['state'])) {
 if (!empty($_SESSION['post'])){
 if (empty($_POST['address1'])
 || empty($_POST['city'])
 || empty($_POST['pin'])
 || empty($_POST['state'])){ 
 $_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: step3.php"); 
 } else {
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 } 
 extract($_SESSION['post']);
 $connection = mysqli_connect("localhost", "root", "","phpmultipage");
 
 $query = mysqli_query($connection,"insert into detail(name,email,contact,password,religion,nationality,gender,qualification,experience,address1,address2,city,pin,state) values('$name','$email','$contact','$password','$religion','$nationality','$gender','$qualification','$experience','$address1','$address2','$city','$pin','$state')");
 if ($query) {
 echo '<p><span id="success">Form Submitted successfully..!!</span></p>';
 } else {
 echo '<p><span>Form Submission Failed..!!</span></p>';
 } 
 unset($_SESSION['post']); 
 }
 } else {
 header("location: step1.php");
 }
 } else {
 header("location: step1.php"); 
 }
 ?>
 </div>
 </div>
 </body>
</html>