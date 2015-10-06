# REDCap-Hooks
This is a framework for deploying hooks in REDCap on a global or per-project basis.

This code is covered by a standard MIT license which means you can't hole me liable :-)  In other words:

It is YOUR responsiblity to ensure that the use of this code or any modifications to it meet your institutional security guidelines.  This code is intended as example code for learning REDCap and not necessarily as production-ready code.  In other words, use at your own risk.  Please also leave attribution to this repository in the code.

## Using this Framework
The code contained in this repository is typically installed in a subfolder off your root redcap web directory (typically called hooks).

### Place the contents into your hooks folder
When you're done the hierarchy should look like this image:

![alt text][img_hierarchy]

<img src="http://s22.postimg.org/vsguefdc1/folder_hierarchy.png" width="200">

[img_hierarchy]: http://s22.postimg.org/vsguefdc1/folder_hierarchy.png "This is what your folder hierarchy should look like - this git repo belongs in the hooks folder"

### In your control center, make sure you have hooks enabled
Set the path to the redcap_hooks.php file - the name of the parent folder does not need to be 'hooks' if you don't like.

<img src="http://s20.postimg.org/k3eeb3xv1/hooks_url_control_center.png" width="200">