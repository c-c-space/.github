<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $thisSeason = "夏 Summer";
  $thisDate = "May 5 - August 7";
  $title = $thisSeason . ' | ' . $thisDate;
  $thisDescription = "「なつ」は熱（ねつ）の季節。";

  //現在の日時を取得
  $datetime = date('m-d');
  require('../all/greeting.php');
  require('../all/24sekki.php');
  require('../head.php');
  ?>

  <meta property="og:image" content="<?php echo $url . "summary.png"; ?>">
  <meta name="twitter:image" content="<?php echo $url . "summary.png"; ?>">

  <link rel="stylesheet" href="/ver/css/modal.css" />
  <link rel="stylesheet" href="../css/index.css" />
  <link rel="stylesheet" href="../css/www.css" media="print" />
</head>

<body>
  <?php require('../menu.php'); ?>

  <main id="log">
    <section id="collection">
      <select id="sekki">
        <option selected disabled>View The Collection</option>
      </select>
      <p><label for="sekki">コントロールを選択すると、二十四節気ごとの投稿一覧ページに移動します。</label></p>
    </section>
    <div>
      <h1>
        <code id="lastModified"><?php echo $thisDate; ?></code>
        <b><?php echo $thisSeason; ?></b>
      </h1>
      <h2>
        <?php echo $thisDescription; ?><br />
        夏の真ん中、北半球では1年のうちで最も昼（日の出から日没まで）の時間が長い夏至は、日本の大部分で梅雨の最中で、あまり実感されない。
      </h2>
    </div>
    <ul></ul>
  </main>

  <dialog id="modal">
    <button type="button" id="closeModal">×</button>
    <section id="about">
      <h3><?php echo $thisSeason; ?></h3>
      <p><?php echo $thisDescription; ?></p>
    </section>
    <section id="color-size"></section>
  </dialog>

  <?php require('../controls.html'); ?>
  <script src="../all/24sekki.js"></script>
  <script type="text/javascript">
    colorSize()
    colorJSON('color.json')
    sekkiJSON('sekki.json')
  </script>
  <script src="../js/setStyles.js"></script>
</body>

</html>
