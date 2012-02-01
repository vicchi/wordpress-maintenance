<?php
// Inspired by and adapted from Kevin Leary's custom maintenance page
// http://www.kevinleary.net/custom-maintenance-page-wordpress/
$protocol = $_SERVER["SERVER_PROTOCOL"];
if ('HTTP/1.1' != $protocol && 'HTTP/1.0' != $protocol) {
	$protocol = 'HTTP/1.0';
}

header ("$protocol 503 Service Unavailable", true, 503);
header ('Content-Type: text/html; charset=utf-8');
header ('Retry-After: 600');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Maintenance Time Is Also Coffee Time</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style type="text/css">	
		@import url(../wp-admin/css/login.css);
		@import url(../wp-admin/css/colors-fresh.css);
		html body, html {
			background: #FFFFFF;
		}

		#content-outer {
			position: absolute;
			top: 50%;
			left: 0px;
			width: 100%;
			height: 1px;
			overflow: visible;
		}

		.coffee-machine {
			width: 256px;
			height: 256px;
			display: block;
			position: relative;
			left: 450px;
			top: -50px;
			z-index: 5;
		}

		#content {
			color:#605850;
			font: 14px/1.6em "Helvetica Neue", Arial, Helvetica, sans-serif;
			width: 420px;
			height: auto;
			margin-left: -322px;
			position: absolute;
			left: 50%;
			top: -150px;
			-moz-border-radius: 11px;
			-khtml-border-radius: 11px;
			-webkit-border-radius: 11px;
			border-radius: 5px;
			background: #FFFFFF;
			padding: 25px 200px 10px 25px;
		}

		#content h1 {
			line-height: 1.2em;
			margin-top: -257px;
			color: #51518C;
		}

		#content p {
			margin: 0 0 1.2em;
		}

		h1,h2,h3 {
			font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
			color: #51518C;
		}
		h1 { margin: 0 0 .6em;  }
		h2 { margin: 1.07em 0 .535em; }
		h3 { margin: 1.14em 0 .57em; }
		h4 { margin: 1.23em 0 .615em; }
		h5 { margin: 1.33em 0 .67em; }
		h6 { margin: 1.6em 0 .8em; }
		strong {
			color:#51518C;
		}
		</style>
</head>
<body>
	<div id="content-outer">
		<div id="content">
			<img class="coffee-machine" src="/wp-content/coffee_machine-256.png" />
			<h1>It's time for an espresso ...</h1>
			<p>This site is undergoing a quick bit of maintenance or upgrading; this should take <strong>no more than 5 minutes</strong>.</p>
			<p>Sorry for the inconvenience; why not have a nice cup of espresso? By the time it's brewed, the site should be back.</p>
		</div>
	</div>
</body>
<?php
die();
?>

</html>
