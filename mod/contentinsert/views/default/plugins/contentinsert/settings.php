<?php

/* ***********************************************************************
 * @author : Tiby Wang
 * @link http://caijingzhi.com
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/


	$topbanner = $vars['entity']->topbanner;
	$footbanner = $vars['entity']->footbanner;
	$sidebanner = $vars['entity']->sidebanner;
	$sidebannertop = $vars['entity']->sidebannertop;
?>



<ul>
    <li> 
        <b><?php echo elgg_echo('contentinsert:lbltopbanner'); 
				 echo "<p> </p>";
		?></b>
     </li>


     <li>
         <?php echo elgg_view('input/plaintext', array(
		              'name'=> 'params[topbanner]',
			      'value' => $topbanner));
			  echo "<p> </p>";
         ?>
     </li>
</ul>

<ul>
     <li> 
         <b><?php echo elgg_echo('contentinsert:lblfootbanner'); 
				  echo "<p> </p>";
		 ?></b>
     </li>


     <li> 
         <?php echo elgg_view('input/plaintext', array(
	                      'name' => 'params[footbanner]',
		              'value' => $footbanner));
			   echo "<p> </p>";
         ?>
     </li>
</ul>

<ul>
     <li> 
         <b><?php echo elgg_echo('contentinsert:lblsidebannertop'); 
		          echo "<p> </p>";
		 ?></b>
     </li>


     <li> 
         <?php echo elgg_view('input/plaintext', array(
	                      'name' => 'params[sidebannertop]',
		              'value' => $sidebannertop));
			   echo "<p> </p>";
         ?>
     </li>
</ul>

<ul>
     <li> 
         <b><?php echo elgg_echo('contentinsert:lblsidebanner'); 
		          echo "<p> </p>";
		 ?></b>
     </li>


     <li> 
         <?php echo elgg_view('input/plaintext', array(
	                      'name' => 'params[sidebanner]',
		              'value' => $sidebanner));
			   echo "<p> </p>";
         ?>
     </li>
</ul>
