<?php
require_once "lib/Swift.php";
require_once "lib/Swift/Connection/NativeMail.php"; //There are various connections to use

$swift =& new Swift(new Swift_Connection_NativeMail());

if ((!isset($_POST['email'])) || $_POST['email']=='') {
    $from = "todd@schmidtlawncareinc.com";
} else {
    $from = $_POST['email'];
}
$to = "inquiry@schmidtlawncareinc.com";
$subject = "Customer Inquiry";
$body = "";

$body = $body . "Name: " . $_POST['name'] . "\n";
$body = $body . "Company: " . $_POST['company'] . "\n";
$body = $body . "Address: " . $_POST['address'] . "\n";
$body = $body . "City: " . $_POST['city'] . "\n";
$body = $body . "Phone: " . $_POST['phone'] . "\n";
$body = $body . "Email: " . $_POST['email'] . "\n";
$body = $body . "Interest: " . $_POST['interest'] . "\n";
$body = $body . "Callback Time: " . $_POST['callback'] . "\n";
$body = $body . "Comments: " . $_POST['comments'] . "\n";

if ((!isset($_POST['name'])) || $_POST['name']=='') {
    //echo("<p>Name is required, press back and resubmit...</p>");
    header( 'Location: http://www.schmidtlawncareinc.com/inquire_error.php?error=Name' ) ;
    return;
}
if ((!isset($_POST['address'])) || $_POST['address']=='') {
    header( 'Location: http://www.schmidtlawncareinc.com/inquire_error.php?error=Address' ) ;
    return;
}
if ((!isset($_POST['phone'])) || $_POST['phone']=='') {
    header( 'Location: http://www.schmidtlawncareinc.com/inquire_error.php?error=Phone' ) ;
    return;
}
if ((!isset($_POST['interest'])) || $_POST['interest']=='') {
    header( 'Location: http://www.schmidtlawncareinc.com/inquire_error.php?error=Service%20of%20interest' ) ;
    return;
    }
if ((!isset($_POST['comments'])) || $_POST['comments']=='') {
    header( 'Location: http://www.schmidtlawncareinc.com/inquire_error.php?error=Comments' ) ;
    return;
}

/**
Validate an email address.
Provide email address (raw input)
Returns true if the email address has the email
address format and the domain exists.
*/
function validEmail($email)
{
   $isValid = true;
   $atIndex = strrpos($email, "@");
   if (is_bool($atIndex) && !$atIndex)
   {
      $isValid = false;
   }
   else
   {
      $domain = substr($email, $atIndex+1);
      $local = substr($email, 0, $atIndex);
      $localLen = strlen($local);
      $domainLen = strlen($domain);
      if ($localLen < 1 || $localLen > 64)
      {
         // local part length exceeded
         $isValid = false;
      }
      else if ($domainLen < 1 || $domainLen > 255)
      {
         // domain part length exceeded
         $isValid = false;
      }
      else if ($local[0] == '.' || $local[$localLen-1] == '.')
      {
         // local part starts or ends with '.'
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $local))
      {
         // local part has two consecutive dots
         $isValid = false;
      }
      else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
      {
         // character not valid in domain part
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $domain))
      {
         // domain part has two consecutive dots
         $isValid = false;
      }
      else if
(!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/',
                 str_replace("\\\\","",$local)))
      {
         // character not valid in local part unless
         // local part is quoted
         if (!preg_match('/^"(\\\\"|[^"])+"$/',
             str_replace("\\\\","",$local)))
         {
            $isValid = false;
         }
      }
      if ($isValid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A")))
      {
         // domain not found in DNS
         $isValid = false;
      }
   }
   return $isValid;
}

if ((!isset($_POST['email'])) || $_POST['email']=='') {
    header( 'Location: http://www.schmidtlawncareinc.com/inquire_error.php?error=Email%20address' ) ;
    return;
}

if (!validEmail($_POST['email'])) {
    header( 'Location: http://www.schmidtlawncareinc.com/inquire_error.php?error=Email%20address' ) ;

}

$message =& new Swift_Message($subject,$body);

#$message->attach(new Swift_Message_Part($body));

if ( $swift->send($message,$to,$from)) {
    header( 'Location: http://www.schmidtlawncareinc.com/' ) ;
} else {
    echo("<p>Message delivery failed...</p>");
}

?>
