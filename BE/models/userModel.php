<?php

function getPlateIDs($pdo){
    $query = "SELECT ID FROM PLATTERS WHERE isActive='1'";
    $stmt = $pdo->query($query);
    $IDS = $stmt->fetchALL(PDO::FETCH_COLUMN);
    return $IDS;


}

function getPlatedescription($pdo){
    $query = "SELECT DESCRIPTION FROM PLATTERS WHERE isActive='1'";
    $stmt = $pdo->query($query);
    $des = $stmt->fetchAll(PDO::FETCH_COLUMN);
    return $des;
}



function getPlateNames($pdo){
    $query = "SELECT platter FROM PLATTERS WHERE isActive='1'";
    $stmt = $pdo->query($query);
    $platters = $stmt->fetchALL(PDO::FETCH_COLUMN);
    return $platters;

}

function getPlates($pdo){
    $query = "SELECT ID, PLATTER, `DESCRIPTION`, isActive FROM PLATTERS";
    $stmt = $pdo->query($query);
    $plates = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $plates;

}






// START LOGIN BACKEND
function loginUser($email, $pass, $pdo) {
    try {
        $query = "SELECT Email, pass FROM users WHERE Email = ? AND pass = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$email, $pass]);

        if ($stmt->rowCount() > 0) {
            return getUserID($email, $pdo);
        } else {
            return false;
        }
    } catch(PDOException $e) {
        throw new Exception("Query failed: ".$e->getMessage());
    }
}

function getUserID($email, $pdo) {
    $query = "SELECT ID FROM users WHERE Email = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email]);
    return $stmt->fetch(PDO::FETCH_COLUMN);
}

function isAccountExists($email, $pdo) {
    $query = "SELECT Email FROM users WHERE Email = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email]);
    return $stmt->rowCount() > 0;
}

// END LOGIN BACKEND



// START SIGNUP BACKEND


function createUser($pdo, $fullName, $dob, $sex, $displayName, $email, $pass) {
    $query = "INSERT INTO users (fullName, dob, sex, displayName, email, pass) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$fullName, $dob, $sex, $displayName, $email, $pass]);
    return $pdo->lastInsertId();
}

// END SIGNUP BACKEND



function activateDeactivate($plateID, $pdo){
    $query = "UPDATE PLATTERS SET isActive= (isActive +1)%2 WHERE ID='$plateID'";
    $pdo->query($query);


}

function deletePlatter($plateID, $pdo){
    $query = "DELETE FROM PLATTERS WHERE ID=$plateID";
    $pdo->query($query);

}

function addPlatter($ID, $platter, $description, $status, $pdo){
    $query = "INSERT INTO PLATTERS VALUES($ID, '$platter', '$description', $status)";
    $pdo->query($query);
    


}

// START CONTACT BACKEND


function insert_into_DB($firstName, $lastName, $email, $subject, $message) {
    require_once ('../common/dbinc.php');
    $pdo = getConnection(); // Get the PDO connection
    
    try {
        $stmt = $pdo->prepare("INSERT INTO table_contacts (first_name, last_name, email, subject, body) VALUES (:firstName, :lastName, :email, :subject, :message)");
        $stmt->bindParam(':firstName', $firstName);
        $stmt->bindParam(':lastName', $lastName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);
        $stmt->execute();
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}



