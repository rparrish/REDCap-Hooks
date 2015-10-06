<?php
/**

	Custom REDCap Hooks File

	It is possible to configure your hooks in many ways.  In playing around with a few I've adopted this convention:
	
	Inside your base redcap directory you should create a folder called hooks.  So, your directory might look like this:
	- redcap_vx.y.z
	- temp
	- webtools2
	- plugins
	- hooks
	
	Inside the hooks directory you need a 'main' hook configuration file (this file!) which I call redcap_hooks.php
	In the Control Center under general settings, you have to define the location of this file, something like:
		/var/html/www/redcap/hooks/redcap_hooks.php)
	
	The purpose of this configuration is to permit you to have a single hook function call from REDCap call both
	global and project-specific hooks. Because I like things complicated, there are two methods to include either
	a global or project-specific hook:
		
		Method 1: A 'master' hooks file exists for global and each project.  Each file can 'catch' all hook calls and use
			simple if-then syntax to decide which events to process.  These files should be located at
			hooks/global/global_hooks.php
			hooks/pidxxx/custom_hooks.php
		
		Method 2: A custom hook file for each hook function (named the same as the hook function itself).  Examples include
			hooks/global/redcap_custom_verify_username.php
			hooks/pidxxx/redcap_data_entry_form.php
	
	Any combination of methods 1 and 2 can be used.  Exercise caution in defining new functions that could be included
	more than once for a given hook event (or use custom namespaces).
	
	
	Also inside this hooks directory I have the following:
	- hooks_common.php (a file with utility functions and constants you might want to adjust)
	- global (a directory with hooks to be applied for all projects)
	- pidxxx (a folders for project-specific hooks
	- pid_TEMPLATE (a template folder that contains the template functions for a new project-specific hooks)
	
	Andrew Martin
	Stanford University

**/

// Turn on error reporting
error_reporting(E_ALL);

// Include the common functions
require_once('hooks_common.php');

### FOR EACH HOOK METHOD IN REDCAP, A FUNCTION OF MATCHING NAME SHOULD BE ENTERED BELOW 

// redcap_add_edit_records_page (REDCap >= 6.8.0)
function redcap_add_edit_records_page ($project_id, $instrument, $event_id) {
	// Example use of hook_log to track time to execute a hook:
	$hook_start_time = microtime(true);
	
	$hook_event = __FUNCTION__;
	foreach (get_hook_include_files($hook_event, $project_id) as $script) include $script;

	hook_log(" - $hook_event took " . hook_exec_time($hook_start_time), 'DEBUG');
}


// redcap_add_edit_records_page (REDCap >= 5.11.0)
function redcap_control_center() {
	$hook_event = __FUNCTION__;
	foreach (get_hook_include_files($hook_event) as $script) include $script;
}


// redcap_add_edit_records_page (REDCap >= 5.8.0)
function redcap_custom_verify_username($username) {
	$hook_event = __FUNCTION__;
	foreach (get_hook_include_files($hook_event) as $script) include $script;
}


// redcap_data_entry_form (REDCap >= 5.11.0)
function redcap_data_entry_form($project_id, $record, $instrument, $event_id, $group_id) {
	$hook_event = __FUNCTION__;
	foreach (get_hook_include_files($hook_event, $project_id) as $script) include $script;
}


// redcap_data_entry_form_top (REDCap >= 6.8.0)
function redcap_data_entry_form_top($project_id, $record, $instrument, $event_id, $group_id) {
	$hook_event = __FUNCTION__;
	foreach (get_hook_include_files($hook_event, $project_id) as $script) include $script;
}


// redcap_project_home_page (REDCap >= 6.9.0)
function redcap_project_home_page($project_id) {
	$hook_event = __FUNCTION__;
	foreach (get_hook_include_files($hook_event, $project_id) as $script) include $script;
}


// redcap_save_record (REDCap >= 5.11.0)
function redcap_save_record($project_id, $record, $instrument, $event_id, $group_id, $survey_hash, $response_id) {
	$hook_event = __FUNCTION__;
	foreach (get_hook_include_files($hook_event, $project_id) as $script) include $script;
}


// redcap_survey_complete (REDCap >= 5.11.0)
function redcap_survey_complete($project_id, $record, $instrument, $event_id, $group_id, $survey_hash, $response_id) {
	$hook_event = __FUNCTION__;
	foreach (get_hook_include_files($hook_event, $project_id) as $script) include $script;
}


// redcap_survey_page (REDCap >= 5.11.0)
function redcap_survey_page($project_id, $record, $instrument, $event_id, $group_id, $survey_hash, $response_id) {
	$hook_event = __FUNCTION__;
	foreach (get_hook_include_files($hook_event, $project_id) as $script) include $script;
}


// redcap_survey_page_top (REDCap >= 6.8.0)
function redcap_survey_page_top($project_id, $record, $instrument, $event_id, $group_id, $survey_hash, $response_id) {
	$hook_event = __FUNCTION__;
	foreach (get_hook_include_files($hook_event, $project_id) as $script) include $script;
}


// redcap_user_rights (REDCap >= 5.11.0)
function redcap_user_rights($project_id) {
	$hook_event = __FUNCTION__;
	foreach (get_hook_include_files($hook_event, $project_id) as $script) include $script;
}

// INSERT ADDITONAL HOOKS HERE AS THEY ARE DEVELOPED HERE



/////////////////////////////////////

hook_log("------------ redcap_hooks loaded ------------", "DEBUG");
