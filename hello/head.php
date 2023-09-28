<?php
mb_language("ja");
mb_internal_encoding("UTF-8");

require('/hello/all/greeting.php');
require('/hello/all/24sekki.php');

$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";
?>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="format-detection" content="telephone=no" />
<script src="/js/menu.js"></script>
<script src="/js/modal.js"></script>

<!--og:meta-->
<meta content="website" property="og:type">
<title><?php echo $title; ?></title>
<meta content="<?php echo $title; ?>" property="og:title">
<meta content="<?php echo $description; ?>" name="description">
<meta content="<?php echo $description; ?>" name="og:description">
<link rel="icon" href="/ver/icon/favicon.png" type="image/png">

<link rel="stylesheet" href="/css/menu.css" />
<link rel="stylesheet" href="/css/modal.css" />
<link rel="stylesheet" href="/css/controls.css" />
<link rel="stylesheet" href="/hello/css/index.css" />
