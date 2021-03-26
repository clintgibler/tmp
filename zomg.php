<?php

// ruleid: checklist-cookie-fetch
# Do not use $_COOKIE to get cookie values
echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';
$email = $_COOKIE["email"];

// ok: checklist-cookie-fetch
# Preferred way to get cookie value
$wgRequest->getCookie('value');

// ok: checklist-cookie-fetch
# Ex: Attempt to fetch the UserID cookie value. Note: The
# value returned isn't trusted and is forced to be an int.
$sId = intval( $wgRequest->getCookie( 'UserID' ) );
?>
