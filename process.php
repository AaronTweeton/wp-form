<?php 
	var_dump($_REQUEST);
	echo "<br/>";

	/* Server-side validation */
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);

	$phone = $_REQUEST['phone'];
	$city = $_REQUEST['city'];
	$services = $_REQUEST['services'];
	$squarefeet = $_REQUEST['squarefeet'];

	if ($name === '') :
		echo "<p>Please enter a name.</p>";
	endif;

	if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ):
		echo "<p>Please enter an email address.</p>";
	endif;

	if ( !(preg_match('/\(?\d{3}\)?[- ]?\d{3}[- ]?\d{4}/', $phone)) ) :
		echo "<p>Please enter a valid phone number.</p>";
	endif;


	if ($city === '') :
		echo "<p>Please enter a city.</p>";
	endif;

	if ($squarefeet === '') :
		echo "<p>Please enter the approximate square feet.</p>";
	endif;

	/* Echo services */
	echo "<p>Requested services:</p>";
	foreach ($services as $key => $value){
		echo $services[$key], "<br />";
	}


//	echo $name;
?>