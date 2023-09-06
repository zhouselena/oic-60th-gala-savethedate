<?php
// Validate and sanitize the input
if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $email = $_POST['email'];

    // Append the email to a text file (you can use a database instead)
    $file = 'subscribers.txt';
    file_put_contents($file, $email . PHP_EOL, FILE_APPEND);

    // Optionally, you can provide a success message
    echo "Thank you for subscribing!";
} else {
    // Handle validation errors or display an error message
    echo "Invalid email address. Please try again.";
}
?>