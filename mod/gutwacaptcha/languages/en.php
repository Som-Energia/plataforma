<?php
$english = array(
             
       'image:agree' => "Are you human? What code is in the image on the LEFT? *: (if you find it difficult to read, click the sound or fresh button for a new code)",
	'sirikinasa:isblank' => "Enter the characters or text shown in the image.",

	'gutwacaptcha:required' => "Sorry, security code entered did not match the text in the image.",
	
	/**
	* Account 
	*/
	
	'registerok' => "You have successfully registered for %s.",
	'uservalidationbyemail:registerok' => "To activate your account, please confirm your email address by clicking on the link we just sent you.",
	
	
	// catch the automated machines
	
	'gutwacaptcha:colour' => 'Background color of the register from',
        'gutwacaptcha:emailsiteowner' => 'Email me spammers address',
        'gutwacaptcha:myemailaddress' => 'Email address to send spammers addresses to',
        'gutwacaptcha:spammercaught' => 'Spammer caught',
        'gutwacaptcha:spammerdetails' => 'The email address of the spammer is %s',

	// the language selection part 
	'gutwacaptcha:admin:settings:min_completeness' => 'Minimum language completeness (e.g. 1)',
	'gutwacaptcha:admin:settings:show_in_header' => 'Show language selector in Captcha section?',
	'gutwacaptcha:admin:settings:autodetect' => 'Enable autodetect of captcha language (for non-logged in users)',
	'gutwacaptcha:admin:settings:show_images' => 'Show images of language/country (if available)',
	
	
	
);

add_translation("en",$english);