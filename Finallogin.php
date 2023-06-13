<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
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
        <h1  class="navbar-brand" style=" color:rgba(121, 157, 138, 0.722);"><img class="conten" src="./img/Res11.avif" alt="" style="width: 40px; height: 40px; border-radius: 1cm;"> Camellia  </h1>
        <ul class="navbar-nav">
        
        <li class="nav-item">
                    <a href="finallReg.php" class="nav-link"style="  color:rgba(121, 157, 138, 0.722); font-size: 17px; font-weight: bold;" >About us</a>
                  </li> 
                  <li class="nav-item">
                    <a  style=" color:rgba(121, 157, 138, 0.722); font-size: 17px; font-weight: bold;" href="FinalHome.php" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="finallReg.php" class="nav-link"style="  color:rgba(121, 157, 138, 0.722); font-size: 17px; font-weight: bold;" >Register</a>
                  </li>  
            </ul>
        
    </div>
</nav>
<div>
        <h1 style="background-image: url(./img/Res11.avif); width: 100%; height: 400px;"> 
        </h1>
    </div>
    



   
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
        echo '<script>
        function myFunction() {
            // Code for your function goes here
            alert("Login Successful!!");
            
        }
        myFunction(); // Calling the function
    </script>';
    header("Location: Fprivacy.php");
       
        exit();
    } else {
        // Login failed
        echo '<script>
        function myFunction() {
            // Code for your function goes here
            alert("Invalid email or password!!");
            
        }
        myFunction(); // Calling the function
    </script>';
       
    }
    $conn->close();
}

?>
<center>
<div class="center">
    <main class="py-5">
        <div class="container">
           
                <form name="myForm"  onsubmit="return validateForm()" method="post" style="width: 500px; height: 280px;" >
               
                    <br>
                    <br><br>
                    
                    <div class="input-group mb-3">
        <span for="email"class="input-group-text" style="color:rgba(121, 157, 138, 0.722);">Email</span>
        <input type="text" id="email" name="email" class="form-control" required>
    </div>
    <div class="input-group mb-3">
        <span for="password"class="input-group-text" style="color:rgba(121, 157, 138, 0.722);">Password</span>
        <input type="password" id="password" name="password" class="form-control" required>
    </div>
                   <div class="container3">
                    <div class="left-content">
                       <button  style=" color: rgba(121, 157, 138, 0.722); border-radius: 10px; border-color:rgba(121, 157, 138, 0.722); padding: 5px; height: 40px;" ><i class="fas fa-user me-2"></i>Login</button>
</div>
                </div>
               
            </form></div>
        </div>  
      </main>
    </div>
   

    </center>

</body>
</html>