<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $datetime = date('12-22');
  require_once('../../all/24sekki.php');
  require_once('../../all/greeting.php');

  $title = $sekkiName . ' | ' . $date;
  $thisDescription = $description . ' | ' . $hello;

  require_once('../../head.php');
  ?>
  <meta content="<?php echo $url; ?>" property="og:url">

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
        <small>12月22日 ~ 12月26日頃</small><br />
        <ruby>
          夏枯草 <rp>(</rp>
          <rt>かごそう</rt>
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
          出 <rp>(</rp>
          <rt>だ</rt>
          <rp>)</rp>
        </ruby>
        す
      </p>
      <p>
        <small>12月27日 ~ 12月31日頃</small><br />
        <ruby>
          大鹿 <rp>(</rp>
          <rt>おおしか</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          角 <rp>(</rp>
          <rt>つの</rt>
          <rp>)</rp>
        </ruby>
        を
        <ruby>
          落 <rp>(</rp>
          <rt>お</rt>
          <rp>)</rp>
        </ruby>
        とす
      </p>
      <p>
        <small>1月1日 ~ 1月5日頃</small><br />
        <ruby>
          雪 <rp>(</rp>
          <rt>ゆき</rt>
          <rp>)</rp>
        </ruby>
        の
        <ruby>
          下 <rp>(</rp>
          <rt>した</rt>
          <rp>)</rp>
        </ruby>
        で
        <ruby>
          麦 <rp>(</rp>
          <rt>むぎ</rt>
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
          出 <rp>(</rp>
          <rt>だ</rt>
          <rp>)</rp>
        </ruby>
        す
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