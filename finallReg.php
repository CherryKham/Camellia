<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
   
    <style>
         
    
        p{
            padding-top: 80px;
        }
        a{
            background-color: white; display: flex; justify-content: center;
            font-family: Arial, Helvetica;
    
        }
       .center {
            display: flex;
            justify-content: center;
            align-items: center;
            top: 20px;
            
        }
       
    </style>
    </style>
    <link rel="stylesheet" href="icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    
    
</head>
<body>
    <link rel="stylesheet" href="finalproject.css">
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
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $conpass = $_POST["conpass"];
    

    if (empty($password)) {
        $error = "Password is required";
    } elseif (strlen($password) < 8) {
        $error = "Password must be at least 8 characters long";
    }

    if (empty($conpass)) {
        $error = "Confirming Password is required";
    } elseif ($password !== $conpass) {
        $error = "Confirm your password again";
    }

    // Insert data into the database if no errors
    if (!isset($error)) {
        $sql = "INSERT INTO UserTable (name, email, password, conpass) VALUES ('$name', '$email', '$password', '$conpass')";
        if ($conn->query($sql) === TRUE) {
            echo '<script>
                function myFunction() {
                    // Code for your function goes here
                    alert("Registration Successful!!");
                    
                }
                myFunction(); // Calling the function
            </script>';
            header("Location: Fprivacy.php");
        exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $error;
    }
}
    

// Close the database connection
$conn->close();
?>

</center>

     

    <br>
    <br>
    
    <div class="center">
    <main class="py-5">
        <div class="container">
            <div style="height:400px; width: 400px; border:20px; border-radius: 1cm; border-color: rgb(75, 7, 138);"><h5>Register</h5>
                <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" name="myForm">
                    <br>
                    
                    
                    <div class="mb-2">
                    <label for="name" > <i class="fas fa-user me-2 "></i>UserName</label>
                    <input type="text" id="name" name="name" placeholder="Define UserName" class="form-control" required>
                   </div>
                   <div class="mb-2">
                    <label for="email" > <i class="fas fa-envelope me-2 "></i>Email</label>
                    <input type="text" id="email" name="email" placeholder="Enter your email" class="form-control" required>

                   </div>
                   <div class="mb-2">
                    <label for="password"><i class="fas fa-key me-2">
                    </i>Password</label>
                    <input type="password" id="password" name="password" placeholder="Please define your password(at least 8 characters)" class="form-control" required>
                   </div>
                   <div class="mb-2">
                <label for="conpass"> <i class="fas fa-check me-3"></i>Confirm Password</label>
                <input type="password" id="conpass" name="conpass" placeholder="Please confirm your password" class="form-control" required>
                   </div>
                   
                   <div>
                       <input  style=" color: rgb(75, 7, 138); ; border-radius: 10px; border-color:rgb(75, 7, 138); padding: 10px;" type="submit" value="Register" required></input>
                   </div>
                  
                </form></div>
        </div> 
      </main>
    </div>
 

     
    
</body>

</html>