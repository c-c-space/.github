<?php
$season = "autumn";
$sekki = "shosho";
$seasonName = "秋";
$sekkiName = "処暑";
$date = "August 23 - September 7";
$description = "Hot weather abates";
$hello = "暑さが和らぐ頃。マツムシや鈴虫など心地よい虫の声が聞こえ、朝夕は心地よい涼風が吹く。同時に台風の季節も到来する。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<main id="hello" hidden>
  <section id="readme">
    <input type="button" class="color bgcolor" onclick="ChangeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
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
