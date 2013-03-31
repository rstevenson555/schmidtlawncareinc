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
$subject = "Service Checklist";
$body = "";

$body = $body . "Name: " . $_POST['name'] . "\n";
$body = $body . "Address: " . $_POST['address'] . "\n";
$body = $body . "Phone: " . $_POST['phone'] . "\n";
$body = $body . "Email: " . $_POST['email'] . "\n";

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

if ((isset($_POST['mowing']))) {
	$body = $body . "mowing: " . $_POST['mowing'] . "\n";
}
if ((isset($_POST['mowing_w_bagging']))) {
	$body = $body . "weekly mowing with bagging: " . $_POST['mowing_w_bagging'] . "\n";
}
if ((isset($_POST['fall_mowing']))) {
	$body = $body . "fall mowing with debris removal: " . $_POST['fall_mowing'] . "\n";
}
if ((isset($_POST['double_cut']))) {
	$body = $body . "double cut my lawn as needed: " . $_POST['double_cut'] . "\n";
}
if ((isset($_POST['selective_bagging']))) {
	$body = $body . "selective bagging $5 per can removed: " . $_POST['selective_bagging'] . "\n";
}
if ((isset($_POST['springclean']))) {
	$body = $body . "spring cleanup: " . $_POST['springclean'] . "\n";
}
if ((isset($_POST['fallclean']))) {
	$body = $body . "fall cleanup: " . $_POST['fallclean'] . "\n";
}
if ((isset($_POST['coreaerationspring']))) {
	$body = $body . "aeration spring: " . $_POST['coreaerationspring'] . "\n";
	$body = $body . "aeration spring sprinkler: " . ($_POST['coreaerationspringsprinkler'] == "Yes" ? "Yes" : "No") . "\n";
}

if ((isset($_POST['coreaerationfall']))) {
	$body = $body . "aeration fall: " . $_POST['coreaerationfall'] . "\n";
	$body = $body . "aeration fall sprinkler: " . ($_POST['coreaerationfallsprinkler'] == "Yes" ? "Yes" : "No") . "\n";
}

/*if ((isset($_POST['dethatch']))) {
	$body = $body . "dethatch: " . $_POST['dethatch'] . "\n";
	$body = $body . "dethatch sprinkler: " . ($_POST['dethatchsprinkler'] == "Yes" ? "Yes" : "No") . "\n";
}*/

if ((isset($_POST['shrubtrim']))) {
	$body = $body . "Spring Shrub Trimming: " . $_POST['shrubtrim'] . "\n";
	}

if ((isset($_POST['shrubtrimfall']))) {
	$body = $body . "Fall Shrub Trimming: " . $_POST['shrubtrimfall'] . "\n";
	}

/*if ((isset($_POST['poweredge']))) {
	$body = $body . "Poweredge sidewalks: " . $_POST['poweredge'] . "\n";
	}*/
if ((isset($_POST['shoveledge']))) {
	$body = $body . "Shovel Edge Beds: " . $_POST['shoveledge'] . "\n";
	}
if ((isset($_POST['mulchinstall']))) {
	$body = $body . "Mulch Installation: " . $_POST['mulchinstall'] . "\n";
	}
/*if ((isset($_POST['topsoil']))) {
	$body = $body . "TopSoil Installation: " . $_POST['topsoil'] . "\n";
	}*/
if ((isset($_POST['plowing']))) {
	$body = $body . "Plowing: " . $_POST['plowing'] . "\n";
	}
    if ((isset($_POST['other1']))) {
	$body = $body . "Other 1: " . $_POST['other1'] . "\n";
	}
if ((isset($_POST['other2']))) {
	$body = $body . "Other 2: " . $_POST['other2'] . "\n";
	}
$message =& new Swift_Message($subject,$body);

#$message->attach(new Swift_Message_Part($body));

if ( $swift->send($message,$to,$from)) {
    header( 'Location: http://www.schmidtlawncareinc.com/' ) ;
} else {
    echo("<p>Message delivery failed...</p>");
}

?>
