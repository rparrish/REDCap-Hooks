<?php

/**

	This is a template hook file designed to illustrate a GLOBAL application of a hook

	You have access to the helper methods defined in the parent redcap_hooks.php and hooks_common.php files - such as hook_log()
	
	The name of the hook event being called is in the variable $hook_event.
	All parameters for that hook as defined in the documentation should be availabe in this file's scope
		e.g. $project_id, $event_id, $instrument, etc...
		Additional (unsupported) variables may also be accessible by declaring them as global.
	
	Andy Martin
	Stanford University

**/

//print "<div class='green'>Global call (project $project_id) of hook event: $hook_event in file<pre>" . __FILE__ . "</pre></div>";

// Here is an example debug statement to see the arguments passed into this hook function
//hook_log(debug_backtrace()[1]['args'], "DEBUG", "Parameters into this hook function");