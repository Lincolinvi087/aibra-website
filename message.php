<?php
include "config.php";
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $conn->real_escape_string($_POST['full-name']);
    $email     = $conn->real_escape_string($_POST['email']);
    $message   = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO contact_messages (full_name, email, message)
            VALUES ('$full_name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.html#contact");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>