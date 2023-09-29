<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $sekki24 = "二十四節気";
  $sekkiDate = "24 Sekki";
  $title = $sekki24 . ' | ' . $sekkiDate;
  $thisDescription = "divided each of the Four Seasons into 6 according to the ecliptic longitude of the Sun.";

  require('greeting.php');
  require('24sekki.php');
  require('../head.php');
  ?>

  <!--for Twitter-->
  <meta content="summary_large_image" name="twitter:card">
  <meta content="<?php echo $url; ?>" property="og:url">
  <meta content="<?php echo $url; ?>summary.png" property="og:image">
  <meta content="<?php echo $url; ?>summary.png" name="twitter:image:src">
</head>

<body>
  <?php require('../menu.php'); ?>

  <main id="log">
    <button type="button" onclick="changeHidden()" id="login-btn">
      二十四節気 24 Sekki
    </button>
    <div>
      <h1>
        <code id="lastModified"><?php echo $sekkiDate; ?></code>
        <b><?php echo $sekki24; ?></b>
      </h1>
      <h2><?php echo $thisDescription; ?></h2>
    </div>
    <ul></ul>
    <section class="controls">
      <input type="button" class="color bgcolor" id="cancel-btn" value="⏹">
      <input type="button" class="color bgcolor" id="pause-btn" value="⏸">
      <input type="button" class="color bgcolor" id="resume-btn" value="⏯">
      <select hidden id="sekki">
        <option selected disabled>View The Collection</option>
      </select>
    </section>
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
        二十四節気は、四季「春」「夏」「秋」「冬」 <wbr />
        それぞれを太陽の動きをもとに6つに分け、<wbr />
        季節をあらわす名前をつけたもの。<br />
        中国の中原の気候をもとに作られたため、日本で体感する気候とは季節感が合わない名称や時期があります。 <wbr />
        また、その年によって節の始まりの日が1日程度前後することがあります。<br />
      </p>
    </section>
    <br>
    <p class="noprint">
      On This Textboard, Posts are created and read every 24 Sekki to representing the changing seasons.<br />
      この掲示板では、季節の移り変わりを表すため、投稿を二十四節気ごとに記録・表示しています。
    </p>
    <hr>
    <a style="display: block; float: right;" class="noprint" href="#" onclick="window.print();">WWW to Print</a>
    <input class="noprint" type="button" onclick="ChangeHidden()" value="閉じる Close">
  </main>

  <script src="sekki.js"></script>
  <script type="text/javascript">
    sekkiJSON('../spring/sekki.json');
    sekkiJSON('../summer/sekki.json');
    sekkiJSON('../autumn/sekki.json');
    sekkiJSON('../winter/sekki.json');
  </script>
</body>

</html>