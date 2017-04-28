
H0K4CH4N - A PHP imageboard forked from Vichan and Tinyboard .
========================================================

Important Notice
------------
I created this fork because it looks like [Vichan](https://engine.vichan.net/) is dying... Since there are no more major
updates for almost a year. 

Use this fork at your own risk.
Don't use this fork if you have no knowledge of fixing your own database and content. 
If I screw something up I know how to fix my database and restore my content. You may not.

I might remove this fork like before although now that I know how github desktop works I probably won't.

When a stable version releases (not dev versions) you can use it if you have no knowledge of web developing. If you have knowledge of this script and know how to fix problems feel free to use it. 

<strike> Maybe it's because of [INFINITY](https://github.com/ctrlcctrlv/infinity), being sold to a Jim Wat...Kin,
and the complete clusterfuck of josh's [infinity never](https://github.com/infinity-next/infinity-next).
Leading to a NTEC or whatever license that makes it illegal for hotwheels etc... to update the code.. </strike>

Seems like Infinity is reborn here: [OpenIB](https://github.com/OpenIB/OpenIB) 

I only created this fork out of necessity... To have my own hentai board, that (hopefully) will work for the coming decades. 

Special Thanks
------------
* [Vichan](https://engine.vichan.net/) @czaks
* [Tinyboard](http://github.com/savetheinternet/Tinyboard) @savetheinternet 
  Support him by going to this site: [stop nerds](http://stopnerds.org/) 
* [Infinity](https://github.com/ctrlcctrlv/infinity) @ctrcctrlv
* [OpenIB](https://github.com/OpenIB/OpenIB) @Cipherwraith
* [Lainchan](https://github.com/lainchan/lainchan)


H0K4CH4N WIKI
------------
Credits go to @savetheinternet for making most of the [WIKI](https://github.com/horija/hokachan/wiki).

Important wiki links
* [DNSBL Setup](https://github.com/horija/hokachan/wiki/DNS-Blacklists-(DNSBL)-Information)


About
------------
H0K4CH4N is a free light-weight, fast, highly configurable and user-friendly
imageboard software package. It is written in PHP and has few dependencies.

H0K4CH4Nn is a fork of the (almost defunc'd) [Vichan](https://engine.vichan.net/) and (now defunc'd) 
[Tinyboard](http://github.com/savetheinternet/Tinyboard),

H0K4CH4N tries to combine useful features of Infinity, Vichan and TinyBoard.
While removing useless/outdated/unfinished/broken code.

Requirements
------------
1.	PHP >= 5.6 (PHP 7.0 is recommended)
2.	MySQL/MariaDB server
3.	[mbstring](http://www.php.net/manual/en/mbstring.installation.php) 
4.	[PHP GD](http://www.php.net/manual/en/intro.image.php)
5.	[PHP PDO](http://www.php.net/manual/en/intro.pdo.php)

We try to make sure H0K4CH4N is compatible with all major web servers and
operating systems. <strike>Vichan does not include an Apache ```.htaccess``` file nor does
it need one.</strike>  H0K4CH4N will require one and will include an example soon.

### Recommended
1.	MySQL/MariaDB server >= 5.5.3
2.	ImageMagick (command-line ImageMagick or GraphicsMagick preferred).
3.	<strike>[APC (Alternative PHP Cache)](http://php.net/manual/en/book.apc.php)</strike> 
	(from php 5.4 it changed to APCU and doesn't seem to work in php 7), 
	[XCache](http://xcache.lighttpd.net/) or
	[Memcached](http://www.php.net/manual/en/intro.memcached.php) 

Contributing
------------
You can contribute to H0K4CH4N by:
*	Developing patches/improvements/translations and using GitHub to submit pull requests
*	Providing feedback and suggestions
*	Writing/editing documentation
*	Fixing spelling errors. 
*	<strike>Donating</strike> Just kidding... anyone alse noticed the extreme growth in e-beggars? 

Installation
-------------
1.	Download and extract H0K4CH4N to your web directory.	
2.	Navigate to ```install.php``` in your web browser and follow the
	prompts.
3.	H0K4CH4N should now be installed. Log in to ```mod.php``` with the
	default username and password combination: **admin / password**. (Change this as soon as possible)
4. 	You should delete the tools folder if you don't need it
5.	Remove install.php if it is still inside your root folder. 
6.	install the central theme if you want to have a front page like on [H0K4CH4N](https://hokachan.com/)

See also: [Configuration Basics](https://web.archive.org/web/20121003095922/http://tinyboard.org/docs/?p=Config).

Upgrade
-------
To upgrade from any version of Tinyboard, Vichan or H0K4CH4N:

backup your ```inc/instance-config.php```, replace all your files in place, 
or remove the instance-config.php from the new version.
Remove the config file in the captcha folder if using.
Make sure you didn't modify the config.php
(don't remove boards etc.), then put ```inc/instance-config.php``` back and
finally run ```install.php```.

To migrate from a Kusaba X board, use http://github.com/vichan-devel/Tinyboard-Migration

Support
--------
H0K4CH4N is still beta software -- there are bound to be bugs. If you find a
bug, please report it.

If you need assistance with installing, configuring, or using vichan/hokachan, you may
find support from a variety of sources:

*	If you're unsure about how to enable or configure certain features, make
	sure you have read the comments in ```inc/config.php```, or read the wiki of this depository. 

### H0K4CH4N/Tinyboard/Vichan support
H0K4CH4N is based on a Tinyboard and Vichan, so these engines have very much in common. These
links may be helpful for you as well: 

*	Tinyboard documentation can be found [here](https://web.archive.org/web/20121016074303/http://tinyboard.org/docs/?p=Main_Page).
*	Vichan help can be found [here](http://int.vichan.net/devel/).

CLI tools
-----------------
There are a few command line interface tools, based on Tinyboard-Tools. These need
to be launched from a Unix shell account (SSH, or something). They are located in a ```tools/```
directory.

You actually don't need these tools for your imageboard functioning, they are aimed
at the power users.

Localisation
------------
Wanting to have vichan/hokachan in your language? You can contribute your translations at this URL:

https://www.transifex.com/projects/p/tinyboard-vichan-devel/

Oekaki
------
H0K4CH4N makes use of <strike>[wPaint](https://github.com/websanova/wPaint)</strike> use the link below for oekaki:

[ctrlcctrlv/wPaint](https://github.com/ctrlcctrlv/wPaint/tree/53b007f28cf0b6cec9998e5e79d56dae6feb8c69)

To enable oekaki, add all the scripts listed in `js/wpaint.js` to your `instance-config.php`.

WebM support
------------
Read `inc/lib/webm/README.md` for information about enabling webm.

H0K4CH4N/vichan API
----------
vichan provides by default a 4chan-compatible JSON API. For documentation on this, see:
https://github.com/vichan-devel/vichan-API/ .

License
--------
See [LICENSE.md](https://github.com/horija/H0K4CH4N/blob/H0K4M4ST3R/LICENSE.md).

