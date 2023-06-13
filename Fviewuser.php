<?php

//Connecting to Database -->

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




$sql = "SELECT * FROM UserTable";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    echo "<table style='border-collapse: collapse;'>";
    echo "<tr><th style='border: 1px solid black; padding: 8px;'>User Name</th><th style='border: 1px solid black; padding: 8px;'>Email Address</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $row["name"] . "</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $row["email"] . "</td>";
        
       
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close the database connection
mysqli_close($conn);
    
   