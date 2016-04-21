<!DOCTYPE html>
<html class="<?=$pageName?>">
<head>
	<title>The Album Club | <?=ucfirst($pageName)?></title>
	<meta name="description" content="<?=$pageDescription?>">
	<meta name="keywords" content="<?=$pageKeywords?>">
	<meta name="author" content="The Album Club">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?=asset('default.css')?>">
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="<?=url('favicon.ico')?>" />

	<script type="text/javascript">
		!function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="3.1.0";
		analytics.load("zMt8PH0KzweVNJxeHedjMbvxUpLugo7j");
		analytics.page()
		}}();
	</script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="wrapper">
	<div id="header">
		<a href="/" title="The Album Club" class="header-logo"><img alt="Toronto band The Album Club's banner" title="The Album Club" src="<?=asset('header.png')?>"></a>
	</div>
	<div id="body">
