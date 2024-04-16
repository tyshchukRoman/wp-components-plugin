<?php
/**
 * Plugin Name: Component Library
 * Plugin URI: #
 * Description: This is a custom plugin for adding extra functionality to WordPress.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://www.example.com/
 */

require_once "src/Ajax.php";
require_once "src/Boot.php";
require_once "src/Build.php";

$components = new MakeitWorkPress\WP_Components\Boot();
