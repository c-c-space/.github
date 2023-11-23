<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $datetime = date('08-23');
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
      <small>8月23日 ~ 8月27日頃</small><br/>
      <ruby>
        綿 <rp>(</rp><rt>わた</rt><rp>)</rp>
      </ruby>
      を
      <ruby>
        包 <rp>(</rp><rt>つつ</rt><rp>)</rp>
      </ruby>
      む
      <ruby>
        萼 <rp>(</rp><rt>がく</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        開 <rp>(</rp><rt>ひら</rt><rp>)</rp>
      </ruby>
      く
    </p>
    <p>
      <small>8月28日 ~ 9月2日頃</small><br/>
      ようやく
      <ruby>
        暑 <rp>(</rp><rt>あつ</rt><rp>)</rp>
      </ruby>
      さが
      <ruby>
        暑 <rp>(</rp><rt>しずま</rt><rp>)</rp>
      </ruby>
      まる
    </p>
    <p>
      <small>9月3日 ~ 9月7日頃</small><br/>
      <ruby>
        稲 <rp>(</rp><rt>いね</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        実 <rp>(</rp><rt>みの</rt><rp>)</rp>
      </ruby>
      る
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