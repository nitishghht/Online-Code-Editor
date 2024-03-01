<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the email is set and not empty
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $to = 'rajbharnit@gmail.com'; // Destination email address
        $subject = 'New Email Submission'; // Email subject

        // Get the email from the form
        $email = $_POST['email'];

        // Compose the email message
        $message = "New email submitted: $email";

        // Set headers
        $headers = "From: webmaster@example.com"; // Replace with your email

        // Send email
        if (mail($to, $subject, $message, $headers)) {
            echo 'Email sent successfully!';
        } else {
            echo 'There was a problem sending the email.';
        }
    } else {
        echo 'Email is missing or empty.';
    }
} else {
    echo 'Invalid request.';
}
?>
