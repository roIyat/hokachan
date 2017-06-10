<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Software is like entropy. It is difficult to grasp, weighs nothing, and obeys the second law of thermodynamics; i.e. it always increases.">
    <meta name="keywords" content="Anonymous,Imageboard,Chan">
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
				<div id="column" style="float:left; margin:0; width:33.33%;">
					<ul>
					    <!-- Add left links -->
						<li><a href="../overkin/index.html" title="See the latest thread">OverKin</a></li>
						<li><a href="/bans.html" title="check if your IP is banned.">Ban List</a></li>
					</ul>
				</div>
				<div id="column" style="float:left; margin:0;width:33.33%;">
					<ul>
					    <!-- Add center links -->
						<li><a href="/news.html" title="Search the site">News</a></li>
					</ul>
		 		</div>
				<div id="column" style="float:left; margin:0;width:33.33%;">
					<ul>
					    <!-- Add right links -->
						<li><a href="/search.php" title="Search the site">Search</a></li>
						<li><a href="/banned.php" title="Are yah banned?">Banned?</a></li>
					</ul>
		 		</div>
			</div>
		</h4>
	</div>
	
	<!-- Add your boards -->
	<div class="box-wrap-board">	
		<h2>Boards</h2>
			<div id="contentBox">
				<div id="column" style="float:left; margin:0; width:50%;">
					<ul>
						<!-- Add left boards -->
						<h4>Common</h4>
						<li><a href="/a/" title="Animu">Animu</a>
					</ul>
                </div>
			    	<div id="column" style="float:left; margin:0;width:50%;">
					<ul>
					<!-- Add right boards -->
						<h4>Adult</h4>
						<li><a href="/b/" title="Random">Random</a>
					</ul>
				</div>
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
	
	<!-- Useful Links Remove or add the ones you like -->			
	 <div class="box linkage">
		 <ul>
			<li><a href="https://github.com/horija/hokachan" target="_blank">H0K4CH4N Script</a></li>
		 	<li><a href="http://www.torproject.org/" target="_blank">Torproject</a></li>
		 	<li><a href="http://engine.vichan.net" target="_blank">Vichan</a></li>
		 	<li><a href="http://duckduckgo.com" target="_blank">Duck Duck Go</a></li>
			<li><a href="http://thechangingmirror.com/phpbb/" target="_blank">The Changing Mirror</a></li>
			<li><a href="http://literotica.com" target="_blank">Literotica</a></li>
			<li><a href="http://g.e-hentai.org" target="_blank">E-hentai</a></li>
			<li><a href="http://cyoc.net" target="_blank">Choose Your Own Change</a></li>
			<li><a href="http://arania.kamiki.net" target="_blank">Arania</a></li>
			<li><a href="http://e621.net" target="_blank">E621</a></li>
			<li><a href="https://infowars.com" target="_blank">InfoWars</a></li>
			<li><a href="https://zerohedge.com" target="_blank">Zero Hedge</a></li>
			<li><a href="http://breitbart.com" target="_blank">Breitbart</a></li>
			<li><a href="http://kekistan.com/" target="_blank">Kekistan</a></li>
			<li><a href="http://fantasyfeeder.com/home" target="_blank">Fantasy Feeder</a></li>
			<li><a href="http://theralphretort.com/" target="_blank">The Ralph Retort</a></li>
			<li><a href="http://www.dimensionsmagazine.com/forums/" target="_blank">Dimensions</a></li>
			<li><a href="http://8ch.net" target="_blank">8chan</a></li>
			<li><a href="http://gab.ai" target="_blank">Gab</a></li>
			<li><a href="http://liveleak.com" target="_blank">Liveleak</a></li>
			<li><a href="http://www.hentai-foundry.com/" target="_blank">Hentai Foundry</a></li>
			<li><a href="https://hentaihaven.org" target="_blank">Hentai Haven</a></li>
			<li><a href="https://vid.me/" target="_blank"> Vidme</a></li>
			<li><a href="https://www.minds.com" target="_blank">Minds</a></li>
			<li><a href="https://encyclopediadramatica.rs/Main_Page" target="_blank">ED</a></li>
			<li><a href="https://www.deviantart.com" target="_blank">Deviantart</a></li>
			<li><a href="https://www.pixiv.net" target="_blank">Pixiv</a></li>
			<li><a href="https://www.sofurry.com/" target="_blank">SoFurry</a></li>
			<li><a href="https://rule34.xxx/" target="_blank">Rule 34</a></li>
			<li><a href="https://www.friendsofscience.org/" target="_blank">Friends of Science</a></li>
			<li><a href="https://www.loudtronix.co/" target="_blank">Loudtronix</a></li>
			<li><a href="https://www.imgur.com/" target="_blank">IMGUR</a></li>
			<li><a href="https://proxybay.one/" target="_blank">Pirate Bay Proxies</a></li>
			<li><a href="https://www.reddit.com/r/CrackWatch/" target="_blank">Game Cracks Updates</a></li>
			<li><a href="http://blackpigeonspeaks.com/" target="_blank">Black Pigeon Speaks</a></li>
			<li><a href="http://www.opera.com/" target="_blank">Opera</a></li>
			</ul>
			<br style="clear:both" /> <!-- So dirty! -->
		</div>
		
	<!-- Statistics -->
	<div class="box-wrap-board">
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
		</p>
		{% for footer in config.footer %}<p class="unimportant" style="text-align:center;">{{ footer }}</p>{% endfor %}
</footer>
