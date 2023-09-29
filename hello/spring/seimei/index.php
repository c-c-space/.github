<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $datetime = date('04-04');
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
      <small>4月4日 ~ 4月8日頃</small><br/>
      <ruby>
        燕 <rp>(</rp><rt>つばめ</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        南 <rp>(</rp><rt>みなみ</rt><rp>)</rp>
      </ruby>
      からやって
      <ruby>
        来 <rp>(</rp><rt>く</rt><rp>)</rp>
      </ruby>
      る
    </p>
    <p>
      <small>4月9日 ~ 4月13日頃</small><br/>
      <ruby>
        雁 <rp>(</rp><rt>がん</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        北 <rp>(</rp><rt>きた</rt><rp>)</rp>
      </ruby>
      へ
      <ruby>
        渡 <rp>(</rp><rt>わた</rt><rp>)</rp>
      </ruby>
      って
      <ruby>
        行 <rp>(</rp><rt>い</rt><rp>)</rp>
      </ruby>
      く
    </p>
    <p>
      <small>4月14日 ~ 4月18日頃</small><br/>
      <ruby>
        雨 <rp>(</rp><rt>あめ</rt><rp>)</rp>
      </ruby>
      の
      <ruby>
        後 <rp>(</rp><rt>あと</rt><rp>)</rp>
      </ruby>
      に
      <ruby>
        虹 <rp>(</rp><rt>にじ</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        出始 <rp>(</rp><rt>ではじ</rt><rp>)</rp>
      </ruby>
      める
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