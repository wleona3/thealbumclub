<?php
$pageName = isset($_GET['name']) ? $_GET['name'] : 'music';
require_once 'header.php';
require_once 'sidebar.php';
require_once "$pageName.php";
require_once 'footer.php';
