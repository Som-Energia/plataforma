<?
/* direct access -> \/ */
if (realpath($_SERVER['SCRIPT_FILENAME']) == realpath(__FILE__)) { die(
'This script is designed to only by elgg languagen captcha genuine play action..<br /><br />
<tt>Thanks for trying to access this file directly"</tt>'); }


require_once dirname(__FILE__) . '/securimage.php';


class ControllePlease extends Securimage {

	
	/**
	 * Main function kematu
	 *
	 * @param array $lugas
	 */	
	public function kematu() {
	
	// Load Elgg engine
	require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");
	
	// Our default language
	$default_language = 'en';
	
        // the available languages
	$elggcaptcha_langs = array('en', 'de', 'fr');
	// Our cookie name called client_luga
 	$cookie_name = $_COOKIE['client_luga'];

 	if(!elgg_is_logged_in()){

 	// If a locale was set before and if is correct, we use it
	if (!empty($cookie_name) && in_array($cookie_name, $elggcaptcha_langs)) {
   	 $lugas = $cookie_name;
           	
	} else {
	
   	$browserluga = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);  //EXTRACT THE TWO DIGIT LANGUAGE CODE FROM THE HTTP HEADERS
				
	// If the browser language exists and if available, let's use it
   	if(!empty($browserluga) && in_array($browserluga, $elggcaptcha_langs)){
		
		
	// autodetect language
        if(elgg_get_plugin_setting("wakaguzi", "gutwacaptcha") == "yes"){
           
        $lugas = $browserluga;
         }
       	 }
    	 }
   	 if (!in_array($lugas, $elggcaptcha_langs)) {
    
  	//  If there is no match change to some default language:
        $lugas = $default_language;
   	 }
    
  	if (!isset($_SESSION['captchalangview'])) {
   	 $_SESSION['captchalangview'] = $lugas;
	}   

 	}

	 return $lugas;

	}
	}
?>