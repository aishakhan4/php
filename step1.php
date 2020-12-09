<?php
session_start(); 
?><!DOCTYPE HTML>
<html>
 <head>
 <title>first Form</title>
 <link rel="stylesheet" href="style.css" />
 </head>
 <center>
 <body>
 <div class="container">
 <div class="main">
 <h2>first Form</h2>
 <span id="error">
 <?php
 if (!empty($_SESSION['error'])) {
 echo $_SESSION['error'];
 unset($_SESSION['error']);
 }
 ?>
 </span>
 <form action="step2.php" method="post">
 <label>Full Name :<span>*</span></label>
 <input name="name" type="text" placeholder="Ex-Aisha khan" required></br></br>
 <label>Email :<span>*</span></label>
 <input name="email" type="email" placeholder="Ex-aishakhan@gmail.com" required></br></br>
 <label>Contact :<span>*</span></label>
 <input name="contact" type="text" placeholder="10-digit number" required></br></br>
 <label>Password :<span>*</span></label>
 <input name="password" type="Password" placeholder="*****" /></br></br>
 <label>Re-enter Password :<span>*</span></label>
 <input name="confirm" type="password" placeholder="*****" >
 <input type="reset" value="Reset" />
 <input type="submit" value="Next" />
 </form>
 </div>
 </div>
 </body></center>
</html>




 

