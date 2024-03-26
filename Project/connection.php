<?php
$servername = "localhost";
$username = "root";
$password = "";

// Check if the form has been submitted
if($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $gender = $_POST['gender'];

    try {
        $conn = new PDO("mysql:host=$servername;dbname=users", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $state = $conn->prepare("SELECT * FROM accounts where email= $email limit 1");
        echo $state;


        $state->execute();

        // Prepare SQL and bind parameters
        $stmt = $conn->prepare("INSERT INTO accounts (username, email, password, gender)
                                VALUES (:name, :email, :password, :gender)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $pass);
        $stmt->bindParam(':gender', $gender);

        // Execute the statement
        $stmt->execute();

        echo "New records created successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    // Close connection
    $conn = null;
}
?>
