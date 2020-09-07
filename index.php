<?php
if(isset($_REQUEST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $databse="covidcare";
  $con = mysqli_connect($server,$username,$password,$databse);
  
    if(!$con){
       die("connection failed due to" . mysqli_connect_error() );
    };
    $name = $_REQUEST['name'];
   $story = $_REQUEST['story'];
    $sql = "INSERT INTO stories (name, story, date)
    VALUES ('$name','$story',current_timestamp())";
    
    if($con->query($sql)){
        
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
  }

?>
<!doctype html>
<html lang="en">
    <head>
        <title>COVID-CARE</title>
        <link rel="stylesheet" href="homepage.css">
    </head>
    <body>
        <div class="mainheader">
            
            <div class="header" ">
                <h1>COVID <span style="color:red;">CARE</span></h1>
                <p>Saving Lives,Protecting People</p>
            </div>
            <div class="body">
                <div id="sidemenu" >
                   
                    <h1 class="check">MENU<hr style="width: 92px;height: 2px;color: red;background-color: red;border: none;"></h1>
                    <button class="cross" id="close" >&times</button>
                    <div class="list">
                        <li ><a href="index.php">HOMEPAGE</a></li>
                        <li><a href="symptoms.html">SYMPTOMS</a></li>
                        <li><a href="checker.html" target="_blank">SYMPTOM CHECKER</a></li>
                        <li><a href="preventions.html">PREVENTIONS</a></li>
                        <li><a href="guidelines.html">GUIDELINES</a></li>
                        <li><a href="login.html" target="_blank">LOGIN</a></li>
                        <li><a href="registeration.php" target="_blank">REGISTRATION</a></li>
                        <li><a href="faqs.html">FAQS</a></li>
                    </div>
                </div>
                <div id="section"  >
                    <div class="part1">
                         <button class="btn1" id="open"  style="font-size: 40px;"  >&#9776;</button>
                        
                    </div>
                    <div class="content">
                        <div class="heading">
                            <h1>COVID CARE</h1>
                            <button class="login"><a href="login.html" target="_blank">Login</a></button>
                            <button class="registeration"><a href="registeration.html" target="_blank">Registeration</a></button>
                        </div>
                        <span class="topline"><hr></span>
                        <span class="st"><h2>COVID STORIES</h2></span>
                        <div class="banner">
 
                            <h2 class="gap">Muhammad ahmed,</h2>
                            <p class="gap">My name is ahmed doing cs</p>
                            <hr>
                            <?php 
                             $server = "localhost";
                             $username = "root";
                             $password = "";
                             $databse="covidcare";
                           $con = mysqli_connect($server,$username,$password,$databse);
                           
                             if($con){
                                echo "connecnted";
                             }
                             else{
                                die("connection failed due to" . mysqli_connect_error() );
                               
                             }
                    
                        $sql = "SELECT * FROM stories";
                        $result = $con->query($sql);


                        while ($row = mysqli_fetch_assoc($result)) {


                           echo "<h2 class='gap'>".$row['name']."</h2>";
                           echo "<p class='gap'>".$row['story']."</p>";
                           echo "<hr>";

                        }

                       $con->close();
                           
                    ?>
                        </div>
                        <div class="uploadstory">
                            <h2 style="padding: 20px 0;">SHARE THE EXPERIENCE</h2>
                            <form id="upstory" action="" method="POST">
                                <label for="name">Please enter your names first</label>
                                <input type="text" id="nameper" name="name" required><br>
                                <h2>Add your story</h2>
                                <textarea rows="10" cols="70" id="forstory" name="story" required></textarea><br>
                                <button class="uploadbtn">Upload Story</button>
                            </form>
                            <br>
                            
                        </div>
                        <footer>&#169;COPYRIGHT BY COVID-CARE</footer>
                    </div>
                </div>
            </div>
        </div>
         <script src="index.js"></script>
    </body>
</html>
