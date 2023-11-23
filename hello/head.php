<?php
mb_language("ja");
mb_internal_encoding("UTF-8");

$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";
?>

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="format-detection" content="telephone=no" />
<script src="/ver/js/menu.js"></script>
<script src="/ver/js/modal.js"></script>

<!--og:meta-->
<meta content="website" property="og:type">
<title><?php echo $title; ?></title>
<meta content="<?php echo $title; ?>" property="og:title">
<meta content="<?php echo $thisDescription; ?>" name="description">
<meta content="<?php echo $thisDescription; ?>" name="og:description">
<link rel="icon" href="/ver/icon/favicon.png" type="image/png">

<link rel="stylesheet" href="/ver/css/menu.css" />
<link rel="stylesheet" href="/ver/css/controls.css" />