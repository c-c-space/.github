<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $datetime = date('09-23');
  require_once('../../all/24sekki.php');
  require_once('../../all/greeting.php');

  $title = $sekkiName . ' | ' . $date;
  $thisDescription = $description . ' | ' . $hello;

  require_once('../../head.php');
  ?>
  <meta content="<?php echo $url; ?>" property="og:url">

  <link rel="stylesheet" href="/css/modal.css" />
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
        <small>9月23日 ~ 9月27日頃</small><br />
        <ruby>
          雷 <rp>(</rp>
          <rt>かみなり</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          鳴 <rp>(</rp>
          <rt>な</rt>
          <rp>)</rp>
        </ruby>
        り
        <ruby>
          響 <rp>(</rp>
          <rt>ひび</rt>
          <rp>)</rp>
        </ruby>
        かなくなる
      </p>
      <p>
        <small>9月28日 ~ 10月2日頃</small><br />
        <ruby>
          虫 <rp>(</rp>
          <rt>むし</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          土中 <rp>(</rp>
          <rt>どちゅう</rt>
          <rp>)</rp>
        </ruby>
        に
        <ruby>
          掘 <rp>(</rp>
          <rt>ほ</rt>
          <rp>)</rp>
        </ruby>
        った
        <ruby>
          穴 <rp>(</rp>
          <rt>あな</rt>
          <rp>)</rp>
        </ruby>
        をふさぐ
      </p>
      <p>
        <small>10月3日 ~ 10月7日頃</small><br />
        <ruby>
          田畑 <rp>(</rp>
          <rt>たはた</rt>
          <rp>)</rp>
        </ruby>
        の
        <ruby>
          水 <rp>(</rp>
          <rt>みず</rt>
          <rp>)</rp>
        </ruby>
        を
        <ruby>
          干 <rp>(</rp>
          <rt>ほ</rt>
          <rp>)</rp>
        </ruby>
        し
        <ruby>
          始 <rp>(</rp>
          <rt>はじ</rt>
          <rp>)</rp>
        </ruby>
        める
      </p>
    </section>
    <hr>
    <?php require('../../all/72ko.html'); ?>
  </main>

  <dialog id="modal">
    <button type="button" id="closeModal">×</button>
    <section id="about">
      <h3>
        <?php echo $sekkiName; ?>
        <?php echo $sekki; ?>
      </h3>
      <p><?php echo $description; ?></p>
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