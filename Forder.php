<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Oredering form</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="finalproject.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
      .center {
            display: flex;
            justify-content: center;
            align-items: center;
            top: 20px;
            
        }
        body{
            background-color: rgb(223, 241, 231);
}
form{
    background-color: rgba(121, 157, 138, 0.722);
    border-radius: 10px;
    width: 590px;
    height: 840px;
}
#form{
    width: 450px;
   
    
}



  
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-light" >
        <div class="container-fluid">
            <h1  class="navbar-brand" style="color: rgba(121, 157, 138, 0.722);"><img class="content" src="./img/Res11.avif" alt="" style="width: 40px; height: 40px; border-radius: 1cm;"> Camellia  </h1>
            <ul class="navbar-nav">
        
                
                    <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fas fa-cog" style="size: 90px;"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="./Fadmin.php" class="dropdown-item">Admin Dashboard</a>

                        </li>
                        <li><a href="./FinalHome.php" class="dropdown-item">Home</a></li>
                        <li><a href="#" class="dropdown-item">Users Catalog</a></li>
                        <li><a href="#" class="dropdown-item">Menu Catalog</a></li>
                        <li><a href="#" class="dropdown-item">Delete User</a></li>
                        
                        <li><a href="./flogout.php" class="dropdown-item">Logout</a></li>
                    
                    </ul>
             
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
    
<!--Form Section-->
    <br>
<br>
<center>
<div class="center">
    <main class="py-5">
        <div class="container">

           
                <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" name="myForm" onsubmit="return validateForm()">
                <br>
                <h3 style="color: white;">Ordering</h3>
                <br>
                
                <div class="input-group mb-3" id="form">
        <label for="Item"class="input-group-text" style="color:rgba(121, 157, 138, 0.722);">Item</label>
        <input type="text" id="Item" name="Item" class="form-control" required>
    </div>
    <div class="input-group mb-3" id="form">
        <label for="Quantity"class="input-group-text" style="color:rgba(121, 157, 138, 0.722);">Quantity</label>
        <input type="number" id="Quantity" name="Quantity" class="form-control" required>
    </div>
                <div class="input-group mb-3" id="form">
        <label for="Name"class="input-group-text" style="color:rgba(121, 157, 138, 0.722);">Name</label>
        <input type="text" id="Name" name="Name" class="form-control" required>
    </div>
    
    <div class="input-group mb-3" id="form">
        <label for="Contactph" class="input-group-text" style="color:rgba(121, 157, 138, 0.722);">contact Number</label>
        <input name="Contactph" id="Contactph" type="int" class="form-control" required>
    </div>
    <div class="input-group mb-3" id="form">
    <label for="Email" class="input-group-text" style="color:rgba(121, 157, 138, 0.722);">Email</label>
    <input type="text" id="Email" name="Email" class="form-control" required>
</div>
<div class="input-group mb-3" id="form">
   
    <label  for="Age" class="input-group-text" style="color:rgba(121, 157, 138, 0.722);">Age</label>
    <input  name="Age" id="Age" type="int" class="form-control" required>
    
</div>

     <div class="input-group mb-3" id="form">
    <label class="input-group-text" for="Address" style="color:rgba(121, 157, 138, 0.722);">Address</label>
    <textarea name="Address" id="Address" type="text" class="form-control" required></textarea>
</div>
<div class="input-group mb-3" id="form">
    <label for="DeliDate" class="input-group-text" style="color:rgba(121, 157, 138, 0.722);">Delivery Date</label>
    <input name="DeliDate" id="DeliDate" type="date" class="form-control" required>
</div>
<div class="input-group mb-3" id="form">
    <label for="DeliTime" class="input-group-text" style="color:rgba(121, 157, 138, 0.722);">Delivery Time</label>
    <input name="DeliTime" id="DeliTime" type="time" class="form-control" required>
</div>

        <div class="input-group mb-3" id="form">
    <label class="input-group-text" for="Note" style="color:rgba(121, 157, 138, 0.722);">Note</label>
    <textarea name="Note" id="Note" type="text" class="form-control" placeholder="Please your Note here...."required></textarea>
</div>
    
                       <input  style="color:rgba(121, 157, 138, 0.722); border-radius: 10px;  padding: 10px;" type="submit" value="ADD"></input>
                 
                  
                  
                </form></div>
       
      </main>
    </div>

    
</form>
                    
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
} else {
    echo 'YES';
}

if (isset($_POST['submit'])) {
    // Retrieve form data
    $Item = $_POST["Item"];
    $Quantity = $_POST["Quantity"];
    $Name = $_POST["Name"];
    $Contactph = $_POST["Contactph"];
    $Email = $_POST["Email"];
    $Age = $_POST["Age"];
    $Address = $_POST["Address"];
    $DeliDate = $_POST["DeliDate"];
    $DeliTime = $_POST["DeliTime"];
    $Note = $_POST["Note"];

    $error = "";

    if (strlen($Contactph) < 11) {
        $error = "Phone Number must be at least 11 characters long";
    } elseif (strlen($Contactph) > 11) {
        $error = "Contact Number cannot be more than 11 characters";
    }

    if (strlen($Note) > 50) {
        $error = "Note cannot be more than 50 characters";
    }

    // Insert data into the database if no errors
    if (empty($error)) {
        $sql = "INSERT INTO OrderForm (Item, Quantity, Name, Contactph, Email, Age, Address, DeliDate, DeliTime, Note) 
        VALUES ('$Item', '$Quantity', '$Name', '$Contactph', '$Email', '$Age', '$Address', '$DeliDate', '$DeliTime', '$Note')";
        
        if ($conn->query($sql) === TRUE) {
            echo '<script>
                 
                 alert("Your Order has been confirmed!!");   
                
               
            </script>';
           
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
        </div>
        </center> 
        
        <script>
            //Validate lowercase of Name
           
        </script>
         <script>
        function validateForm() {
            var input = document.getElementById("text-input").value;
            var regex = /^[a-z]+$/; // Regular expression to match lowercase letters only

            if (input.match(regex)) {
                // Input contains only lowercase letters
                alert("Validation successful!");
            } else {
                // Input contains uppercase letters or other characters
                alert("Please enter lowercase letters only!");
                return false; // Prevent form submission
            }
        }
    </script>
</body>
</html>