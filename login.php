<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST["email"]);
    $password = $_POST["password"];

    $query = "SELECT * FROM festival WHERE email='$email'";
    $result = $conn->query($query);

    if (!$result) {
        die("Query failed: " . $conn->error); // Debugging line
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            $_SESSION["festival"] = $row["name"];
            echo "Login successful";
        } else {
            echo "Invalid password";
        }
    } else {
        echo "No user found with this email";
    }
}
?>