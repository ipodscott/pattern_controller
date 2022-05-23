<?php	
	
	/*
	Plugin Name: Patterns Controller
	Plugin URI: https://scottsaunders.design
	Description: Makes plugin to create help create additional patterns.
	Version: 1.0
	Author: Scott Saunders
	Author URI: https://scottsaunders.design
	License: GPLv2 or later
	Text Domain: scottsaunders.design
	*/
	
	remove_theme_support("core-block-patterns");
	
	register_block_pattern_category("sample_copy", [
		"label" => __("Sample Copy"),
  	]);
  	
  	include_once "sample_copy.php";

