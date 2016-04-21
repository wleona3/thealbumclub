<?php
/**
 * IF THIS FILE GETS ANY BIGGER THAN A FEW FUNCTIONS START BREAKING IT UP AND WRITING CLASSES
 */

/**
 * Return configuration value
 *
 * @param $key String The config item to return
 * @return mixed
 */
function config($key) {
	global $_CONFIG;

	return isset($_CONFIG[$key]) ? $_CONFIG[$key] : false;
}

/**
 * Check if user is on mobile
 *
 * @return bool
 */
function is_mobile() {
	$mobileRegex = '/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i';

	return preg_match($mobileRegex, $_SERVER["HTTP_USER_AGENT"]) === 1;

}

/**
 * Require the correct file for the requested page.
 *
 * @param $pageName String File name of page. Without the extension.
 * @param $mobile Bool True if user is on mobile
 */
function load_page($pageName, $mobile) {
	if ($mobile && file_exists("../pages/$pageName-mobi.php")) {
		require_once("pages/$pageName-mobi.php");
	} elseif (file_exists("../pages/$pageName.php")) {
		require_once("pages/$pageName.php");
	} else {
		header("HTTP/1.0 404 Not Found");
		require_once("pages/404.php");
	}
}

/**
 * @param $path String The path to the page
 * @return String
 */
function url($path) {
	$proto = config('https') ? 'https://' : 'http://';

	$path = trim($path, '/');

	$url = $proto.config('hostname')."/$path";

	return $url;
}

/**
 * Returns path to specified asset
 *
 * @param $assetPath String Path to asset in the assets folder
 * @return String
 */
function asset($assetPath) {
	return url("assets/$assetPath");
}