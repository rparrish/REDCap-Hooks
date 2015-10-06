<?php

/**
	
	This is a PROJECT HOOKS Master File for a TEST/DEMO project.
	
	To illustrate some of the hooks at REDCap Con 2015 I created a test project and used this hooks file to enable those functions in the test project.
	The CSV data dictionary for this project has also be saved to this folder and can be used to recreate the project:
	
	Step 1: Create a new project in your REDCap instance
	Step 2: Upload the data dictionary from the CSV file in this folder
	Step 3: Rename this folder - say your new project is pid=55, then call this folder pid55.
	Step 4: If you want to use 
	
	
	It is included in EVERY hook event for the specified project.
	You can use a variable called $hook_event to determine whether or not to take action on the call
	
	This file should be located in hooks/pidxxx/custom_hooks.php
	
	For example:
	
	if ($hook_event == 'redcap_add_edit_records_page') {
		print "<div class='yellow'>A custom hook has been triggered for $hook_event in project $project_id.</div>";
	}
	
	You can use the same code for multiple events, such as:
	
	if ($hook_event == 'redcap_data_entry_form' || $hook_event == 'redcap_survey_page') {
		print "<div class='yellow'>Your entering data on project $project_id.</div>";
	}
	
**/

// You are going to want to comment this line out, but just to illustrate where hooks are you can leave this out for now...
// print "<div class='yellow'>We've caught hook: $hook_event in project $project_id with <pre>" . __FILE__ . "</pre></div>";	


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

	
	// INCULDE INPUTMATRIX
	$file = HOOK_PATH_ROOT . "resources/inputmatrix.php";
	if (file_exists($file)) {
		include_once $file;
	} else {
		hook_log ("Unable to include $file for project $project_id while in " . __FILE__);
	}
	// Add some custom CSS for the image Matrix
	$script = <<<SCRIPT
	<style type='text/css'>
		table.inputmatrix td, table.inputmatrix th {max-width: 40px; padding:5px 5px;} 
		table.inputmatrix td:first-child, table.inputmatrix th:first-child {max-width: 400px;} 
	</style>
SCRIPT;
	print $script;
	
	
	// INCULDE SHAZAM
	$file = HOOK_PATH_ROOT . "resources/shazam.php";
	if (file_exists($file)) {
		include_once $file;
	} else {
		hook_log ("Unable to include $file for project $project_id while in " . __FILE__);
	}
	// Add some custom CSS for the image Matrix
	$script = <<<SCRIPT
	<style type='text/css'>
		table.med_summary td {font-weight:normal;}
		table.med_summart tr:nth-child(2n) { background-color: #eee; }
	</style>
SCRIPT;
	print $script;
	
	
	// INCULDE DIRECTORY LOOKUP
	$file = HOOK_PATH_ROOT . "resources/directory_lookup.php";
	if (file_exists($file)) {
		include_once $file;
	} else {
		hook_log ("Unable to include $file for project $project_id while in " . __FILE__);
	}
	
	
	// INCULDE IMAGEMAP
	$file = HOOK_PATH_ROOT . "resources/imagemap/imagemap.php";
	if (file_exists($file)) {
		include_once $file;
	} else {
		hook_log ("Unable to include $file for project $project_id while in " . __FILE__);
	}
	
}

if ($hook_event == 'redcap_survey_page_top') {
	
	// INCULDE AUTO-CONTINUE-LOGIC
	// This is an array of forms and logic - add as many as necessary...
	$auto_continue_logic = array(
		//instrument name            => logic
		'example_of_input_matrix'    => "[skip_input_matrix] <> '1'"
	);
	
	$file = HOOK_PATH_ROOT . "resources/auto_continue_logic.php";
	if (file_exists($file)) {
		include_once $file;
	} else {
		hook_log ("Unable to include $file for project $project_id while in " . __FILE__);
	}	
	
}


