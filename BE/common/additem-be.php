<?php
// Database credentials
$host = 'localhost'; // or your host
$dbname = 'web-final';
$username = 'root'; // your database username
$password = ''; // your database password

try {
    // Establish a connection with the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SQL statement
    $stmt = $pdo->prepare("INSERT INTO table_platters (ID, PLATTER, DESCRIPTION, IS_ACTIVE) VALUES (:id, :platter, :description, :isActive)");

    // Bind parameters
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':platter', $platter);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':isActive', $isActive);

    // Retrieve data from the form
    $id = $_POST['id'];
    $platter = $_POST['platter'];
    $description = $_POST['description'];
    $isActive = $_POST['isActive'];

    // Execute the statement
    $stmt->execute();

    // Redirect or inform the user of success
    echo "New record created successfully";
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

// Close connection
$pdo = null;
?>
