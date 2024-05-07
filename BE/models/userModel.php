<?php

function getPlateIDs($pdo){
    $query = "SELECT ID FROM PLATTERS WHERE isActive='1'";
    $stmt = $pdo->query($query);
    $IDS = $stmt->fetchALL(PDO::FETCH_COLUMN);
    return $IDS;


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