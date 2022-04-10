<?php

// grab recaptcha library
require_once "recaptchalib.php";

// Replace this with your own email address
$siteOwnersEmail = 'vecrproject@hotmail.com';

// your secret key
$secret = "6LfS4JkeAAAAAJaBUJOKhFXoTF8Qjy5m3UFgM-dz";
 
// empty response
$response = null;
 
// check secret key
$reCaptcha = new ReCaptcha($secret);

$proxy_ports = array(80,81,8080,443,1080,6588,3128);

$blacklist = file('blacklist.txt', FILE_IGNORE_NEW_LINES);
$badworld = file('badwords.txt', FILE_IGNORE_NEW_LINES);

$ip = isset($_SERVER['REMOTE_ADDR']) ? trim($_SERVER['REMOTE_ADDR']) : '';

if($_POST) {

   $name = trim(stripslashes($_POST['contactName']));
   $email = trim(stripslashes($_POST['contactEmail']));
   $subject = trim(stripslashes($_POST['contactSubject']));
   $contact_message = trim(stripslashes($_POST['contactMessage']));
   $IP_ADDRESS = $_SERVER['REMOTE_ADDR'];
   $CAPTCHA = trim(stripslashes($_POST['g-recaptcha-response']));
   $CheckMail = filter_var($email, FILTER_SANITIZE_EMAIL);
   $sentenceDiscordName = explode(" ", $name);
   $sentencecontactMessage = explode(" ", $contact_message);

// if submitted check response
if ($_POST["g-recaptcha-response"]) 
{
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]);
}
else 
{ 
  echo "Something went wrong. Please valid captcha.";
  return;
}



//CODE VERIFICATION
session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&& $_SESSION["vercode1"]==$_POST["captcha"])
{
  //Continue
}
else
{
  echo "Please valid the code above. \r\n";
  return;
}

    // Check Name
	if (!preg_match('/^[a-z0-9&\'\\-_\+]+#*+[0-9]{4}/is', $name)) 
  {
		$error['name'] = "Please enter valid discord name.";
    return;
	}
    // Check Name
	if (strlen($name) < 2) 
  {
		$error['name'] = "Please enter your discord name.";
    return;
	}
	// Check Name
	if (strlen($name) > 20) 
  {
		$error['name'] = "Please enter valid discord name.";
    return;
	}
	// Check Email
	if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) 
  {
		$error['email'] = "Please enter a valid email address.";
    return;
	}
    // Validate email
    if (!filter_var($CheckMail, FILTER_VALIDATE_EMAIL)) 
    {
    $error['email'] = "Please enter a valid email address.";
    return;
    }

	// Check Message
	if (strlen($contact_message) < 15) 
  {
		$error['message'] = "Please enter your message. It should have at least 15 characters.";
    return;
	}
	// Check Message
	if (strlen($contact_message) > 180) 
  {
		$error['message'] = "Please enter your message. It should have max 180 characters.";
    return;
	}
	//CHECK IP ADDRESS
	if (($key = array_search($ip, $blacklist)) !== false) 
  {
    echo 'You are forbidden from accessing this resource!';
    return;
  }
	
	// CHECK BAD WORD FOR DISCORD NAME
    foreach ($sentenceDiscordName as $value) 
	{
	  if (($key = array_search($value, $badworld)) !== false)
      {
         echo 'You have entered a bad word into your discord name!';
         return;
      }
    }
	
	// CHECK BAD WORD FOR contactMessage
    foreach ($sentencecontactMessage as $value) 
	{
	  if (($key = array_search($value, $badworld)) !== false)
      {
         echo 'You have entered a bad word into your message!';
         return;
      }
    }
	
	// Check CAPTCHA
	if (strlen($CAPTCHA) < 2) {
		$error['CAPTCHA'] = "Please valid captcha. \r\n";
    return;
	}

  // Subject
	if ($subject == 'Pay with Amazon Gift Card (FR)' || 
      $subject == 'Request my token' || 
      $subject == 'HWID reset' ||
      $subject == 'Other reason') 
  {
    
  }
  else 
  { 
    echo "Something went wrong. Please try again."; 
    return;
  }

//PROXY CHECKER
foreach($proxy_ports as $test_port) 
{
		if(@fsockopen($_SERVER['REMOTE_ADDR'], $test_port, $errno, $errstr, 1)) 
    {
			echo "Please disable your proxy connection! \r\n";
      return;
		}
}

   // Set Message
   $message .= "<html>
