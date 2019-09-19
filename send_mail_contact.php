<?php
$webmaster_email = "manjotpahwa@gmail.com";

/*
This bit sets the URLs of the supporting pages.
If you change the names of any of the pages, you will need to change the values here.
*/
$contact_page = "contact.html";
$error_page = "error_message.html";
$thankyou_page = "thank_you.html";

/*
This next bit loads the form field data into variables.
If you add a form field, you will need to add it here.
*/
$email_address = $_REQUEST['email'] ;

// If the user tries to access this script directly, redirect them to the contact form,
if (!isset($_REQUEST['email'])) {
header( "Location: $contact_page" );
}

elseif empty($email_address) {
header( "Location: $error_page" );
}

// If we passed all previous tests, send the email then redirect to the thank you page.
else {

	mail( "$webmaster_email", "Contact Form Results", $_POST["email"]);

}
?>
