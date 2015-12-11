<?php
	
	echo '<h2>'.$menu_title[$current_menu].'</h2>';	

	switch($current_menu)
	{
		case 'faqs':
			include('pages/faqs.php');
			break;
			
		case 'venues':
			include('pages/venues.php');
			break;
			
		case 'volunteers':
			include('pages/volunteers.php');
			break;
			
		case 'res':
			include('pages/res.php');
			break;
			
		case 'contacts':
			include('pages/contacts.php');
			break;
			
		default:
			include('pages/home.php');
			break;
	}

?>