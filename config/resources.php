<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * @author	Andrew Ellis
 * @copyright (c) Crowd Favorite. All Rights Reserved.
 * @package   oxygen/core
 */

/**
 * Theme Resources
 *
 * Format:
 *
 *	 array(
 *		 'key' => 'my-file', // must be unique
 *		 'type' => 'file',
 *		 'path' => '/path/to/file'
 *	 ),
 */
return array(
	// Stylesheets
	'css' => array(
		array(
			'key' => 'theme',
			'type' => 'file',
			'path' => THEMEPATH.'assets/css/theme.css'
		)
	),
	// JavaScript
	'js' => array()
);