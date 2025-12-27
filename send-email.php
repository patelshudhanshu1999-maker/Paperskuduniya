<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = strip_tags(trim($_POST["volunteer-name"]));
    $email = filter_var(trim($_POST["volunteer-email"]), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST["volunteer-subject"]));
    $message = strip_tags(trim($_POST["volunteer-message"]));

    // Email configuration
    $to = "info@paperskiduniya.com"; // Replace with your actual email
    $email_subject = "New Contributor Application: $subject";

    // Boundary for multipart email
    $boundary = md5(time());

    // Headers
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"" . "\r\n";

    // Email Body
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $body .= "Name: $name\r\n";
    $body .= "Email: $email\r\n";
    $body .= "Subject: $subject\r\n\r\n";
    $body .= "Message:\r\n$message\r\n\r\n";

    // Attachment processing
    if (isset($_FILES['cv']) && $_FILES['cv']['error'] == UPLOAD_ERR_OK) {
        $file_tmp_name = $_FILES['cv']['tmp_name'];
        $file_name = $_FILES['cv']['name'];
        $file_size = $_FILES['cv']['size'];
        $file_type = $_FILES['cv']['type'];

        // Read file content and encode
        $handle = fopen($file_tmp_name, "r");
        $content = fread($handle, $file_size);
        fclose($handle);
        $encoded_content = chunk_split(base64_encode($content));

        $body .= "--$boundary\r\n";
        $body .= "Content-Type: $file_type; name=\"$file_name\"\r\n";
        $body .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= "$encoded_content\r\n";
    }

    $body .= "--$boundary--";

    // Send email
    if (mail($to, $email_subject, $body, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Thank you! Your application has been sent.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Sorry, there was an error sending your message. Please try again later.']);
    }
} else {
    // If not POST, redirect to home
    header("Location: index.php");
    exit;
}
?>