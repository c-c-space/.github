<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $datetime = date('02-04');
  require_once('../../all/24sekki.php');
  require_once('../../greeting.php');

  $title = $sekkiName . ' | ' . $date;
  $thisDescription = $description . ' | ' . $hello;

  require_once('../../head.php');
  ?>
  <meta property="og:image" content="<?php echo $url . "card.png"; ?>">
  <meta name="twitter:image" content="<?php echo $url . "card.png"; ?>">

  <link rel="stylesheet" href="/ver/css/modal.css" />
  <link rel="stylesheet" href="/hello/css/index.css" />
</head>

<body>
  <?php require('../../menu.php'); ?>

  <main id="log">
    <button type="button" onclick="changeHidden()" id="login-btn">
      七十二候 72 kō
    </button>
    <div>
      <h1>
        <b><?php echo $sekkiName; ?> <?php echo $sekki; ?></b><br />
        <code id="lastModified"><?php echo $date; ?></code>
      </h1>
      <h2><?php echo $description; ?></h2>
    </div>
    <ul id="ko"></ul>
    <?php
    require_once('../../all/alllog.php');
    require_once('../../log.php');
    ?>
  </main>

  <main id="hello" hidden>
    <section id="readme">
      <input type="button" onclick="changeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
      <p>
        <small>2月4日 ~ 2月8日頃</small><br />
        <ruby>
          東風 <rp>(</rp>
          <rt>とうふう</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          厚 <rp>(</rp>
          <rt>あつ</rt>
          <rp>)</rp>
        </ruby>
        い
        <ruby>
          氷 <rp>(</rp>
          <rt>こおり</rt>
          <rp>)</rp>
        </ruby>
        を
        <ruby>
          解 <rp>(</rp>
          <rt>と</rt>
          <rp>)</rp>
        </ruby>
        かし
        <ruby>
          始 <rp>(</rp>
          <rt>はじ</rt>
          <rp>)</rp>
        </ruby>
        める
      </p>
      <p>
        <small>2月9日 ~ 2月13日頃</small><br />
        <ruby>
          鶯 <rp>(</rp>
          <rt>うぐいす</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          山里 <rp>(</rp>
          <rt>やまざと</rt>
          <rp>)</rp>
        </ruby>
        で
        <ruby>
          鳴 <rp>(</rp>
          <rt>な</rt>
          <rp>)</rp>
        </ruby>
        き
        <ruby>
          始 <rp>(</rp>
          <rt>はじ</rt>
          <rp>)</rp>
        </ruby>
        める
      </p>
      <p>
        <small>2月14日 ~ 2月18日頃</small><br />
        <ruby>
          割 <rp>(</rp>
          <rt>わ</rt>
          <rp>)</rp>
        </ruby>
        れた
        <ruby>
          氷 <rp>(</rp>
          <rt>こおり</rt>
          <rp>)</rp>
        </ruby>
        の
        <ruby>
          間 <rp>(</rp>
          <rt>あいだ</rt>
          <rp>)</rp>
        </ruby>
        から
        <ruby>
          魚 <rp>(</rp>
          <rt>さかな</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          飛 <rp>(</rp>
          <rt>と</rt>
          <rp>)</rp>
        </ruby>
        び
        <ruby>
          出 <rp>(</rp>
          <rt>で</rt>
          <rp>)</rp>
        </ruby>
        る
      </p>
    </section>
  </main>

  <dialog id="modal">
    <button type="button" id="closeModal">×</button>
    <section id="about">
      <small><?php echo $date; ?></small>
      <h3>
        <?php echo $sekkiName; ?>
        <?php echo $sekki; ?>
      </h3>
      <p><?php echo $hello; ?></p>
    </section>
    <section id="color-size"></section>
  </dialog>

  <?php require('../../controls.html'); ?>
  <script src="../../all/72ko.js"></script>
  <script type="text/javascript">
    colorSize()
    colorJSON('../color.json')
    koJSON('ko.json')

    function changeHidden() {
      const mainAll = document.querySelectorAll('main');
      mainAll.forEach(main => {
        if (main.hidden == false) {
          main.hidden = true;
        } else {
          main.hidden = false;
        }
      })
    };
  </script>
  <script src="../../js/log.js"></script>
  <script src="../../js/setStyles.js"></script>
</body>

</html>
