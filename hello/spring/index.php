<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $thisSeason = "春 Spring";
  $thisDate = "February 4 - May 4";
  $title = $thisSeason . ' | ' . $thisDate;
  $thisDescription = "「はる」は万物が発る季節。";

  //現在の日時を取得
  $datetime = date('m-d');
  require('../all/greeting.php');
  require('../all/24sekki.php');
  require('../head.php');
  ?>

  <!--for Twitter-->
  <meta content="summary_large_image" name="twitter:card">
  <meta content="<?php echo $url; ?>" property="og:url">
  <meta content="<?php echo $url . "/summary.png"; ?>" property="og:image">
  <meta content="<?php echo $url . "/summary.png"; ?>" name="twitter:image:src">

  <link rel="stylesheet" href="/css/modal.css" />
  <link rel="stylesheet" href="/hello/css/index.css" />
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
        春の真ん中、昼夜の長さがほぼ当分に二分される(日本の場合、実際には昼の方が14分ほど長い)春分の日は国民の祝日。「自然をたたえ、生物をいつくしむ」日。
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