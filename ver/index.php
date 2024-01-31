<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
date_default_timezone_set('Asia/Tokyo');

$title = '更新履歴 | creative-community.space';
$description = 'New Contents & Version Up';
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";
$source_file = 'index.csv';
$fp = fopen($source_file, 'r');

function h($str)
{
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
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="format-detection" content="telephone=no" />

  <script type="text/javascript">
    if (!localStorage.getItem('yourInfo')) {
      location.replace('/')
    }
  </script>

  <!-- HTML Meta Tags -->
  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">

  <!-- Facebook Meta Tags -->
  <meta property="og:url" content="<?php echo $url; ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:description" content="<?php echo $description; ?>">
  <meta property="og:image" content="<?php echo $url; ?>card.png">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta property="twitter:domain" content="creative-community.space">
  <meta property="twitter:url" content="<?php echo $url; ?>">
  <meta name="twitter:title" content="<?php echo $title; ?>">
  <meta name="twitter:description" content="<?php echo $description; ?>">
  <meta name="twitter:image" content="<?php echo $url; ?>card.png">

  <script src="js/menu.js"></script>

  <link rel="icon" href="icon/favicon.png" type="image/png">
  <link rel="stylesheet" href="css/menu.css" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header id="menu" hidden>
    <button><b></b></button>
    <menu id="contents">
      <a href="#" onclick="window.history.back(); return false;">
        <p>creative-community.space</p>
        <u>↩︎</u>
      </a>
      <a href="../profile/" target="_parent">
        <i>The Information About Network & Browser</i>
        <b>通信情報／ブラウザ等情報</b>
      </a>
      <a href="log/" target="_parent">
        <i>HTTP/1.1 on 195.179.236.11</i>
        <b>アクセス履歴 | Access Log</b>
      </a>
    </menu>
  </header>

  <main>
    <form id="now" method="GET">
      <h1>creative-community.space</h1>
      <p>
        <input type="radio" name="index" id="new" value="new">
        <label class="cc" for="new">New Contents</label>
        <input type="radio" name="index" id="update" value="update">
        <label class="cc" for="update">Version Up</label>
      </p>
      <p>
        <input type="radio" name="index" id="all" value="all">
        <label class="cc" for="all">View All</label>
      </p>
    </form>

    <ul id="log">
      <?php if (!empty($rows)) : ?>
        <?php foreach ($rows as $row) : ?>
          <li data-index="<?= h($row[0]) ?>">
            <span>
              <a href="<?= h($row[3]) ?>"><?= h($row[4]) ?></a>
            </span>
            <span><?= h($row[1]) ?></span>
            <span><?= h($row[2]) ?></span>
            <span><?= h($row[5]) ?></span>
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
  </main>

  <script type="text/javascript">
    const birthday = "2021-09-16T10:02:02Z";
    let now = new Date();
    let today = now.getFullYear();
    const age = document.querySelector("#now h1");

    function counter() {
      age.textContent = `${((new Date() - new Date(birthday)) / 31557600000).toFixed(10)}`;
    }

    function start() {
      setTimeout(() => {
        counter();
        requestAnimationFrame(start);
      }, 1000 / 30);
    }

    start();

    //****** for all select ******
    let filter = document.querySelectorAll('input[name="index"]')
    for (let i of filter) {
      i.addEventListener('change', () => {
        let value = i.value
        let name = i.getAttribute('name')
        //*** for each target ***
        let targets = document.querySelectorAll("#log li")
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
  </script>
</body>

</html>