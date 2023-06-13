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
    <CADiUjKwqKtQW=OdUo21bNZAKJVgUmDYGWzX6a9hFt4ZutD5AYg@mail.gmail.com>
}
myFunction(); // Calling the function
</script>';
}




$sql = "SELECT * FROM FoodMenu";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    echo "<table style='border-collapse: collapse;'>";
    echo "<tr><th style='border: 1px solid black; padding: 8px;'>ID</th><th style='border: 1px solid black; padding: 8px;'>Food Name</th><th style='border: 1px solid black; padding: 8px;'>Type</th><th style='border: 1px solid black; padding: 8px;'>Price</th><th style='border: 1px solid black; padding: 8px;'>Description</th><th style='border: 1px solid black; padding: 8px;'>Image</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr '>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $row["ID"] . "</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $row["fname"] . "</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $row["ftype"] . "</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $row["fprice"] . "</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $row["fdes"] . "</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $row["image"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close the database connection
mysqli_close($conn);
    
   