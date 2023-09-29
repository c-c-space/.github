<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $datetime = date('05-20');
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
      <small>5月20日 ~ 5月25日頃</small>
      <br/>
      <ruby>
        蚕 <rp>(</rp><rt>かいこ</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        桑 <rp>(</rp><rt>くわ</rt><rp>)</rp>
      </ruby>
      を
      <ruby>
        盛 <rp>(</rp><rt>さか</rt><rp>)</rp>
      </ruby>
      んに
      <ruby>
        食 <rp>(</rp><rt>た</rt><rp>)</rp>
      </ruby>
      べ
      <ruby>
        始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
      </ruby>
      める
    </p>
    <p>
      <small>5月26日 ~ 5月30日頃</small>
      <br/>
      <ruby>
        紅花 <rp>(</rp><rt>べにばな</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        盛 <rp>(</rp><rt>さか</rt><rp>)</rp>
      </ruby>
      んに
      <ruby>
        咲 <rp>(</rp><rt>さ</rt><rp>)</rp>
      </ruby>
      く
    </p>
    <p>
      <small>5月31日 ~ 6月4日頃</small>
      <br/>
      <ruby>
        麦 <rp>(</rp><rt>むぎ</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        熟 <rp>(</rp><rt>じゅく</rt><rp>)</rp>
      </ruby>
      し
      <ruby>
        麦秋 <rp>(</rp><rt>ばくしゅう</rt><rp>)</rp>
      </ruby>
      となる
    </p>
  </section>
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