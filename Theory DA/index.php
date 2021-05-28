<?php
ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","587");
$email = $_POST['remail'];
$subject = $_POST['subject'];
$email_message = $_POST['content'];
$attachment = $_POST['attachment'];
$file_type = strtolower(pathinfo($attachment, PATHINFO_EXTENSION));
$file_name = strtolower(pathinfo($attachment, PATHINFO_FILENAME));
$from = 'grihitbudhiraja2103@gmail.com';

$file = fopen($attachment, 'rb');
$data = fread($file, filesize($attachment));
fclose($file);

$data = chunk_split(base64_encode($data));

$headers = "From: " . $from;
$semi_rand = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
$headers .= "\nMIME-Version: 1.0\n" .
    "Content-Type: multipart/mixed;\n" .
    " boundary=\"{$mime_boundary}\"";

$email_message .= "--{$mime_boundary}\n" .
    "Content-Type: {$file_type};\n" .
    " name=\"{$file_name}\"\n" .
    "Content-Disposition: attachment;\n" .
    " filename=\"{$file_name}\"\n" .
    "Content-Transfer-Encoding: base64\n\n" .
    $data .= "\n\n" .
    "--{$mime_boundary}--\n";

$sent = mail($email, $subject, $email_message, $headers);
if ($sent) {
    echo "Message sent to" . $email;
} else {
    echo "Email not sent. Try again";
}
