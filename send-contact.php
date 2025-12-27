<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $first_name = strip_tags(trim($_POST["first-name"]));
    $last_name = strip_tags(trim($_POST["last-name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $mobno = strip_tags(trim($_POST["mobno"]));
    $subject = strip_tags(trim($_POST["subject"]));
    $message = strip_tags(trim($_POST["message"]));

    $name = $first_name . ' ' . $last_name;

    // Email configuration
    $to = "info@paperskiduniya.com"; // Replace with your actual email
    $email_subject = "New Contact Inquiry: $subject";

    // Headers
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

    // Email Body
    $body = "<h2>New Contact Message</h2>";
    $body .= "<p><strong>Name:</strong> $name</p>";
    $body .= "<p><strong>Email:</strong> $email</p>";
    $body .= "<p><strong>Mobile No:</strong> $mobno</p>";
    $body .= "<p><strong>Subject:</strong> $subject</p>";
    $body .= "<p><strong>Message:</strong><br>$message</p>";

    // Send email
    if (mail($to, $email_subject, $body, $headers)) {
         echo "<script>alert('Thank you! Your message has been sent.'); window.location.href='contact-us.php';</script>";
    } else {
         echo "<script>alert('Sorry, there was an error sending your message. Please try again later.'); window.location.href='contact-us.php';</script>";
    }
} else {
    // If not POST, redirect to contact page
    header("Location: contact-us.php");
    exit;
}
?>
