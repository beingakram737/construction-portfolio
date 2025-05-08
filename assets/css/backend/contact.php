<?php
// contact.php - Contact form se data save karne ke liye

require 'db_config.php'; // Database config include karo

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form ke input values
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // SQL Insert Query
    $sql = "INSERT INTO contact_messages (name, email, subject, message, submitted_at)
            VALUES (:name, :email, :subject, :message, NOW())";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':name'    => $name,
        ':email'   => $email,
        ':subject' => $subject,
        ':message' => $message
    ]);

    echo "Message submitted successfully!";
} else {
    echo "Invalid request.";
}
?>
