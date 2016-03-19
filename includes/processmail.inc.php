<?php
// blocking emails that contain specific phrases
//assume nothing is suspect
$suspect = false;
// create a pattern to locate suspect phrases
$pattern = '/Content-Type:|Bcc:|Cc:/i';

// function to check for suspect phrases
function isSuspect($val, $pattern, &$suspect){ //passing by reference
	if(is_array($val)){
		foreach($val as $item){
			isSuspect($item, $pattern, $suspect);
		}
	} else {
		if(preg_match($pattern, $val)){
			$suspect = true;
		}
	}
}

//check the $_POST array
isSuspect($_POST, $pattern, $suspect);

if(!$suspect){    
    foreach ($_POST as $key => $value){
	    // assign to temporary variable and strip whitespace if not an array
	    $temp = is_array($value) ? $value : trim($value);
	    // if empty and required, add to missing array
	    if (empty($temp) && in_array($key, $required)){
		    $missing[] = $key;
	    } elseif (in_array($key, $expected)){
		    // otherwise, assign to a variable of the same name as $key
		    ${$key} = $temp;
	    }
    }
    
    /* the foreach loop goes through the $_POST array, strips out any whitespace
    from text fields, and assigns its contents to a variable with the same name
    $_POST['email'] becomes $email */  
}

// validate the user's email - it checks only the format.
// FILTER_VALIDATE_EMAIL -> it checks only the format, it doesn't check that the address is genuine
if(!$suspect && !empty($email)){
	$validemail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	if($validemail){
		$headers .= "\r\nReply-To: $validemail";
	} else {
		$errors['email'] = true;
	}
}

$mailSent = false;

if(!$suspect && !$missing && !$errors){
	$message = '';
	// loop through the expected array
	foreach($expected as $item){
		// assign the value of the current $item to $val
		if(isset(${$item}) && !empty(${$item})){
			$val = ${$item};
		} else {
			// if it has no value, assign 'Not selected'
			$val = 'Not selected';
		}
		// if an array, expand as comma separated string
		if(is_array($val)){
			$val = implode(' ,',$val);
		}
		// replace underscores and hyphens in the label with spaces
		$item = str_replace(array('_','-'), ' ', $item);
		// add label and value to the message body
		$message .= ucfirst($item).": $val\r\n\r\n";
	}
	//limit line length to 70 characters
	$message = wordwrap($message,70);
	$mailSent = mail($to, $subject, $message, $headers);
	if(!$mailSent)	$errors['mailfail'] = true;
}