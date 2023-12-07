<?php
session_start(); // Start the session

function parseEnvFile($filePath) {
    $env = [];

    if (file_exists($filePath)) {
        $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (strpos($line, '=') !== false) {
                list($key, $value) = explode('=', $line, 2);
                $env[trim($key)] = trim($value);
            }
        }
    }

    return $env;
}

// Define the route to your main content
$mainContentRoute = '/pages/start/page.php';

$envFilePath = '.env';
$envVariables = parseEnvFile($envFilePath);

// Access your environment variables like this:
$_SESSION['TELEGRAM_BOT_KEY'] = $envVariables['TELEGRAM_BOT_KEY'];
$_SESSION['GOOGLE_SITE_KEY'] = $envVariables['GOOGLE_SITE_KEY'];
$_SESSION['GOOGLE_SECRET_KEY'] = $envVariables['GOOGLE_SECRET_KEY'];
$_SESSION['CHAT_ID'] = $envVariables['CHAT_ID'];

// Check if the session variable for reCAPTCHA is set and valid
if (isset($_SESSION['recaptcha_validated']) && $_SESSION['recaptcha_validated'] === true) {
    // If the user has already passed the reCAPTCHA, direct them to the main content
    header("Location: $mainContentRoute");
    exit;
} else {
    // If the session variable isn't set, direct them to the reCAPTCHA page
    header("Location: /captcha/page.php");
    exit;
}

?>
