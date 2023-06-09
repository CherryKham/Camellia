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
    <script type="text/javascript" src="F.js"></script>

   <link rel="stylesheet" href="finalproject.css">
   <link rel="stylesheet" href="icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

    <style>
        body{
    background-color: rgb(221, 204, 238);
}
.center {
            display: flex;
            justify-content: center;
            align-items: center;
            top: 20px;
            
        }
    </style>
</head>
<body>
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
<br>
<div class="center">
    <main class="py-5">
        <div class="container">
           
                <form enctype="multipart/form-data" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" name="myForm">

                    <br>
               
                    
                    <div style="height:400px; width: 400px; border:20px; border-radius: 1cm;color: rgb(75, 7, 138);"><h5>Add New Menu</h5>
                    <br>
                    
                    <div class="input-group mb-3">
                    <input for="image" type="file" name="image">

    </div>

    <div class="input-group mb-3">
        <span for="fname"class="input-group-text">Name</span>
        <input type="text" id="fname" name="fname" class="form-control" required>
    </div>
    <div class="input-group mb-3">
    <span for="ftype" class="input-group-text">Type</span>
        <select id="ftype" name="ftype" class="form-select" required>
            <option>Soft Drink</option>
            <option>Coffee</option>
            <option>Noodle</option>
            <option>Barbecue</option>
            <option>Beer</option>
            <option>Cooktail</option>
            <option>Cake</option>
            <option>Rice</option>
            <option>Chicken Nuggat</option>
        
        </select>

        </div>
    <div class="input-group mb-3">
        <span for="fprice" class="input-group-text">Price</span>
        <input name="fprice" id="fprice" type="text" class="form-control" required>
    </div>
  
    <div class="input-group mb-3">
        <span class="input-group-text" for="fdes" >Description</span>
        <input  name="fdes" id="fdes" type="text"  class="form-control" required>
    </div>
                
                   <div>
                       <input  style=" color: rgb(75, 7, 138); ; border-radius: 10px; border-color:rgb(75, 7, 138); padding: 10px;" type="submit" value="add"></input>
                   </div>
                  
                  
                </form></div>
        </div> 
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
}
else{
    echo "Successful";

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $targetDirectory = "image"; // Directory where the uploaded image will be stored
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]); // Path of the uploaded image file
    
    $uploadOk = true;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // Get the file extension
    
    // Check if the image file is a valid image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo "Error: File is not an image.";
        $uploadOk = false;
    }
    
    // Check if the file already exists
    if (file_exists($targetFile)) {
        echo "Error: File already exists.";
        $uploadOk = false;
    }
    
    // Check file size (you can set your own limit here)
    if ($_FILES["image"]["size"] > 500000) {
        echo "Error: File size exceeds the limit.";
        $uploadOk = false;


    }
// Check if the file already exists
if (file_exists($targetFile)) {
    echo "Error: File already exists.";
    $uploadOk = false;
}

// Check file size (you can set your own limit here)
if ($_FILES["image"]["size"] > 500000) {
    echo "Error: File size exceeds the limit.";
    $uploadOk = false;
}

// Allow only specific image file formats (you can modify/add more formats)
$allowedFormats = ["jpg", "jpeg", "png", "gif"];
if (!in_array($imageFileType, $allowedFormats)) {
    echo "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
    $uploadOk = false;
}


    
    // Insert data into the database if no errors
    if ($uploadOk) {
        if (move_uploaded_file($_FILES["image"]["FinalWelcome.php"], $targetFile)) {
            $imagePath = $targetFile;
           
            // Retrieve form data
     $fname = $_POST["fname"];
     $ftype = $_POST["ftype"];
     $fprice = $_POST["fprice"];
     $fdes = $_POST["fdes"];
     
   
    if (empty($fname)) {
        $error = "Name is required";
    } 

    if (empty($fprice)) {
        $error = "Price is required";
    } 


        $sql = "INSERT INTO FoodMenu (image_path,fname,ftype,fprice,fdes) VALUES ('$imagePath','$fname', '$ftype', '$fprice', '$fdes')";
        if ($conn->query($sql) === true) {
            echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded and saved to the database.";
        } else {
            echo "Error: There was an error uploading your file.";
        }
    } else {
        echo "Error: There was an error uploading your file.";
    }
}
}

// Close the database connection
$conn->close();
?>


</body>
</html>