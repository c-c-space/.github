<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $thisSeason = "秋 Autumn";
  $thisDate = "August 8 - November 7";
  $title = $thisSeason . ' | ' . $thisDate;
  $description = "「あき」は草木が紅（あか）く染まる季節。";

  mb_language("ja");
  mb_internal_encoding("UTF-8");
  
  require('../all/greeting.php');
  require('../all/24sekki.php');
  require('../head.php');
  ?>

  <!--for Twitter-->
  <meta content="summary_large_image" name="twitter:card">
  <meta content="<?php echo $url; ?>" property="og:url">
  <meta content="<?php echo $url . "/summary.png"; ?>" property="og:image">
  <meta content="<?php echo $url . "/summary.png"; ?>" name="twitter:image:src">
</head>

<body>
  <?php require('../menu.php'); ?>

  <main id="log">
    <section id="collection" class="color bgcolor">
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
        <?php echo $description; ?><br />
        秋の真ん中、昼夜の長さがほぼ当分に二分される(日本の場合、実際には昼の方が14分ほど長い)秋分の日は国民の祝日。「祖先をうやまい、なくなつた人々をしのぶ」日。
      </h2>
    </div>
    <ul></ul>
  </main>

  <dialog id="modal">
    <button type="button" id="closeModal">×</button>
    <section id="about">
      <h3><?php echo $thisSeason; ?></h3>
      <p><?php echo $description; ?></p>
    </section>
    <section id="color-size"></section>
  </dialog>

  <?php require('../controls.html'); ?>
  <script src="/hello/js/controls.js"></script>
  <script type="text/javascript">
    colorSize()
    colorJSON('color.json')
  </script>
  <script src="/hello/js/setStyles.js"></script>
</body>

</html>