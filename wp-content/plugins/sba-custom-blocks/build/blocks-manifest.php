<?php
// This file is generated. Do not modify it manually.
return array(
	'hero-section' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/hero-section',
		'version' => '0.1.0',
		'title' => 'Hero Section',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Simple hero section with a background image and site title.',
		'example' => array(
			
		),
		'attributes' => array(
			'bgImage' => array(
				'type' => 'string'
			),
			'title' => array(
				'type' => 'string'
			)
		),
		'supports' => array(
			'color' => array(
				'text' => true,
				'background' => false
			),
			'html' => false
		),
		'textdomain' => 'hero-section',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'sba-custom-blocks' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/sba-custom-blocks',
		'version' => '0.1.0',
		'title' => 'Sba Custom Blocks',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'sba-custom-blocks',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./view.js'
	)
);
