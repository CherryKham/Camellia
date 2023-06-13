<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./F.js">
</head>
<body>
    <button id="viewuser">CLick</button>

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
echo '<script>
function myFunction() {
    // Code for your function goes here
    alert(" Successful!!");
    
}
myFunction(); // Calling the function
</script>';
}

?>



<?php
// Perform necessary database connections and setup

// Retrieve data from the table
$sql = "SELECT * FROM UserTable";
$result = mysqli_query($conn, $sql);

$data = array();

if (mysqli_num_rows($result) > 0) {
    // Loop through each row and add to the data array
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
} else {
    $data = "0 results";
}

// Close the database connection
mysqli_close($conn);

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>





</body>

</html>