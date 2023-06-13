<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
date_default_timezone_set('Asia/Tokyo');

$title = '更新履歴';
$author = 'creative-community.space';
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

$description = 'New Contents & Version Up';
$source_file = 'index.csv';
$fp = fopen($source_file, 'r');

function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

while ($row = fgetcsv($fp)) {
  $rows[] = $row;
}

fclose($fp);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />

  <title><?php echo $title; ?> | <?php echo $author; ?></title>
  <meta name="author" content="<?php echo $author; ?>">
  <meta name="description" content="<?php echo $description; ?>">
  <meta property="og:title" content="<?php echo $title; ?> | <?php echo $author; ?>" />
  <meta property="og:description" content="<?php echo $description; ?>" />
  <meta property="og:site_name" content="<?php echo $_SERVER['HTTP_HOST']; ?>" />
  <meta property="og:url" content="<?php echo $url; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:image" content="<?php echo $url; ?>card.png" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:image" content="<?php echo $url; ?>card.png" />

  <script type="text/javascript">
  const yourInfo = JSON.parse(localStorage.getItem('yourInfo'));
  if(!localStorage.getItem('yourInfo')) {
    location.replace('/')
  }
  </script>

  <link rel="stylesheet" href="style.css" />
  <link rel="icon" href="/ver/icon.png" type="image/png">
  <link rel="icon" href="/ver/icon/android.png" sizes="192x192" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="/ver/icon/apple.png" sizes="180x180" type="image/png">
  <style>
  @media print {
    #menu {
      display: none;
    }
  }
  </style>
</head>
<body>
  <script src="/js/menu.js"></script>
  <header id="menu" hidden>
    <button id="js-button"><b></b></button>
    <nav id="contents">
      <a href="#" onclick="window.history.back(); return false;">
        <p><b>creative-community.space</b></p>
        <u>↩︎</u>
      </a>
      <a href="/profile/" target="_parent">
        <i>The Information About Network & Browser</i>
        <p><b>通信情報／ブラウザ等情報</b></p>
      </a>
      <a href="/ver/log/" target="_parent">
        <i>HTTP/1.1 on 195.179.236.11</i>
        <p><b>アクセス履歴 | Access Log</b></p>
      </a>
    </nav>
  </header>

  <form id="now" method="GET" class="hidden">
    <input type="radio" name="index" id="new" value="new">
    <label class="cc" for="new">New Contents</label>
    <input type="radio" name="index" id="update" value="update">
    <label class="cc" for="update">Version Up</label>
  </form>

  <ul id="log" class="hidden">
    <?php if (!empty($rows)) : ?>
      <?php foreach ($rows as $row) : ?>
        <li data-index="<?= h($row[0]) ?>">
          <span>
            <a href="<?= h($row[3]) ?>"><?= h($row[3]) ?></a>
          </span>
          <span><?= h($row[1]) ?></span>
          <span><?= h($row[2]) ?></span>
          <span><?= h($row[4]) ?></span>
        </li>
      <?php endforeach; ?>
    <?php else : ?>
      <li data-index="new">
        <span>
          <a href="#">creative-community.space</a>
        </span>
        <span>2021</span>
        <span>SEP 16</span>
        <span>Domain Registration 169 円 + 739 円 | Cloudflare 1,475 円</span>
      </li>
    <?php endif; ?>
    <li data-index="new">
      <span>
        <a href="/">We are Open</a>
      </span>
      <span>2021</span>
      <span>SEP 27</span>
      <span>creative-community.space</span>
    </li>
  </ul>

  <script type="text/javascript">
  let targets = document.querySelectorAll("#log li")
  let filter = document.querySelectorAll('input[name="index"]')

  if (filter) {
    //****** for all select ******
    for (let i of filter) {
      i.addEventListener('change', () => {
        let value = i.value
        let name = i.getAttribute('name')
        //*** for each target ***
        for (let ii of targets) {
          //*** delete hidden class ***
          ii.classList.remove('hidden')
          //*** check target every select ***
          let item_data = ii.getAttribute('data-' + name)
          //*** set hidden class ***
          if (value && value !== 'all' && value !== item_data && !ii.classList.contains('hidden')) {
            ii.classList.add('hidden')
          }
        }
      })
    }
  }
  </script>
</body>
</html>
