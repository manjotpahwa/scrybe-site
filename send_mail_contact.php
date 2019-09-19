<?php
$webmaster_email = "manjotpahwa@gmail.com";

/*
This bit sets the URLs of the supporting pages.
If you change the names of any of the pages, you will need to change the values here.
*/
$contact_page = "contact.html";

echo 'We\'ve reached here.'

/*
This next bit loads the form field data into variables.
If you add a form field, you will need to add it here.
*/
$email_address = $_POST['email'] ;

echo 'Email address from post request' . $email_address;

$email_address = $_REQUEST['email'] ;

echo 'Email address from only request' . $email_address;

// If the user tries to access this script directly, redirect them to the contact form,
if (!isset($_POST['email'])) {
header( "Location: $contact_page" );
}

// If we passed all previous tests, send the email then redirect to the thank you page.
else {

	mail( "$webmaster_email", "Contact Form Results", $_POST["email"]);

}
?>
