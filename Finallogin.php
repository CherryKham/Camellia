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
         
    .container3 {
            text-align: center;
            margin-top: 50px;
            display: flex;
            margin-top: 20px;
        }
        .left-content {
      width: 25%;
     
    }

    .right-content {
      width: 40%;
     
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
        <h1  class="navbar-brand" style="color: rgb(75, 7, 138);"><img class="conten" src="./img/C1.webp" alt="" style="width: 40px; height: 40px; border-radius: 1cm;"> Camellia  </h1>
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
}
else{
echo " <strong style='color:rgb(75, 7, 138);'>Connected successfully</strong>";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query the database for user with matching email and password
    $sql = "SELECT * FROM UserTable WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login successful
        echo "User Exist!";
       
        exit();
    } else {
        // Login failed
        echo "Invalid email or password!";
    }

    if ($result->num_rows == 1) {
        // Login successful
        echo "Login successful!";
        header("Location: Fprivacy.php");
        exit();
    } else {
        // Login failed
        echo "Invalid email or password!";
    }
    $conn->close();
}

?>
</center>
<div class="center">
    <main class="py-5">
        <div class="container">
            <div style="height:400px; width: 400px; border:20px; border-radius: 1cm; border-color: rgb(75, 7, 138);"><h5>Login</h5>
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
                   <div class="container3">
                    <div class="left-content">
                       <button  style=" color: rgb(75, 7, 138); ; border-radius: 10px; border-color:rgb(75, 7, 138); padding: 5px; height: 40px;" ><i class="fas fa-user me-2"></i>Login</button>
                       </div>
                       <div class="right-content" >
                       <a href="./Fchangepass.php" style="height: 40px; width: 170px;  border-radius: 10px; text-align: center; border-color:rgb(75, 7, 138); padding: 5px;">Change Password</a>
                       </div>
                </div>
            </form></div>
        </div>  
      </main>
    </div>
   



</body>
</html>