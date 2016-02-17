<?php
require_once 'seo.php';
$pageName = isset($_GET['name']) ? $_GET['name'] : 'music';
$pageDescription = isset($SEO[$pageName]) ? htmlspecialchars($SEO[$pageName]['description']) : '';
$pageKeywords = isset($SEO[$pageName]) ? htmlspecialchars($SEO[$pageName]['keywords']) : '';

function is_mobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

function load_page($pageName, $mobile) {
	if ($mobile && file_exists("pages/$pageName-mobi.php")) {
		require_once("pages/$pageName-mobi.php");
	} elseif (file_exists("pages/$pageName.php")) {
		require_once("pages/$pageName.php");
	} else {
		header("HTTP/1.0 404 Not Found");
		require_once("pages/404.php");
	}
}

$mobile = is_mobile();

require_once 'pages/header.php';
require_once 'pages/sidebar.php';
load_page($pageName, $mobile);
require_once 'pages/footer.php';
