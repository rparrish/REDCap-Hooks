<?php

/**

	This is a template hook file designed to illustrate all of the Project Specific hook methods you have at your disposal.

	You have access to the helper methods defined in the parent redcap_hooks.php and hooks_common.php files
	
	The name of the hook event being called is $hook_event.  All parameters for that hook as defined in the documentation should
	be availabe in this file's scope ($project_id, $event_id, $instrument, etc...).  Additional (unsupported) variables may also be
	accessible by declaring them as global.
	
	Andy Martin
	Stanford University

**/

print "<div class='green'>Project $project_id hook event: $hook_event in file<pre>" . __FILE__ . "</pre></div>";

