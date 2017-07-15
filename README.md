
H0K4CH4N - A PHP imageboard forked from Vichan and Tinyboard .
========================================================

Introduction
------------

<strike>Let's look into integrating the search form into the boards.</strike> Changed my mind and won't implement for the time being.

1st implementation of the updated post form has been added from openIB/infinity let me know if you experience bugs with this modification. next version will focus on improved css and other fixes.

If you imported the code with git just import the database manually. I have no clue why it gives vichan.boards table doesn't exist when you install from git but works fine when you install it from zip file.


Important Notice
------------

For news including bug fixes and state of this vichan clone.
[H0k4CH4N N3WS](https://hokachan.com/news.html)

Use this fork at your own risk.
Don't use this fork if you have no knowledge of fixing your own database and content. 
If I screw something up I know how to fix my database and restore my content. You may not.

Our future releases are as follows:

* dev6 current release: focusing on stability, bug fixes, using my weaponized autism to improve and remove dead code in the script, 
improving the central theme, 
making H0K4CH4N operational for php 7.0,   
implementing report captcha again now that we have cool-php-captcha (maybe not sure), 
Updating the post-form to resemble infinity more, 
implementing fixes from openIB/infinity,  
dev6 lasts until september.
* dev7: Looking if all works as intended. 
* dev8: reserved
* H0K4CH4N Version 6 Release (someday in the future, need to be 100% sure all works with no severe errors.)


Known Bugs
------------
* git installation database error (workaround is importing the instal.sql file manually in your database.)
* minor issues with moving threads with deleted images.
* ... 


Special Thanks
------------
* [Vichan](https://engine.vichan.net/) @czaks
* [Tinyboard](http://github.com/savetheinternet/Tinyboard) @savetheinternet 
* [Infinity](https://github.com/ctrlcctrlv/infinity) @ctrcctrlv
* [OpenIB](https://github.com/OpenIB/OpenIB) @Cipherwraith
* [Lainchan](https://github.com/lainchan/lainchan)


H0K4CH4N WIKI
------------
Credits go to @savetheinternet for making most of the [WIKI](https://github.com/H0K4/hokachan/wiki).

Important wiki links (under development)
* [DNSBL Setup](https://github.com/H0K4hokachan/wiki/DNS-Blacklists-(DNSBL)-Information)


About
------------
H0K4CH4N is a free light-weight, fast, highly configurable and user-friendly
imageboard software package. It is written in PHP and has few dependencies.

H0K4CH4Nn is a fork of [Vichan](https://engine.vichan.net/) and (now defunc'd) 
[Tinyboard](http://github.com/savetheinternet/Tinyboard),

H0K4CH4N tries to combine useful features of Infinity, Vichan and TinyBoard.
While removing useless/outdated/unfinished/broken code.

Requirements
------------
1.	PHP = 7.0 (PHP 7.0 is recommended and you should use this one if you want the get the least conflicts. 5.6 should work also but might not work when we improve it for 7.0)
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
3.	 [Memcached](http://www.php.net/manual/en/intro.memcached.php) keep cache on php unless you know what your are doing.

Contributing
------------
You can contribute to H0K4CH4N by:
*	Developing patches/improvements/translations and using GitHub to submit pull requests
*	Providing feedback and suggestions
*	Writing/editing documentation
*	Fixing spelling errors. 
*	Become a degenerate and visit https://hokachan.com

Installation
-------------
1.	Download and extract H0K4CH4N to your web directory.	
2.	Navigate to ```install.php``` in your web browser and follow the
	prompts.
3.	If you have an error with instalation try to import the install.sql database file manually and add your info in instance.config.php.
4.	H0K4CH4N should now be installed. Log in to ```mod.php``` with the
	default username and password combination: **admin / password**. (Change this as soon as possible)
5. 	You should delete the tools folder if you don't need it.
6.	Remove install.php if it is still inside your root folder. 
7.	install the central theme if you want to have a front page like on [H0K4CH4N](https://hokachan.com/)

See also: [Configuration Basics](https://web.archive.org/web/20121003095922/http://tinyboard.org/docs/?p=Config).

Upgrade
-------
To upgrade from any version of Tinyboard, Vichan or H0K4CH4N:

1.	backup your ```inc/instance-config.php```, replace all your files in place, or remove the instance-config.php from the new version.
2.	Make sure you didn't modify the config.php
3.	If you use central theme and modified it. Remove the central.php file and add the changes manually
4.	(don't remove boards etc.), then put ```inc/instance-config.php``` back
5.	finally run ```install.php```.

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
See [LICENSE.md](https://github.com/H0K4/H0K4CH4N/blob/H0K4M4ST3R/LICENSE.md).

