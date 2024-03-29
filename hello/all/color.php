<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $title = '日本の伝統的な季節の色';
  $thisDescription = "The Collection of Traditional Seasonal Colors of Japan";

  require('../head.php');
  require('../greeting.php');
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
        <rt id="yomi"></rt>
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
    <button id="backBtn" type="button" onclick="window.location.replace('/hello/all/');">
      <b>↩︎</b>
    </button>
  </main>
  <script src="colors.js"></script>
  <script type="text/javascript">
    indexJSON('../spring/color.json');
    indexJSON('../summer/color.json');
    indexJSON('../autumn/color.json');
    indexJSON('../winter/color.json');
  </script>
</body>

</html>