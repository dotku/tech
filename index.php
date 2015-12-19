<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="I realized that there are some new technologies are popular in the Bay Area right now. Here is the incomplete list for sharing">
		<meta name="author" content="Weijing Lin">
		<meta name="keywords" content="Bay Area, Tech, Job, Tech Tree, Technology, Silicon Valley, San Francisco">
		<title>Bay Area Technology Trend 2015</title>
		<link type="text/css" rel="stylesheet" href="/css/general.css"/>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
		<!-- Latest compiled and minified JavaScript -->
		
		<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<style>
			#footer {
				line-height: 40px;
			}
			.container {
				max-width: 800px;
			}
		</style>
	</head>
	<body>
		<div class="container">
		<h1>Tech</h1>
		<p>Hello, world! This is Jay from San Francisco. Well, While I was looking for a Software Engineer last couple weeks in San Francisco Bay Area, I realized that there are some new technologies are popular in the Bay Area right now. Here is the incomplete list for sharing. If you found any info need be updated, please don't hesitate to email me via weijingjaylin [at] gmail.com.</p>
		<p>
			Thank you,
		</p>
		<h2>Programming Languages</h2>
		<p>There are over hundred programming languages on the market; however, the most using programming language are about 20~30. Here are the programming languages ranked in popularity in 2015.</p>
		<ul class="dirList">
			<li>Java</li>
			<li>C++</li>
			<li>C</li>
			<li>C#</li>
			<li>Objective-C</li>
			<li>HTML</li>
			<li>CSS</li>
			<li>JavaScript</li>
			<li>Python</li>
			<li>PHP</li>
			<li>Ruby</li>
			<li>NodeJS</li>
		</ul>
		<h2>Database &amp; Data Format</h2>
		<ul>
			<li>MySQL
			<li>MariaDB
			<li>MangoDB
			<li>Oracle PL/SQL
			<li>Redis
			<li>JSON
			<li>XML
		</ul>
		<h2>Frameworks, Components &amp; Library for Python</h2>
		<ul>
			<li>Django
		</ul>
		<h2>PHP</h2>
		<h3>Frameworks, Components &amp; Library</h3>
		<ul>
			<li>Symfony
			<li>Laravel
			<li>PhalconPHP
			<li>Aura
			<li>Composer
			<li>Guzzle
			<li>Memcached
		</ul>
		<h3>Testing Tools and IDE</h3>
		<ul>
			<li>PHPUnit
			<li>PHPStrom
			<li>Aptana
		</ul>
		<h3>Popular Open Source Projects</h3>
		<ul>
			<li>WordPress
			<li>Drupal
			<li>Joomla
			<li>Magento
		</ul>
		<h2>Frameworks for Front End Development</h2>
		<ul>
			<li>jQuery
			<li>Backbone.JS
			<li>Require.JS
			<li>Bootstrap
			<li>Angular.JS
			<li>CanJS
		</ul>
		<h2>Operation System</h2>
		<ul>
			<li>Linux (CentOS, Ubuntu)
			<li>Unix (FreeBSD, OpenBSD, NetBSD, OpenSafari)
			<li>Windows
		</ul>
		<h2>Server Software</h2>
		<ul>
			<li>Apache
			<li>nginx
		</ul>
		<h2>Version Control</h2>
		<ul>
			<li>Git
			<li>Subversion
		</ul>
		<h2>Service</h2>
		<ul>
			<li>AWS (Amazon Web Services)
			<li>Microsoft Azure
		</ul>
		<h2>Design Pattern</h2>
		<ul>
			<li>MVC
			<li>OOP
		</ul>
		<h2>Architecture</h2>
		<ul>
			<li>PHP WAMP/LAMP/LNMP/WNMP
			<li>SOA (RESTful)
		</ul>
		<h2>Other</h2>
		<ul>
			<li>Grunt
			<li>Karma
			<li>Kafka
			<li>ZeroMQ
			<li>Vagrant
			<li>Scalability
		</ul>
		<p> There are many good website for looking for a Software Engineer Job</p>
		<ul>
			<li>http://www.indeed.com</li>
			<li>http://www.dice.com</li>
			<li>http://www.cybercoders.com</li>
			<li>http://cmp.jobs</li>
			<li>http://www.linkedin.com</li>
			<li>http://www.glassdoor.com</li>
		</ul>
		<div>
			Created: June 21, 2015<br/>
			Updated: Junly 19, 2015
		</div>
		</div>
		<footer id="footer" class="container">
			&copy; 2015 WeijingLin.name
		</footer>
		<script>
			$(function(){
				$(".dirList li").each(function(i, o){
					var keyword = $(o).text().toLowerCase();
					var sUrl = './foldername'; // no exists folder
					
					keyword = keyword.replace('#', 'sharp');
					keyword = keyword.replace('++', 'pp');
					/*
					if (keyword == 'c') {
						keyword = 'lang-c'; // !bug handle
						window.console ? console.log('c') : '';
					}*/
					
					sUrl = './' + keyword;
					$.ajax({
						url: sUrl, 
						type: 'HEAD',
						success: function(){
							$(o).html('<a href="./' + keyword+'">' + $(o).text() + '</a>');
						},
						error: function(jqXHR, textStatus, errorThrown){
							if (jqXHR.status = 404) {
								// do nothing ...
							}
						}
					})
				})
			})
		</script>
	</body>
</html>