<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $datetime = date('11-08');
  require_once('../../all/24sekki.php');
  require_once('../../greeting.php');

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
      <small>11月8日 ~ 11月12日頃</small>
      <br/>
      <ruby>
        山茶花 <rp>(</rp><rt>さざんか</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        咲 <rp>(</rp><rt>さ</rt><rp>)</rp>
      </ruby>
      き
      <ruby>
        始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
      </ruby>
      める
    </p>
    <p>
      <small>11月13日 ~ 11月17日頃</small>
      <br/>
      <ruby>
        大地 <rp>(</rp><rt>だいち</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        凍 <rp>(</rp><rt>こお</rt><rp>)</rp>
      </ruby>
      り
      <ruby>
        始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
      </ruby>
      める
    </p>
    <p>
      <small>11月18日 ~ 11月21日頃</small>
      <br/>
      <ruby>
        水仙 <rp>(</rp><rt>すいせん</rt><rp>)</rp>
      </ruby>
      の
      <ruby>
        花 <rp>(</rp><rt>はな</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        咲 <rp>(</rp><rt>さ</rt><rp>)</rp>
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
