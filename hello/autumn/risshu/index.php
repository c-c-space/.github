<?php
$season = "autumn";
$sekki = "risshu";
$seasonName = "秋";
$sekkiName = "立秋";
$date = "August 8 - August 22";
$description = "The Beginning of Autumn";
$hello = "一年で一番暑い頃。一番暑いと言うことはあとは涼しくなるばかり。季節の挨拶が「残暑見舞い」に替わる。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<main id="hello" hidden>
  <section id="readme">
    <input type="button" class="color bgcolor" onclick="ChangeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
    <p>
      <small>8月8日 ~ 8月12日頃</small><br/>
      <ruby>
        涼 <rp>(</rp><rt>すず</rt><rp>)</rp>
      </ruby>
      しい
      <ruby>
        風 <rp>(</rp><rt>かぜ</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        立 <rp>(</rp><rt>た</rt><rp>)</rp>
      </ruby>
      ち
      <ruby>
        始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
      </ruby>
      める
    </p>
    <p>
      <small>8月13日 ~ 8月17日頃</small><br/>
      <ruby>
        蜩 <rp>(</rp><rt>ひぐらし</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        鳴 <rp>(</rp><rt>な</rt><rp>)</rp>
      </ruby>
      き
      <ruby>
        始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
      </ruby>
      める
    </p>
    <p>
      <small>8月18日 ~ 8月22日頃</small><br/>
      <ruby>
        深 <rp>(</rp><rt>ふか</rt><rp>)</rp>
      </ruby>
      い
      <ruby>
        霧 <rp>(</rp><rt>きり</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        立 <rp>(</rp><rt>た</rt><rp>)</rp>
      </ruby>
      ち
      <ruby>
        込 <rp>(</rp><rt>こ</rt><rp>)</rp>
      </ruby>
      める
    </p>
  </section>
  <hr>
  <?php require('../../all/72ko.html');?>
</main>

<main id="log">
  <button type="button" id="enter-btn" onClick="ChangeHidden()">七十二候 72 kō</button>
  <hr>
  <div>
    <h1>
      <b><?php echo $sekkiName;?> <?php echo $sekki;?></b><br/>
      <code id="lastModified"><?php echo $date;?></code>
    </h1>
    <h2><?php echo $description;?></h2>
  </div>
  <section>
    <ul id="ko"></ul>
  </section>
  <?php
  function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
  }
  require('../../all/log.php');
  ?>
</main>

<?php require('../../all/controls.html'); ?>
<script src="../../js/log.js"></script>

<?php require('../../all/sekki.php'); ?>
