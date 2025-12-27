<?php
// Set your email address
$to = "patel.saurabh1997@gmail.com";

// Sanitize input
$name = htmlspecialchars($_POST["volunteer_name"]);
$email = htmlspecialchars($_POST["volunteer_email"]);
$subject = htmlspecialchars($_POST["volunteer_subject"]);
$message = htmlspecialchars($_POST["volunteer_message"]);

$cv = $_FILES["volunteer_cv"];

// Check for file upload success
if ($cv["error"] === UPLOAD_ERR_OK) {
    $uploadDir = "uploads/";
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $filename = basename($cv["name"]);
    $targetFile = $uploadDir . time() . "_" . $filename;

    if (move_uploaded_file($cv["tmp_name"], $targetFile)) {
        $fileLink = "https://" . $_SERVER['HTTP_HOST'] . "/" . $targetFile;
    } else {
        echo "Error uploading file.";
        exit;
    }
} else {
    echo "CV file is required.";
    exit;
}

// Email content
$email_subject = "New Volunteer Submission: $subject";
$email_body = "You have received a new volunteer form submission:\n\n";
$email_body .= "Name: $name\n";
$email_body .= "Email: $email\n";
$email_body .= "Subject: $subject\n";
$email_body .= "Message: $message\n";
$email_body .= "CVss: $fileLink\n";

// Email headers
$headers = "From: $email\r\nReply-To: $email\r\n";

// Send email
if (mail($to, $email_subject, $email_body, $headers)) {
    echo "Success! Your form was submitted.";
} else {
    echo "Failed to send email.";
}
?>
