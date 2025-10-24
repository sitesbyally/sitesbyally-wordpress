<?php
// This file is generated. Do not modify it manually.
return array(
	'team-member-card' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/team-member-card',
		'version' => '0.1.0',
		'title' => 'Team Member Card',
		'category' => 'widgets',
		'icon' => 'users',
		'description' => 'Show a card with team member details.',
		'example' => array(
			
		),
		'attributes' => array(
			'profileImage' => array(
				'type' => 'string'
			),
			'name' => array(
				'type' => 'string'
			),
			'position' => array(
				'type' => 'string'
			)
		),
		'supports' => array(
			'color' => array(
				'background' => true,
				'text' => true
			),
			'html' => false
		),
		'textdomain' => 'team-member-card',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	)
);
