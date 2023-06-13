<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>REGISTER</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
   
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
   
    
    
</head>
<body>
    <link rel="stylesheet" href="finalproject.css">
    <nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-light" >
    <div class="container-fluid">
        <h1  class="navbar-brand" style="color: rgba(121, 157, 138, 0.722);"><img class="conten" src="./img/Res11.avif" alt="" style="width: 40px; height: 40px; border-radius: 1cm;"> Camellia  </h1>
        <ul class="navbar-nav">
        
                <li class="nav-item">
                    <a href="Fprivacy.php" class="nav-link">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a  style="color:rgba(121, 157, 138, 0.722); font-size: 17px; font-weight: bold;" href="FinalHome.php" class="nav-link">About us</a>
                  </li>
                  <li class="nav-item">
                    <a href="./FinalHome.php" class="nav-link"style="color:rgba(121, 157, 138, 0.722);font-size: 17px; font-weight: bold;" >Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="Finallogin.php" class="nav-link" style="color:rgba(121, 157, 138, 0.722); font-size: 17px; font-weight: bold;" >Login</a>
                  </li>
                       
            </ul>
        
    </div>
</nav>
<div>
        <h1 style="background-image: url(./img/Res11.avif); width: 100%; height: 400px;"> 
            <div style="color: aliceblue; text-align: center; text-size-adjust: 20px;font-style: italic; font-weight: lighter; font-size: 25px; font-family: 'Times New Roman', Times, serif">
                <p>Feed Your Heart Dear!</p> 
            <p>Explore The world of Novel</p>
            <p>Romance</p>
            <p> Mystery</p>
            <p> Action</p>
            <p>Adventure</p>
            <p>Comedy</p>
            </div>
        </h1>
    </div>
<br>

    
    
   
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



     

    <br>
    <br>
   <center>
    <div class="center">
    <main class="py-5">
    
        <div class="container">
       
                <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" name="myForm" style="height: 440px; width: 500px;">
               
                    <br>
                    <br>
                    <br>
                    <br>
                    
                    <div class="input-group mb-3">
        <span for="name"class="input-group-text" style="color:rgba(121, 157, 138, 0.722);">User Name</span>
        <input type="text" id="name" name="name" class="form-control" required>
    </div>
    <div class="input-group mb-3">
        <span for="email"class="input-group-text" style="color:rgba(121, 157, 138, 0.722);">Email</span>
        <input type="text" id="email" name="email" class="form-control" required>
    </div>
    <div class="input-group mb-3">
        <span for="password"class="input-group-text" style="color:rgba(121, 157, 138, 0.722);">Password</span>
        <input type="password" id="password" name="password" class="form-control" required>
    </div>
    <div class="input-group mb-3">
        <span for="conpass"class="input-group-text" style="color:rgba(121, 157, 138, 0.722);">Confirm Password</span>
        <input type="text" id="conpass" name="conpass" class="form-control" required>
    </div>
                   
    <div>
                       <input  style="color:rgba(121, 157, 138, 0.722); border-radius: 10px; border-color:rgba(121, 157, 138, 0.722); padding: 10px;" type="submit" value="Register"></input>
                   </div>
                   
                </form>
                
            </div>
            
        </div> 
      </main>
    </div>
    </center>

     
    
</body>

</html>