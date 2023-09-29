<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $datetime = date('04-19');
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
        <small>4月19日 ~ 4月24日頃</small><br />
        <ruby>
          葦 <rp>(</rp>
          <rt>あし</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          芽 <rp>(</rp>
          <rt>め</rt>
          <rp>)</rp>
        </ruby>
        を
        <ruby>
          吹 <rp>(</rp>
          <rt>ふ</rt>
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
        <small>4月25日 ~ 4月29日頃</small><br />
        <ruby>
          霜 <rp>(</rp>
          <rt>しも</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          終 <rp>(</rp>
          <rt>お</rt>
          <rp>)</rp>
        </ruby>
        り
        <ruby>
          稲 <rp>(</rp>
          <rt>いね</rt>
          <rp>)</rp>
        </ruby>
        の
        <ruby>
          稲苗<rp>(</rp>
          <rt>なえ</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          生長<rp>(</rp>
          <rt>せいちょう</rt>
          <rp>)</rp>
        </ruby>
        する
      </p>
      <p>
        <small>4月30日 ~ 5月4日頃</small><br />
        <ruby>
          牡丹 <rp>(</rp>
          <rt>ぼたん</rt>
          <rp>)</rp>
        </ruby>
        の
        <ruby>
          花 <rp>(</rp>
          <rt>はな</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          咲 <rp>(</rp>
          <rt>さ</rt>
          <rp>)</rp>
        </ruby>
        く
      </p>
    </section>
    <?php require('../../all/72ko.html'); ?>
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