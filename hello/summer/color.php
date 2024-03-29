<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $season = "summer";
  $thisSeason = "夏";
  $thisDate = "May 5 - August 7";
  $title = '日本の伝統的な' . $thisSeason . 'の色';
  $thisDescription = "The Collection of Traditional Seasonal Colors of Japan";

  require('../head.php');
  ?>

  <meta content="<?php echo $url . "/summary.png"; ?>" property="og:image">
  <meta content="<?php echo $url . "/summary.png"; ?>" name="twitter:image:src">

  <link rel="stylesheet" href="../css/colors.css" />
</head>

<body>
  <dialog id="modal">
    <h1>
      <ruby>
        <b id="name"><?php echo $title; ?></b>
        <rp>(</rp>
        <rt id="yomi"><?php echo $season . ' | ' . $thisDate; ?></rt>
        <rp>)</rp>
      </ruby>
    </h1>
    <code id="hex"></code>
    <p id="note"><?php echo $thisDescription; ?></p>
    <p id="description" class="noprint">
      <small>ウェブサイトを出力する</small><br>
      <a href="#" onclick="window.print();">WWW to Print</a>
      (Recommended to borderless printing)
    </p>
    <p id="hidden" hidden></p>
    <button type="button">×</button>
  </dialog>
  <main>
    <ul id="color"></ul>
    <button id="backBtn" type="button" onclick="window.location.replace('/hello/<?php echo $season; ?>/');">
      <b>↩︎</b>
    </button>
  </main>
  <script src="../all/colors.js"></script>
  <script type="text/javascript">
    indexJSON('color.json');
  </script>
</body>