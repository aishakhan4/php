<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (isset($_POST['name'])){
 if (empty($_POST['name'])
 || empty($_POST['email'])
 || empty($_POST['contact'])
 || empty($_POST['password'])
 || empty($_POST['confirm'])){ 
 // Setting error message
 $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: step1.php"); // Redirecting to first page 
 } else {
 // Sanitizing email field to remove unwanted characters.
 $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); 
 // After sanitization Validation is performed.
 if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ 
 // Validating Contact Field using regex.
 if (!preg_match("/^[0-9]{10}$/", $_POST['contact'])){ 
 $_SESSION['error'] = "10 digit contact number is required.";
 header("location: step1.php");
 } else {
 if (($_POST['password']) === ($_POST['confirm'])) {
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 }
 } else {
 $_SESSION['error'] = "Password does not match with Confirm Password.";
 header("location:step1.php"); //redirecting to first page
 }
 }
 } else {
 $_SESSION['error'] = "Invalid Email Address";
 header("location: step1.php");//redirecting to first page
 }
 }
} else {
 if (empty($_SESSION['error_page2'])) {
 header("location: step1.php");//redirecting to first page
 }
}
?>
<!DOCTYPE HTML>
<html>
 <head>
 <title> Form2</title>
 <link rel="stylesheet" href="style.css" />
 </head>
 <body>
 <div class="container">
 <div class="main">
 <h2>second Form</h2><hr/>
 <span id="error">
<?php
// To show error of page 2.
if (!empty($_SESSION['error_page2'])) {
 echo $_SESSION['error_page2'];
 unset($_SESSION['error_page2']);
}
?>
 </span>
 <form action="step3.php" method="post">
 <label>Religion :<span>*</span></label>
 <input name="religion" id="religion" type="text" value="" ></br></br>
 <label>Nationality :<span>*</span></label>
 <input name="nationality" id="nationality" type="text" value="" ></br></br>
 <label>Gender :<span>*</span></label>
 <input type="radio" name="gender" value="male" required>Male
 <input type="radio" name="gender" value="female">Female</br></br>
 <label>Educational Qualification :<span>*</span></label>
 <select name="qualification">
 <option value="">----Select----</options>
 <option value="graduation" value="">Graduation </options></br></br>
 <option value="postgraduation" value="">Post Graduation </options></br></br>
 <option value="other" value="">Other </options></br></br>
 </select></br></br>
 <label>Job Experience :<span>*</span></label>
 <select name="experience">
 <option value="">----Select----</options>
 <option value="fresher" value="">Fresher </options></br></br>
 <option value="less" value="">Less Than 2 year </options></br></br>
 <option value="more" value="">More Than 2 year</options></br></br>
 </select>
 <input type="reset" value="Reset" />
 <input type="submit" value="Next" />
 </form>
 </div>
 </div>
 </body>
</html>

