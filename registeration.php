<?php
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection failed due to" . mysqli_connect_error() );
    };
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_num = $_POST['phone_num'];

    $sql = "INSERT INTO `covidcare`.`register` ( `name`, `email`, `phone_num`, `date`)
     VALUES ( '$name', '$email', '$phone_num', current_timestamp())";
 

    if($con->query($sql) == true){
        echo "";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>



<!DOCTYPE html>
<html>
<head> 
<meta name="viewport"  content="width=device-width, initial-scale=1">   
<title>Registration Page </title>
<link rel="stylesheet" type="text/css" href="registration.css">
</head> 
<body>
 

      
      <div class="main">
        <h1 class="registration">Register</h1>
        <form class="form1" action="registeration.php" method="post" >
        <p>Please fill this form to create an account.</p>
        <hr>
        
        <input class="name" type="text" placeholder="Enter Name" name="name" align="centre" required>
        <input class="email" type="text" placeholder="Enter Email" name="email" align="centre" required>

        <input class="pn" type="tel" placeholder="Phone Number" name="phone_num" align="centre" required>
        <input class="pw" type="password" placeholder="Enter Password" id="password" name="password" align="centre" required>
        <div class=feedback2></div>
        <input  class="repeat" type="password" placeholder="Repeat Password" id="passwordRepeat" name="passwordRepeat" align="centre" required><br><br>
        <hr>
        <div class=feedback></div>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <input class="submit" type="submit" value="Register">
        <!--<button type="submit" class="submit">Register</button><br><br> -->
        <span><p class="account" > Already have an account? <a href="#">Sign in</a>.</p></span>
        
      </div>
     
    
      <script src="registration.js" ></script>
    </body>
</html>




























