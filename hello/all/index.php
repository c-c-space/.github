<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  //現在の日時を取得
  $datetime = date('m-d');
  require('24sekki.php');
  require('../greeting.php');

  $sekki24 = "二十四節気";
  $sekkiDate = "24 Sekki";
  $title = $sekki24 . ' | ' . $sekkiDate;
  $thisDescription = "divided each of the Four Seasons into 6 according to the ecliptic longitude of the Sun.";

  require('../head.php');
  ?>

  <meta property="og:image" content="<?php echo $url . "summary.png"; ?>">
  <meta name="twitter:image" content="<?php echo $url . "summary.png"; ?>">

  <script src="/ver/js/menu.js"></script>
  <script src="/ver/js/modal.js"></script>

  <link rel="stylesheet" href="/ver/css/menu.css" />
  <link rel="stylesheet" href="/ver/css/controls.css" />
  <link rel="stylesheet" href="/ver/css/modal.css" />
  <link rel="stylesheet" href="../css/index.css" />
  <link rel="stylesheet" href="../css/www.css" media="print" />
</head>

<body>
  <?php require('../menu.php'); ?>

  <main id="log">
    <button type="button" onclick="changeHidden()" id="login-btn">
      <?php echo $title; ?>
    </button>
    <section id="collection" hidden>
      <select id="sekki">
        <option selected disabled>View The Collection</option>
      </select>
      <p><label for="sekki">コントロールを選択すると、二十四節気ごとの投稿一覧ページに移動します。</label></p>
    </section>
    <div>
      <h1>
        <code id="lastModified"><?php echo $sekkiDate; ?></code>
        <b><?php echo $sekki24; ?></b>
      </h1>
      <h2><?php echo $thisDescription; ?></h2>
    </div>
    <ul></ul>
  </main>

  <main id="hello" hidden>
    <section id="readme">
      <strong>
        The Year is divided into Four Seasons, <wbr />
        but traditionally the year was also divided up into 24 Sekki.<br />
      </strong>
      <strong>
        <?php echo $sekkiDate; ?>
        <?php echo $thisDescription; ?>
      </strong>
      <p>
        二十四節気は、四季 「春」「夏」「秋」「冬」
        それぞれを太陽の動きをもとに6つに分け、季節をあらわす名前をつけたもの。<br />
        中国の中原の気候をもとに作られたため、日本で体感する気候とは季節感が合わない名称や時期があります。 <br />
        また、その年によって節の始まりの日が1日程度前後することがあります。<br />
      </p>
    </section>
    <p class="noprint">
      On This Textboard, Posts are created and read every 24 Sekki to representing the changing seasons.<br />
      この掲示板では、季節の移り変わりを表すため、投稿を二十四節気ごとに記録・表示しています。
    </p>
    <hr>
    <p class="noprint">
      <input style="display: block; float: left;" type="button" onclick="changeHidden()" value="閉じる Close">
    </p>
  </main>

  <nav id="now">
    <section class="controls">
      <input id="cancel-btn" value="⏹" type="button" />
      <input id="pause-btn" value="⏸" type="button" />
      <input id="resume-btn" value="⏯" type="button" />
    </section>
    <button onclick="openModal()" type="button" hidden>?</button>
    <select id="sekki" hidden>
      <option selected disabled>View The Collection</option>
    </select>
  </nav>

  <dialog id="modal">
    <button type="button" id="closeModal">×</button>
  </dialog>

  <script src="24sekki.js"></script>
  <script type="text/javascript">
    sekkiJSON('../spring/sekki.json');
    sekkiJSON('../summer/sekki.json');
    sekkiJSON('../autumn/sekki.json');
    sekkiJSON('../winter/sekki.json');

    function changeHidden() {
      const mainAll = document.querySelectorAll('main')
      mainAll.forEach(main => {
        if (main.hidden == false) {
          main.hidden = true;
        } else {
          main.hidden = false;
        }
      })
    };
  </script>
</body>

</html>