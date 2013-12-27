<?php
 /***************************************************************************
	*                            TwizaNex Smart Community Software
	*                            ---------------------------------
	*  Start.php:  gutwacaptcha for Elgg 1.8.15
        *	
	*     begin                : Mon Mar 23 2011
	*     copyright            : (C) 2011 TwizaNex Group
	*     website              : http://www.TwizaNex.com/
	* This file is part of TwizaNex - Smart Community Software
	*
	* @package Twizanex
	* @link http://www.twizanex.com/
	* TwizaNex is free software. This work is licensed under a GNU Public License version 2. 
	* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
	* @author Tom Ondiba <twizanex@yahoo.com>
	* @copyright Twizanex Group 2011
	* TwizaNex is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
	* without even the implied warranty of  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	* See the GNU Public License version 2 for more details. 
	* For any questions or suggestion write to write to twizanex@yahoo.com
	***************************************************************************/


function gutwacaptcha_init() 
   	 {
	  //put the check at the very end
	//  if(elgg_is_active_plugin("groups")){}
	elgg_extend_view('register/extend', 'gutwacaptcha/register', 1000);
	elgg_extend_view('forgottenpassword/extend', 'gutwacaptcha/register', 999);

	 //block user registration if they don't check the box
	elgg_register_plugin_hook_handler('action', 'register', 'gutwacaptcha_register_hook');
	 //elgg_register_plugin_hook_handler('action', 'register', 'process_si_contact_form');
	
	 // Register a function that provides some default override actions 
	 
	elgg_register_plugin_hook_handler('action', 'user/requestnewpassword', 'gutwacaptcha_register_hook'); 
	

	}
	
    /***********************TM: Here The Magic begins*********************************/

function gutwacaptcha_register_hook() {
	 
        // this makes the page to be sticky so that the user does not loss the information!
		
	elgg_make_sticky_form('register');
		
       	 	// The form processor PHP code

	$captcha = get_input('sirisana_input'); 
            
	   	// get the form input to check if the input is empty and trow error if empty

		$siritupu = get_input('sirisana_input');	
 	
	if (empty($siritupu)){	
		register_error(elgg_echo('sirikinasa:isblank'));		
		forward(REFERER);	}

	if (!include_once(dirname(dirname(__FILE__)) . "/gutwacaptcha/securimage.php"))
		{
		// this is for debugging for testing... it helps to know if the file is right 
	  	//  echo "Could not load file. Please check your Elgg captcha file  for all required files."; 
	   	 }
	
        $securimage = new Securimage();

        if ($securimage->check($captcha) == false) {
        $errors['captcha_error'] = register_error(elgg_echo('gutwacaptcha:required'));
		
		// Forward on success, assume everything else is an error...
		forward(REFERER); // Get our of here !Huh huh
	} 
    
	}
	

	// Here we go, Have fun
	elgg_register_event_handler('init', 'system', 'gutwacaptcha_init'); 
	
		
/*%*************TM: gutwacaptcha language ****************************%*/
	
	require_once(dirname(__FILE__) . "/lib/luga_functions.php");
		
function elggcaptcha_language_selector_plugins_boot(){
		
	// Load system configuration
		
	global $CONFIG;	
			
	// check if the user is not logged in if true-- load the rest of the code...
		
	if(!elgg_is_logged_in()){
			
	if(!empty($_COOKIE['client_luga'])){
				// switched with language selector
	$new_luga = $_COOKIE['client_luga']; 
	} else {	
  		// Check to see that the global language server variable substr(); So substr() will give you the first choice
		// If it is set, we can cut the first two characters from that string ie: en for english and fr for french 
		// filter the languge character like( de-de,de;q=0.8,en-us;q=0.5,en;q=0.3 ) to get a clear result like "EN" or "DE" or "IT"?
				
	$browserluga = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);  //EXTRACT THE TWO DIGIT LANGUAGE CODE FROM THE HTTP HEADERS
				
	if(!empty($browserluga)){
		// autodetect language
					
	if(elgg_get_plugin_setting("wakaguzi", "gutwacaptcha") == "yes"){
	$new_luga = $browserluga;
		}
		}
		}
			
	if(!empty($new_luga) && ($new_luga !== $CONFIG->language)){
		// set new language
		$CONFIG->language = $new_luga;
				
		// language has been change; reload language keys
	if(elgg_is_active_plugin("translation_editor")){
		translation_editor_load_translations();
		} else {
		reload_all_translations();
		}
		}
		}
		
	// extend the css
	elgg_extend_view("css/elgg", "elggcaptcha_language_selector/css/ndio");
		}
	
		
function elggcaptcha_language_selector_invalidate_setting(){
 		// TM: Check for allowed languages 
		elgg_unset_plugin_setting("allowed_languages", "gutwacaptcha"); 
		}

function elggcaptcha_language_selector_pagesetup(){

	if(elgg_get_plugin_setting("show_ase_motwe", "gutwacaptcha") == "yes"){
	   elgg_extend_view('register/extend', 'elggcaptcha_language_selector/default', 999); // TM
	   elgg_extend_view('forgottenpassword/extend', 'elggcaptcha_language_selector/default', 997);  // TM
	
	}
        }

	// register hooks
	elgg_register_plugin_hook_handler("all", "plugin", "elggcaptcha_language_selector_invalidate_setting");
	
	// register events
	elgg_register_event_handler("language:merge", "translation_editor", "elggcaptcha_language_selector_invalidate_setting");
	elgg_register_event_handler("all", "plugin", "elggcaptcha_language_selector_invalidate_setting");
	
	
	// Default event handlers for plugin functionality
	elgg_register_event_handler('plugins_boot', 'system', 'elggcaptcha_language_selector_plugins_boot');
	elgg_register_event_handler('pagesetup', 'system', 'elggcaptcha_language_selector_pagesetup');
	elgg_register_event_handler('init', 'system', 'elggcaptcha_language_selector_init');
	elgg_register_event_handler('upgrade', 'system', 'elggcaptcha_language_selector_invalidate_setting');
	
	// actions
	elgg_register_action('elggcaptcha_language_selector/change', dirname(__FILE__) . '/actions/chapa.php', "logged_in");	
	