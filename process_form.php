<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "rajraghav922@gmail.com"; // Replace with your client's email address
    $subject = "New Customer Query from Website";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Query sent successfully!";
    } else {
        echo "Failed to send query.";
    }
}
?>
