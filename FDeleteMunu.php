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

    // Retrieve the row ID from the POST data
if (isset($_POST['ID'])) {
    $rowId = $_POST['ID'];

    // Delete the row from the table
    $sql = "DELETE FROM your_table_name WHERE ID = $rowId";
    if ($conn->query($sql) === TRUE) {
        echo "Row deleted successfully!";
    } else {
        echo "Error deleting row: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
   


