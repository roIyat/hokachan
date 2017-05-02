<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<script type="text/javascript">
		var active_page = "index";
	</script>
	<title>{{ settings.title }}</title>
	<link rel="stylesheet" media="screen" href="{{ config.url_stylesheet }}"/>
	<link rel="stylesheet" media="screen" href="{{ config.root }}{{ settings.css }}"/>
	{% if config.url_favicon %}<link rel="shortcut icon" href="{{ config.url_favicon }}" />{% endif %}
	{% if config.default_stylesheet.1 != '' %}<link rel="stylesheet" type="text/css" id="stylesheet" href="{{ config.uri_stylesheets }}{{ config.default_stylesheet.1 }}">{% endif %}
	{% if config.font_awesome %}<link rel="stylesheet" href="{{ config.root }}{{ config.font_awesome_css }}">{% endif %}
	{% include 'header.html' %}
</head>

	{{ boardlist.top }}
	
<header>
	<img src="{{ settings.title_logo }}" style="max-width: 50px; display:block; margin-left: auto; margin-right: auto;">
	<h1>{{ settings.title }}</h1> 
	<div class="subtitle">{{ settings.subtitle }}</div> 
</header>
	
	
<div class="box-wrap">
	
		<!-- Modify the Intro -->
	<div class="box-wrap-board">
	<br/>
	<h4>{{ settings.intro }}</h4>
	<img src="{{ settings.intro_logo }}">
	<h6>{{ settings.warning }}
	<br/>
    <a href="{{ settings.warning_link }}">Go to safe space</a>
	<br/>
	<br/>
	<iframe src="{{ settings.intro_embed }}"></iframe>
	</h6>
	<br/>
	</div>
		
	<!--Search-->
	<?php
	require 'templates/themes/central/central_search.php';
	?>
	
	<!--News Module-->
	<div class="box-wrap-board">
		{% if news|count == 0 %}
			<p style="text-align:center" class="unimportant">(No news to show.)</p>
		{% else %}
			{% for entry in news %}
				<h2 id="{{ entry.id }}">
					{% if entry.subject %}
						{{ entry.subject }}
					{% else %}
						<em>no subject</em>
					{% endif %}
					<br/>
					<span class="unimportant"> &mdash; by {{ entry.name }} at {{ entry.time|date(config.post_date, config.timezone) }}</span>
				</h2>
				<p>{{ entry.body }}</p>
			{% endfor %}
		{% endif %}
	</div>
	
	<!--Links and Other content-->
	<div class="box-wrap-board">
		<h4> 
		<br/>
		You can place anything you like here.
		<br/>		
			<div id="contentBox">
				<div id="column" style="float:left; margin:0; width:50%;">
					<ul>
						<li><a href="../*/index.html" title="See the latest thread">OverBoard</a></li>
					</ul>
				</div>
				<div id="column" style="float:left; margin:0;width:50%;">
					<ul>
						<li><a href="/search.php" title="Search the site">Search</a></li>
					</ul>
		 		</div>
			</div>
		</h4>
	</div>
	
	<!-- Add your boards names -->
	<div class="box-wrap-board">	
		<h2>Boards</h2>
			<div id="contentBox">
				<div id="column" style="float:left; margin:0; width:100%;">
					<ul>
						<!-- Add your left board names -->
						<li><a href="/b/" title="Anything you want">Random</a>
					</ul>

				</div>

		<!--	<div id="column" style="float:left; margin:0;width:50%;">
					<ul>-->
						<!-- Add your right board names -->
					<!--<li><a href=/b/" title="Anything you want">Random</a>
						<li><a href="/b/" title="BAnything you want">Random</a>
					</ul>
				</div>-->
			</div>
	</div>	

	<!-- Image block -->
	<div class="box image">
		<ul>
			{% for post in central_images %}
				<li>
					<a href="{{ post.link }}">
						<video autoplay="" class="post-image" src="{{ post.src }}" poster="{{ post.src }}"></video>
					</a>
				</li>
			{% endfor %}
			<br style="clear:both" /> <!-- So dirty! -->
		</ul>
			<br style="clear:both" /> <!-- So dirty! -->
	</div>
	
	<!-- Latest Post titles -->						
	<div class="box-wrap-board">
	<h2>Latest Posts</h2>
		<ul>
			{% for post in central_posts %}
				<li>
					<strong>{{ post.board_name }}</strong>: 
					<a href="{{ post.link }}">
						{{ post.snippet }}
					</a>
				</li>
			{% endfor %}
		</ul>
	</div>		
		
	<!-- Statistics -->
	<div class="box-wrap-board">
	<h2>Stats</h2>
		<ul>
			<li>Total posts: {{ stats.total_posts }}</li>
			<li>Unique posters: {{ stats.unique_posters }}</li>
			<li>Active content: {{ stats.active_content|filesize }}</li>
		</ul>
	</div>
</div>
	
<footer>
		<p class="unimportant" style="margin-top:20px;text-align:center;">
		- <a href="https://github.com/savetheinternet/Tinyboard/">© TINYBOARD</a> + 
		<a href="https://engine.vichan.net/"> © VICHAN</a> + 
		<a href="https://hokachan.com/">© H0K4CH4N</a> {{ config.version }} - 
		{% for footer in config.footer %}<p class="unimportant" style="text-align:center;">{{ footer }}</p>{% endfor %}
</footer>
