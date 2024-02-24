<?php
// Database connection parameters
$servername = "localhost"; // XAMPP server
$username = "root"; // Default username for XAMPP MySQL
$password = ""; // Default password for XAMPP MySQL
// $database = "drugsissued"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "connection failed";
}
echo "Connection established: ";

// // SQL query to fetch data from the table
// $sql = "SELECT id,date,Drugs_Name FROM drugsissued"; // Change this to your table name
// $result = $conn->query($sql);

// // Check if there are any rows in the result
// if ($result->num_rows > 0) {
//     // Output data of each row
//     echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
//     while($row = $result->fetch_assoc()) {
//         echo "<tr><td>".$row["id"]."</td><td>".$row["date"]."</td><td>".$row["Drugs_Name"]."</td></tr>";
//     }
//     echo "</table>";
// } else {
//     echo "0 results";
// }

// // Close connection
// $conn->close();
?>
