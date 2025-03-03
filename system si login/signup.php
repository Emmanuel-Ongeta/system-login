<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newUsername = $_POST["newUsername"];
    $newPassword = password_hash($_POST["newPassword"], PASSWORD_DEFAULT);

    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "manuelo";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $newUsername, $newPassword);
    
    if ($stmt->execute()) {
        echo "<p>Sign up successful. You can now <a href='index.php'>log in</a>.</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
