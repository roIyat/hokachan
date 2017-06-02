<?php
	$theme = Array();
	
	// Theme name
	$theme['name'] = 'CENTRAL';
	// Description (you can use Tinyboard markup here)
	$theme['description'] = 'This theme has it all';
	$theme['version'] = 'v2.1';
	
	// Theme configuration	
	$theme['config'] = Array();
	
	$theme['config'][] = Array(
		'title' => 'Title Logo',
		'name' => 'title_logo',
		'type' => 'text',
		'default' => '../templates/themes/central/hokachan.png',
		'comment' => '(50px image is best for this)'
	);
	
	$theme['config'][] = Array(
		'title' => 'Title',
		'name' => 'title',
		'type' => 'text',
		'default' => 'CENTRAL'
	);
	
	$theme['config'][] = Array(
		'title' => 'Intro',
		'name' => 'intro',
		'type' => 'text',
		'default' => 'Congratulations, you installed the central theme.'
	);
	
	$theme['config'][] = Array(
		'title' => 'Intro Logo',
		'name' => 'intro_logo',
		'type' => 'text',
		'default' => '../templates/themes/central/kekistan.png',
		'comment' => '(Add an image)'
	);
	
		$theme['config'][] = Array(
		'title' => 'Intro Embed',
		'name' => 'intro_embed',
		'type' => 'text',
		'default' => 'https://www.youtube.com/embed/hhh4t75LcbY?ecver=2',
		'comment' => '(add an embed)'
	);
	
		$theme['config'][] = Array(
		'title' => 'Warning',
		'name' => 'warning',
		'type' => 'text',
		'default' => 'This board contains content that is normie hostile. schroll down at your own risk, Minors should not visit this website and should leave now... yes now!'
	);
	
	$theme['config'][] = Array(
		'title' => 'Warning Link',
		'name' => 'warning_link',
		'type' => 'text',
		'default' => 'https://duckduckgo.com',
		'comment' => '(Add the warning url link)'
	);
	
	$theme['config'][] = Array(
		'title' => 'Excluded boards',
		'name' => 'exclude',
		'type' => 'text',
		'comment' => '(space seperated)'
	);
	
	$theme['config'][] = Array(
		'title' => '# of recent images',
		'name' => 'limit_images',
		'type' => 'text',
		'default' => '15',
		'comment' => '(maximum images to display)'
	);
	
	$theme['config'][] = Array(
		'title' => '# of recent posts',
		'name' => 'limit_posts',
		'type' => 'text',
		'default' => '30',
		'comment' => '(maximum posts to display)'
	);
	
	$theme['config'][] = Array(
		'title' => 'PHP/HTML file',
		'name' => 'html',
		'type' => 'text',
		'default' => 'index.php',
		'comment' => '(eg. "index.php for homepage")'
	);
	
	$theme['config'][] = Array(
		'title' => 'CSS file',
		'name' => 'css',
		'type' => 'text',
		'default' => 'stylesheets/central.css',
		'comment' => '(eg. "central.css")'
	);

	$theme['config'][] = Array(
		'title' => 'CSS stylesheet name',
		'name' => 'basecss',
		'type' => 'text',
		'default' => 'central.css',
		'comment' => '(eg. "central.css" - see templates/themes/central for details)'
	);
	
	$theme['config'][] = Array(
		'title' => '# of recent entries',
		'name' => 'no_recent',
		'type' => 'text',
		'default' => 3,
		'size' => 3,
		'comment' => '(number of recent news entries to display; "0" is infinite)'
	);
	
	// Unique function name for building everything
	$theme['build_function'] = 'central_build';
	$theme['install_callback'] = 'central_install';

	if (!function_exists('central_install')) {
		function central_install($settings) {
			if (!is_numeric($settings['limit_images']) || $settings['limit_images'] < 0)
				return Array(false, '<strong>' . utf8tohtml($settings['limit_images']) . '</strong> is not a non-negative integer.');
			if (!is_numeric($settings['limit_posts']) || $settings['limit_posts'] < 0)
				return Array(false, '<strong>' . utf8tohtml($settings['limit_posts']) . '</strong> is not a non-negative integer.');
			if (!is_numeric($settings['no_recent']) || $settings['no_recent'] < 0)
				return Array(false, '<strong>' . utf8tohtml($settings['no_recent']) . '</strong> is not a non-negative integer.');
		}
	}
	
