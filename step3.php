<?php
session_start();
if (isset($_POST['gender'])){
 if (empty($_POST['gender'])
 || empty($_POST['nationality'])
 || empty($_POST['religion'])
 || empty($_POST['qualification'])
 || empty($_POST['experience'])){ 
 $_SESSION['error_page2'] = "Mandatory field(s) are missing, Please fill it again"; // Setting error message.
 header("location: step2.php"); 
 } else {
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 }
 }
} else {
 if (empty($_SESSION['error_page3'])) {
 header("location: step1.php");
 }
}
?>
<!DOCTYPE HTML>
<html>
 <head>
 <title> Form3</title>
 <link rel="stylesheet" href="style.css" />
 </head>
 <body>
 <div class="container">
 <div class="main">
 <h2>PHP Multi Page Form</h2><hr/>
 <span id="error">
 <?php
 if (!empty($_SESSION['error_page3'])) {
 echo $_SESSION['error_page3'];
 unset($_SESSION['error_page3']);
 }
 ?>
 </span>
 <form action="step4.php" method="post">
 <b>Complete Address :</b>
 <label>Address Line1 :<span>*</span></label>
 <input name="address1" id="address1" type="text" size="30" required></br></br>
 <label>Address Line2 :</label>
 <input name="address2" id="address2" type="text" size="50"></br></br>
 <label>City :<span>*</span></label>
 <input name="city" id="city" type="text" size="25" required></br></br>
 <label>Pin Code :<span>*</span></label>
 <input name="pin" id="pin" type="text" size="10" required></br></br>
 <label>State :<span>*</span></label>
 <input name="state" id="state" type="text" size="30" required></br></br>
 <input type="reset" value="Reset" />
 <input name="submit" type="submit" value="Submit" />
 </form>
 </div> 
 </div>
 </body>
</html>
