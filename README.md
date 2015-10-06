# REDCap-Hooks
This is a framework for deploying hooks in REDCap on a global or per-project basis.

This code is covered by a standard MIT license which means you can't hole me liable :-)  In other words:

It is YOUR responsiblity to ensure that the use of this code or any modifications to it meet your institutional security guidelines.  This code is intended as example code for learning REDCap and not necessarily as production-ready code.  In other words, use at your own risk.  Please also leave attribution to this repository in the code.

## Using this Framework
The code contained in this repository is typically installed in a subfolder off your root redcap web directory (typically called hooks).

#### Place the contents into your hooks folder
When you're done the hierarchy should look like this image:
<img src="http://s22.postimg.org/vsguefdc1/folder_hierarchy.png" width="200">

#### In your control center, make sure you have hooks enabled
Set the path to the redcap_hooks.php file - the name of the parent folder does not need to be 'hooks' if you don't like.
<img src="http://s20.postimg.org/k3eeb3xv1/hooks_url_control_center.png" width="500">

####  Test
By default, the global hooks file `/global/global_hooks.php` will render a colored div for all hooks when you are a super user.  So, if you visit the control center, for example, you should see a custom hook at the bottom of the page (where the `redcap_control_center` hook is enabled):
<img src="http://s20.postimg.org/ew7jv92ct/example_hook_enabled.png" width="500">
