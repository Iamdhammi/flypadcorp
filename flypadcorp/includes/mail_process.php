<?php include ("includes/process.php") ?>
<?php 
	//Contact Page
	if (isset($_POST["submit"])) {
		$to = "info@creenix.com";
		$from = $_POST['email'];
		$name = $_POST['name'];
		$phone = $_POST['phone_no'];
		$subject = "From Creenix Contact Page: ";
		$subject .= $_POST['subject'];
		$message = 
		"----------------------------". $name . "(" . $phone . ")" . " sent the below message:". "-------------------------------" . "\n\n" . $_POST['message'];
		$headers = "From:" . $from;

		mail($to, $subject, $message, $headers);
		echo '<script>alert("Mail Sent. Thank you '. $name . ', we will contact you shortly.")</script>';
	}


	//Order Page

	//Blog Site
	if (isset($_POST['submit7'])) {
		$to = "info@creenix.com";
		$from = $_POST['email_order'];
		$name = $_POST['name_order'];
		$phone = $_POST['phone_order'];
		$country = $_POST['country_order'];
		$subject = "An Order from: " . $name;
		$message = $name ."\n\n". $country . "\n\n". $phone. "\n\n". $from ."\n\n". "Wants a Blog website which was tagged for ". $price1;
		$headers = "From: " . $from;

		mail($to, $subject, $message, $headers);
		echo '<script>alert("Mail Sent. Thank you '. $name . ', we will contact you shortly.")</script>';
	}

	//Single Webpage
	if (isset($_POST['submit2'])) {
		$to = "info@creenix.com";
		$from = $_POST['email_order'];
		$name = $_POST['name_order'];
		$phone = $_POST['phone_order'];
		$country = $_POST['country_order'];
		$subject = "An Order from: " . $name;
		$message = $name ."\n\n". $country . "\n\n". $phone. "\n\n". $from ."\n\n". "Wants a single webpage website which was tagged for ". $price2;
		$headers = "From: " . $from;

		mail($to, $subject, $message, $headers);
		echo '<script>alert("Mail Sent. Thank you '. $name . ', we will contact you shortly.")</script>';
	}

	//Webpage and Blog
	if (isset($_POST['submit3'])) {
		$to = "info@creenix.com";
		$from = $_POST['email_order'];
		$name = $_POST['name_order'];
		$phone = $_POST['phone_order'];
		$country = $_POST['country_order'];
		$subject = "An Order from: " . $name;
		$message = $name ."\n\n". $country . "\n\n". $phone. "\n\n". $from ."\n\n". "Wants a Webpage and Blog website which was tagged for ". $price3;
		$headers = "From: " . $from;

		mail($to, $subject, $message, $headers);
		echo '<script>alert("Mail Sent. Thank you '. $name . ', we will contact you shortly.")</script>';
	}

	//Multiple webpage website
	if (isset($_POST['submit4'])) {
		$to = "info@creenix.com";
		$from = $_POST['email_order'];
		$name = $_POST['name_order'];
		$phone = $_POST['phone_order'];
		$country = $_POST['country_order'];
		$subject = "An Order from: " . $name;
		$message = $name ."\n\n". $country . "\n\n". $phone. "\n\n". $from ."\n\n". "Wants a Multiple webpage website which was tagged for ". $price4;
		$headers = "From: " . $from;

		mail($to, $subject, $message, $headers);
		echo '<script>alert("Mail Sent. Thank you '. $name . ', we will contact you shortly.")</script>';
	}

	//Multiple webpage and Blog website
	if (isset($_POST['submit5'])) {
		$to = "info@creenix.com";
		$from = $_POST['email_order'];
		$name = $_POST['name_order'];
		$phone = $_POST['phone_order'];
		$country = $_POST['country_order'];
		$subject = "An Order from: " . $name;
		$message = $name ."\n\n". $country . "\n\n". $phone. "\n\n". $from ."\n\n". "Wants a Multiple webpage and Blog website which was tagged for ". $price5;
		$headers = "From: " . $from;

		mail($to, $subject, $message, $headers);
		echo '<script>alert("Mail Sent. Thank you '. $name . ', we will contact you shortly.")</script>';
	}

	//E-commerce website
	if (isset($_POST['submit6'])) {
		$to = "info@creenix.com";
		$from = $_POST['email_order'];
		$name = $_POST['name_order'];
		$phone = $_POST['phone_order'];
		$country = $_POST['country_order'];
		$subject = "An Order from: " . $name;
		$message = $name ."\n\n". $country . "\n\n". $phone. "\n\n". $from ."\n\n". "Wants a Ecommerce website which was tagged for ". $price6;
		$headers = "From: " . $from;

		mail($to, $subject, $message, $headers);
		echo '<script>alert("Mail Sent. Thank you '. $name . ', we will contact you shortly.")</script>';
	}

?>