<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
date_default_timezone_set('Asia/Tokyo');

$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";
?>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="format-detection" content="telephone=no" />

<link rel="icon" href="/ver/icon/favicon.png" type="image/png">
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">

<!-- Facebook Meta Tags -->
<meta property="og:url" content="<?php echo $url; ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:description" content="<?php echo $description; ?>">
<meta property="og:image" content="https://creative-community.space/ver/log/summary.png">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="creative-community.space">
<meta property="twitter:url" content="<?php echo $url; ?>">
<meta name="twitter:title" content="<?php echo $title; ?>">
<meta name="twitter:description" content="<?php echo $description; ?>">
<meta name="twitter:image" content="https://creative-community.space/ver/log/summary.png">

<script src="/ver/js/menu.js"></script>

<script type="text/javascript">
    if (!localStorage.getItem('yourInfo')) {
        window.onload = () => {
            const logAll = document.querySelectorAll('li.log, #now')
            logAll.forEach((logEach) => {
                logEach.remove()
            })
        }
    }
</script>

<link rel="stylesheet" href="/ver/css/menu.css" />
<link rel="stylesheet" href="/ver/css/ver.css" />