<head>
<title>VECR PROJECT MESSAGE CLIENT</title>
<link rel='important stylesheet' href='chrome://messagebody/skin/messageBody.css'>
</head>
<body>
<html><head>
<meta http-equiv='Content-Type' content='text/html; '>
  </head>
  <body bgcolor='#FFFFFF' text='#000000'>
    <p>
      <meta content='width=device-width'>
      <style type='text/css'>
    /* Fonts and Content */
    body, td { font-family: 'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif; font-size:14px; }
    body { background-color: #2A374E; margin: 0; padding: 0; -webkit-text-size-adjust:none; -ms-text-size-adjust:none; }
    h2{ padding-top:12px; /* ne fonctionnera pas sous Outlook 2007+ */color:#0E7693; font-size:22px; }
    
    @media only screen and (max-width: 480px) { 

        table[class=w275], td[class=w275], img[class=w275] { width:135px !important; }
        table[class=w30], td[class=w30], img[class=w30] { width:10px !important; }  
        table[class=w580], td[class=w580], img[class=w580] { width:280px !important; }
        table[class=w640], td[class=w640], img[class=w640] { width:300px !important; }
        img{ height:auto;}
         /*illisible, on passe donc sur 3 lignes */
        table[class=w180], td[class=w180], img[class=w180] { 
            width:280px !important; 
            display:block;
        }    
        td[class=w20]{ display:none; }    
    } 

    </style>
      <table style='background-color:rgb(42, 55, 78)' border='0' cellpadding='0' cellspacing='0' width='100%'>
        <tbody>
          <tr>
            <td align='center' bgcolor='#2A374E'>
              <table border='0' cellpadding='0' cellspacing='0'>
                <tbody>
                  <tr>
                    <td class='w640' height='10' width='640'><br>
                    </td>
                  </tr>
                  <tr>
                    <td class='w640' height='10' width='640'><br>
                    </td>
                  </tr>
                  </tr>
                  <!-- separateur horizontal --> <tr>
                    <td class='w640' height='1' bgcolor='#d7d6d6' width='640'><br>
                    </td>
                  </tr>
                  <!-- contenu --> <tr class='content'>
                    <td class='w640' bgcolor='#ffffff' width='640'>
                      <table class='w640' border='0' cellpadding='0' cellspacing='0' width='640'>
                        <tbody>
                          <tr>
                            <td class='w30' width='30'><br>
                            </td>
                            <td class='w580' width='580'><!-- une zone de contenu -->
                              <table class='w580' border='0' cellpadding='0' cellspacing='0' width='580'>
                                <tbody>
                                  <tr>
                                    <td class='w580' width='580'>
                                      <h2 style='color:#0E7693;
                                        font-size:22px;
                                        padding-top:12px;'> VECR PROJECT MESSAGE CLIENT<br>
                                      </h2>
                                      <div class='article-content' align='left'> <br>
                                        <h5>Sujet: " . $subject . "</h5>
                                        <h5>Discord: " . $name . "</h5>
                                        <h5>Email: " . $email . "</h5>
                                        <h5>Message: " . $contact_message . "\r\n</h5>
                                        <h5>IP: " . $IP_ADDRESS . "\r\n</h5>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class='w580' height='1' bgcolor='#c7c5c5' width='580'><br>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                            <td class='w30' width='30'><br>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <!--  separateur horizontal de 15px de haut --> <tr>
                    <td class='w640' height='15' bgcolor='#ffffff' width='640'><br>
                    </td>
                  </tr>
                  <!-- pied de page --> <tr class='pagebottom'>
                    <td class='w640' width='640'>
                      <table class='w640' bgcolor='#c7c7c7' border='0' cellpadding='0' cellspacing='0' width='640'>
                        <tbody>
                          <tr>
                            <td colspan='5' height='10'><br>
                            </td>
                          </tr>
                          <tr>
                            <td class='w30' width='30'><br>
                            </td>
                            <td class='w580' valign='top' width='580'>
                              <p class='pagebottom-content-left' align='right'><a style='color:#255D5C;' href='https://vecrproject.com'><span style='color:#255D5C;'>VECR TEAM</span></a>
                              </p>
                            </td>
                            <td class='w30' width='30'><br>
                            </td>
                          </tr>
                          <tr>
                            <td colspan='5' height='10'><br>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td class='w640' height='60' width='640'><br>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </p>
  </body>
</html>

</body>
</html>
</table></div>";

   // Set From: header
   $from =  $name . " <" . $email . ">";

   // Email Headers
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
 	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


   if (!$error) 
   {

      ini_set("sendmail_from", $siteOwnersEmail); // for windows server
      $mail = mail($siteOwnersEmail, $subject, $message, $headers);

		if ($mail) 
    { 
      echo "OK";
    }
      else 
      { 
        echo "Something went wrong. Please try again."; 
        return;
      }
		
	} # end if - no validation error

	else {

		$response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
		$response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
		$response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;
		$response .= (isset($error['captcha'])) ? $error['captcha'] . "<br />" : null;
		
		echo $response;

	} # end if - there was a validation error

}

?>