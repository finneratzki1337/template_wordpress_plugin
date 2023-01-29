# Wordpress Plugin Template
## Getting started
Clone this repository on your Wordpress-Plugins Folder under a suitable name.

1. In the plugin.php File:
Adjust the header in the plugin.php file to your needs and change the plugin-path constant `define( 'MY_PLUGIN_URL', plugins_url() . '/my_plugin_name/');`
2. Functions from the plugin_classes can my made available by initializing objects of the classes in the plugin.php file
3. Functions from the plugin_classes can be used by calling `global $MyPlugin` and then `$MyPlugin->HelperObject->funtion_of_that_object();`