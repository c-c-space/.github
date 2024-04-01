<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $datetime = date('01-20');
  require_once('../../all/24sekki.php');
  require_once('../../greeting.php');

  $title = $sekkiName . ' | ' . $date;
  $thisDescription = $description . ' | ' . $hello;

  require_once('../../head.php');
  ?>
  <meta property="og:image" content="<?php echo $url . "card.png"; ?>">
  <meta name="twitter:image" content="<?php echo $url . "card.png"; ?>">

  <script src="/ver/js/menu.js"></script>
  <script src="/ver/js/modal.js"></script>

  <link rel="stylesheet" href="/ver/css/menu.css" />
  <link rel="stylesheet" href="/ver/css/controls.css" />
  <link rel="stylesheet" href="/ver/css/modal.v1.css" />
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
        <small>1月20日 ~ 1月24日頃</small>
        <br />
        <ruby>
          蕗 <rp>(</rp>
          <rt>ふき</rt>
          <rp>)</rp>
        </ruby>
        の
        <ruby>
          薹 <rp>(</rp>
          <rt>とう</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          蕾 <rp>(</rp>
          <rt>つぼみ</rt>
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
        <small>1月25日 ~ 1月29日頃</small>
        <br />
        <ruby>
          沢 <rp>(</rp>
          <rt>さわ</rt>
          <rp>)</rp>
        </ruby>
        に
        <ruby>
          氷 <rp>(</rp>
          <rt>こおり</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          厚 <rp>(</rp>
          <rt>あつ</rt>
          <rp>)</rp>
        </ruby>
        く
        <ruby>
          張 <rp>(</rp>
          <rt>は</rt>
          <rp>)</rp>
        </ruby>
        りつめる
      </p>
      <p>
        <small>1月30日 ~ 2月3日頃</small>
        <br />
        <ruby>
          鶏 <rp>(</rp>
          <rt>にわとり</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          卵 <rp>(</rp>
          <rt>たまご</rt>
          <rp>)</rp>
        </ruby>
        を
        <ruby>
          産 <rp>(</rp>
          <rt>う</rt>
          <rp>)</rp>
        </ruby>
        み
        <ruby>
          始 <rp>(</rp>
          <rt>はじ</rt>
          <rp>)</rp>
        </ruby>
        める
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