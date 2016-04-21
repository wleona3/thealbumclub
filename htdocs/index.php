<?php

require_once '../seo.php';
require_once '../config.php';
require_once '../functions.php';

$pageName = isset($_GET['name']) ? $_GET['name'] : 'music';
$pageDescription = isset($SEO[$pageName]) ? htmlspecialchars($SEO[$pageName]['description']) : '';
$pageKeywords = isset($SEO[$pageName]) ? htmlspecialchars($SEO[$pageName]['keywords']) : '';

$mobile = is_mobile();

require_once '../pages/header.php';
require_once '../pages/sidebar.php';
load_page($pageName, $mobile);
require_once '../pages/footer.php';
