<?php
mb_language("ja");
mb_internal_encoding("UTF-8");

$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";
?>

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="format-detection" content="telephone=no" />
<link rel="icon" href="/ver/icon/favicon.png" type="image/png">

<!-- HTML Meta Tags -->
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $thisDescription; ?>">

<!-- Facebook Meta Tags -->
<meta property="og:url" content="<?php echo $url; ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:description" content="<?php echo $thisDescription; ?>">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="creative-community.space">
<meta property="twitter:url" content="<?php echo $url; ?>">
<meta name="twitter:title" content="<?php echo $title; ?>">
<meta name="twitter:description" content="<?php echo $thisDescription; ?>">