<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $datetime = date('11-22');
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
      <small>11月22日 ~ 11月26日頃</small>
      <br/>
      <ruby>
        虹 <rp>(</rp><rt>にじ</rt><rp>)</rp>
      </ruby>
      を
      <ruby>
        見 <rp>(</rp><rt>み</rt><rp>)</rp>
      </ruby>
      かけなくなる
    </p>
    <p>
      <small>11月27日 ~ 12月1日頃</small>
      <br/>
      <ruby>
        北風 <rp>(</rp><rt>きたかぜ</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        木 <rp>(</rp><rt>こ</rt><rp>)</rp>
      </ruby>
      の
      <ruby>
        葉 <rp>(</rp><rt>は</rt><rp>)</rp>
      </ruby>
      を
      <ruby>
        払 <rp>(</rp><rt>はら</rt><rp>)</rp>
      </ruby>
      い
      <ruby>
        除 <rp>(</rp><rt>の</rt><rp>)</rp>
      </ruby>
      ける
    </p>
    <p>
      <small>12月2日 ~ 12月6日頃</small>
      <br/>
      <ruby>
        橘 <rp>(</rp><rt>たちばな</rt><rp>)</rp>
      </ruby>
      の
      <ruby>
        実 <rp>(</rp><rt>み</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        黄色 <rp>(</rp><rt>きいろ</rt><rp>)</rp>
      </ruby>
      くなり
      <ruby>
        始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
      </ruby>
      める
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