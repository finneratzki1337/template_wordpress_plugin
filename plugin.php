<?php
/*
Plugin Name: General Plugin Template
Plugin URI: https://vouchershop.golfresortchallenge.de
Description: Programmed object oriented with option to use hooks, rest-api and more
Version: 0.9
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/* Includes */
require_once "include/index.php";
/*
Initialize the main plugin
*/
function my_plugin_init(){
	return MyPlugin::init();
}
/*
Activate Plugin
*/
$Plugin = my_plugin_init();

class MyPlugin {
	function __construct(){
		$this->define_function();
		add_action('plugins_loaded', [$this, 'init_plugin']);
		$this->add_actions();
	}
	
	public static function init(){
		static $instance = false;
		if (!$instance) {
			$instance = new self();
		}
		return $instance;
	}

	function test_helpers(){
		$this->Helpers->test_echo();
	}

	public function init_plugin() {
		// Create instances of subclasses
		//$this->GRCLogger = new GRCLogger;
        $this->Helpers = new HelperFunctions();
        $this->Shortcodes = new Shortcodes();
        $this->API = new API();
		$this->CustomerQueries = new CustomQueries();
	}

	public function define_function(){
		//Constants
		define( 'MY_PLUGIN_URL', plugins_url() . '/my_plugin_name/');
	}

	function add_actions(){
		//Adding to action hooks (function defined below)
		//add_action('wp_enqueue_scripts',[$this, 'wpb_adding_scripts']);
	}

	// ADDING SCRIPTS
	function wpb_adding_scripts() {
		//$script_url = constant('GRC_PLUGIN_URL') . "assets/js/";
		//wp_register_script('grc_js_functions', $script_url . 'grc_functions.js', array('jquery'),'1.1', true);	
	}
}
?>