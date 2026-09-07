<?php
declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.html');
    exit;
}

// Basic honeypot spam check.
if (!empty($_POST['website'] ?? '')) {
    header('Location: contact.html?sent=1');
    exit;
}

$name = trim((string)($_POST['name'] ?? ''));
$company = trim((string)($_POST['company'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$type = trim((string)($_POST['inquiry_type'] ?? ''));
$message = trim((string)($_POST['message'] ?? ''));

if ($name === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: contact.html?sent=0');
    exit;
}

$recipients = [
    'transport' => 'jhuytransport@gmail.com',
    'fruit' => 'juicylandmktg@yahoo.com',
];

$labels = [
    'transport' => 'JHUY Transport',
    'fruit' => 'JHUY Fruit',
];

if (!isset($recipients[$type])) {
    header('Location: contact.html?sent=0');
    exit;
}

// Prevent header injection.
$safeName = str_replace(["\r", "\n"], ' ', $name);
$safeEmail = str_replace(["\r", "\n"], '', $email);
$safeCompany = str_replace(["\r", "\n"], ' ', $company);

$recipient = $recipients[$type];
$label = $labels[$type];
$subject = '[JHUY Website] ' . $label . ' inquiry from ' . $safeName;
$body = "A new inquiry was submitted through jhuy.ph.\n\n";
$body .= "Inquiry for: {$label}\n";
$body .= "Name: {$safeName}\n";
$body .= "Company: " . ($safeCompany !== '' ? $safeCompany : 'Not provided') . "\n";
$body .= "Email: {$safeEmail}\n\n";
$body .= "Message:\n{$message}\n";

$headers = [
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'From: JHUY Website <website@jhuy.ph>',
    'Reply-To: ' . $safeEmail,
    'X-Mailer: PHP/' . phpversion(),
];

$sent = @mail($recipient, $subject, $body, implode("\r\n", $headers));
header('Location: contact.html?sent=' . ($sent ? '1' : '0') . '&type=' . urlencode($type));
exit;
