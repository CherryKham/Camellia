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
    <script type="text/javascript" src="F.js"></script>

   <link rel="stylesheet" href="finalproject.css">
   <link rel="stylesheet" href="icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

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
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-light" >
        <div class="container-fluid">
            <h1  class="navbar-brand" style=" color:rgba(121, 157, 138, 0.722);"><img class="conten" src="./img/Res11.avif" alt="" style="width: 40px; height: 40px; border-radius: 1cm;"> Camellia  </h1>
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
            
            <li><a href="#" class="dropdown-item">Logout</a></li>
        
        </ul>
 
      </li>
</ul>
            
        </div>
</nav>
<!---Form Section-->
<br>
<br>
<div class="center">
    <main class="py-5">
        <div class="container">
           
                <form enctype="multipart/form-data" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" name="myForm" style="border-radius: 0.3cm; width: 580px; height: 500px;">
                <center>
                    <br>
               <br>
                    
                    <div style="height:400px; width: 400px; border:20px; border-radius: 1cm; color: white;"><h5>Add New Menu</h5>
                    <br>
                    
                    <div class="input-group mb-3">
                    <input for="image" type="file" id="image" name="image">

    </div>

    <div class="input-group mb-3">
        <span for="fname"class="input-group-text" style="color:rgba(121, 157, 138, 0.722);">Name</span>
        <input type="text" id="fname" name="fname" class="form-control" required>
    </div>
    <div class="input-group mb-3">
    <span for="ftype" class="input-group-text" style="color:rgba(121, 157, 138, 0.722);">Type</span>
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
        <span for="fprice" class="input-group-text" style="color:rgba(121, 157, 138, 0.722);">Price</span>
        <input name="fprice" id="fprice" type="text" class="form-control" required>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" for="fdes"style="color:rgba(121, 157, 138, 0.722);" >Description</span>
        <textarea  name="fdes" id="fdes" type="text"  class="form-control" required>
        </textarea>
    </div>
  
    
                
                   <div>
                       <input  style="color:rgba(121, 157, 138, 0.722); border-radius: 10px; border-color:rgba(121, 157, 138, 0.722); padding: 10px;" type="submit" value="add"></input>
                   </div>
                  </center>
                  
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


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the data from the form
    $fname = $_POST["fname"];
    $ftype = $_POST["ftype"];
    $fprice = $_POST["fprice"];
    $fdes = $_POST["fdes"];
    
    // Handle the uploaded image file
    $image = $_FILES["image"]["name"];
    $image_tmp = $_FILES["image"]["tmp_name"];
    move_uploaded_file($image_tmp, "uploads/" . $image);

    // Prepare and execute the SQL query
    $stmt = $conn->prepare("INSERT INTO FoodMenu (fname, ftype, fprice, fdes, image) VALUES (:fname, :ftype, :fprice, :fdes, :image)");
    $stmt->conn(":fname", $fname);
    $stmt->bindParam(":ftype", $ftype);
    $stmt->bindParam(":price", $fprice);
    $stmt->bindParam(":fdes", $fdes);
    $stmt->bindParam(":image", $image);
    $stmt->execute();

    // Close the database connection
    $conn = null;

    // Redirect to a success page or display a success message
    echo "Data uploaded successfully!";
}


?>


</body>
</html>