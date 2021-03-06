<?php
	$theme = Array();
	
	// Theme name
	$theme['name'] = 'News';
	// Description (you can use Tinyboard markup here)
	$theme['description'] = 'Extremely basic news listing. Enabling boardlinks is recommended for this theme.';
	$theme['version'] = 'v1.0.0';
	
	// Theme configuration	
	$theme['config'] = Array();
	
	$theme['config'][] = Array(
		'title' => 'Site title',
		'name' => 'title',
		'type' => 'text',
		'default' =>'Fake News Central'
	);
	
	$theme['config'][] = Array(
		'title' => 'Slogan',
		'name' => 'subtitle',
		'type' => 'text',
		'default' =>'Your source for daily fake news, and proud of it!',
		'comment' => '(optional)'
	);
	
	$theme['config'][] = Array(
		'title' => 'File',
		'name' => 'file',
		'type' => 'text',
		'default' => 'news.html',
		'comment' => '(eg. "news.html")'
	);
	
	$theme['config'][] = Array(
		'title' => '# of recent entries',
		'name' => 'no_recent',
		'type' => 'text',
		'default' => 5,
		'size' => 3,
		'comment' => '(number of recent news entries to display; "0" is infinite)'
	);
	
	// Unique function name for building everything
	$theme['build_function'] = 'basic_build';
	$theme['install_callback'] = 'build_install';

	if (!function_exists('build_install')) {
		function build_install($settings) {
			if (!is_numeric($settings['no_recent']) || $settings['no_recent'] < 0)
				return Array(false, '<strong>' . utf8tohtml($settings['no_recent']) . '</strong> is not a non-negative integer.');
		}
	}

