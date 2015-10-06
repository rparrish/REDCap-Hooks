<?php

/**
	
	This is the GLOBAL HOOKS Master File.
	
	It is included in EVERY hook event across your instance.
	You can use a variable called $hook_event to determine whether or not to take action on the call
	
	This file should be located in hooks/global/global_hooks.php
	
	For example:
	
	if ($hook_event == 'redcap_add_edit_records_page') {
		print "<div class='yellow'>A custom hook has been triggered for $hook_event.</div>";
	}
	
	
	You can use the same code for multiple events, such as:
	
	if ($hook_event == 'redcap_data_entry_form' || $hook_event == 'redcap_survey_page') {
		print "<div class='yellow'>Your entering data.</div>";
	}
	
**/

// You are going to want to comment this line out, but just to illustrate where hooks are you can leave this out for now...
if (SUPER_USER) {
	print "<div class='green'>We've caught a global hook event: <code>$hook_event</code> in <pre>" . __FILE__ . "</pre>Comment out this print statement to hide or, even better just leave it in for certain developers...</div>";
}

/*
// Here is an example of how to use this to enable some hooks globally
if ($hook_event == 'redcap_data_entry_form' || $hook_event == 'redcap_survey_page') {
	
	// INCULDE NONE OF THE ABOVE
	$file = HOOK_PATH_ROOT . "resources/none_of_the_above.php";
	if (file_exists($file)) {
		include_once $file;
	} else {
		hook_log ("Unable to include $file for project $project_id while in " . __FILE__);
	}
	
	// INCULDE RANDOM ORDER
	$file = HOOK_PATH_ROOT . "resources/random_order.php";
	if (file_exists($file)) {
		include_once $file;
	} else {
		hook_log ("Unable to include $file for project $project_id while in " . __FILE__);
	}
}
*/















