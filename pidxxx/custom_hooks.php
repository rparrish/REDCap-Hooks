<?php

/**
	
	This is a PROJECT HOOKS Master File.
	
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
	
	
	If you use this custom_hooks.php file you can delete all of the function_name.php files from the template directory as they aren't necessary
	
**/

// You are going to want to comment this line out, but just to illustrate where hooks are you can leave this out for now...
print "<div class='yellow'>We've caught a project-specific hook: <code>$hook_event</code> in project $project_id with <pre>" . __FILE__ . "</pre></div>";	

