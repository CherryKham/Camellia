<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="finalproject.css">
    <script>
        function validateForm() {
            var name = document.forms["myForm"]["name"].value;
            var pass = document.forms["myForm"]["pass"].value;

            if (name == "") {
                alert("Please enter your name.");
                return false;
            }

            if (pass == "") {
                alert("Please enter your Password.");
                return false;
            }

           

            return true;
        }
    </script>
    <style>
         input[type="email"]:invalid {
      border-color: red;
    }

    input[type="email"]:valid {
      border-color: green;
    }
        
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
           height: 90vh
           ;
            
        }
        p{
            padding-top: 80px;
        }
        a{
            background-color: white; display: flex; justify-content: center;
            font-family: Arial, Helvetica;
    
        }
    </style>
</head>


<nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-light" >
    <div class="container-fluid">
        <h1  class="navbar-brand" style="color: rgb(75, 7, 138);"><img class="conten" src="./img/Res11.avif" alt="" style="width: 40px; height: 40px; border-radius: 1cm;"> Camellia  </h1>
        <ul class="navbar-nav">
        
                <li class="nav-item">
                    <a href="Fprivacy.php" class="nav-link">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a  style="color:rgb(75, 7, 138); font-size: 17px; font-weight: bold;" href="FinalHome.php" class="nav-link">Why Camellia</a>
                  </li>
                  <li class="nav-item">
                    <a href="finallReg.php" class="nav-link"style="color:rgb(75, 7, 138); font-size: 17px; font-weight: bold;" >Register</a>
                  </li>
                  <li class="nav-item">
                    <a href="Finallogin.php" class="nav-link" style="color:rgb(75, 7, 138); font-size: 17px; font-weight: bold;" >Login</a>
                  </li>
                       
            </ul>
        
    </div>
</nav>
<br>
<center>
   
<?php
$servername = "localhost";
$username = "root";
$password = ""; // By default, the password is empty in XAMPP
$database = "testdb"; // Replace with your actual database name

 // Create a connection
 $conn = new mysqli($servername, $username, $password, $database);

 // Check the connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }else{
    echo"Successful";
 }
 
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpass = $_POST["cpass"];
    $cconpass = $_POST["cconpass"];
    

    if (empty($password)) {
        $error = "Password is required";
    } elseif (strlen($password) < 8) {
        $error = "Password must be at least 8 characters long";
    }

    if (empty($cpass)) {
        $error = "Type New password";
    } elseif ($cpass !== $cconpass) {
        $error = "Confirm your password again";
    }
    elseif (strlen($password) < 8) {
        $error = "Password must be at least 8 characters long";
    }

    if (!isset($error)) {

    // Update the user's password in the database
    $sql = "UPDATE UserTable SET password = '$cpass' WHERE email = '$email' AND password = '$password'";
    
    if ($conn->query($sql) === TRUE) {
        // Password changed successfully
        echo "Changing Successful!!";
        $conn->close();
        return true;
    
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 
}else {
    echo "Error: " . $error;
}
      


 } 





?>
</center>
<div class="center">
    <main class="py-5">
        <div class="container">
            <div style="height:400px; width: 400px; border:20px; border-radius: 1cm; border-color: rgb(75, 7, 138);">
                <form name="myForm"  onsubmit="return validateForm()" method="post" >
                    <br>
                    
                    
                   <div class="mb-2"><label for="email"><i class="fas fa-user me-2"></i>Email</label>
                    <input type="text" id="email" name="email"  required placeholder="Enter your Emaill address" class="form-control">
                    
                   </div>
                
                   <div class="mb-2">
                    <label for="password"> <i class="fas fa-key me-2">
                         
                    </i>Password</label>
                    <input type="password" id="password" name="password" placeholder="Please your Password" class="form-control">
                   </div>
                   <div class="mb-2">
                    <label for="cpass"> <i class="fas fa-key me-2">
                         
                    </i>New Password</label>
                    <input type="password" id="cpass" name="cpass" placeholder="Define new Password" class="form-control">
                   </div>
                   <div class="mb-2">
                    <label for="cconpass"> <i class="fas fa-key me-2">
                         
                    </i> Confirm Password</label>
                    <input type="password" id="cconpass" name="cconpass" placeholder="Confirm Change Password" class="form-control">
                   </div>
                   <div>
                       <button style=" color: rgb(75, 7, 138); ; border-radius: 10px; border-color:rgb(75, 7, 138); padding: 10px;" ><i class="fas fa-user me-2"></i>Change</button>
                   </div>
                  
                </form></div>
        </div> 
      </main>
    </div>

</body>
</html>