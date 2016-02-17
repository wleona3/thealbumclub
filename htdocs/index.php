<?php
require_once 'seo.php';
$pageName = isset($_GET['name']) ? $_GET['name'] : 'music';
$pageDescription = isset($SEO[$pageName]) ? htmlspecialchars($SEO[$pageName]['description']) : '';
$pageKeywords = isset($SEO[$pageName]) ? htmlspecialchars($SEO[$pageName]['keywords']) : '';
require_once 'header.php';
require_once 'sidebar.php';
require_once "$pageName.php";
require_once 'footer.php';
