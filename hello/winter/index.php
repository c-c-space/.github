<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $thisSeason = "冬 Winter";
  $thisDate = "November 8 - February 3";
  $title = $thisSeason . ' | ' . $thisDate;
  $thisDescription = "「ふゆ」は万物が冷ゆ（ひゆ）る季節。";

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
      <label for="sekki">コントロールを選択すると、二十四節気ごとの投稿一覧ページに移動します。</label>
    </section>
    <div>
      <h1>
        <code id="lastModified"><?php echo $thisDate; ?></code>
        <b><?php echo $thisSeason; ?></b>
      </h1>
      <h2>
        <h2>
          <?php echo $thisDescription; ?><br />
          冬の真ん中、北半球では1年のうちで最も夜（日没から日の出まで）の時間が長い冬至を境に太陽が生まれ変わり、陽気が増え始めるとされている。
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
  <script src="../all/sekki.js"></script>
  <script type="text/javascript">
    colorSize()
    colorJSON('color.json')
    sekkiJSON('sekki.json')
  </script>
  <script src="../js/setStyles.js"></script>
</body>

</html>