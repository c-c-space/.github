<?php
$season = "winter";
$sekki = "rittou";
$seasonName = "冬";
$sekkiName = "立冬";
$date = "November 8 - November 21";
$description = "The Beginning of Winter";
$hello = "木枯らしが吹き、北国や高山からは初雪の知らせも届く頃。冬枯れの景色の中で山茶花や水仙の花が咲きはじめる。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<main id="hello" hidden>
  <section id="readme">
    <input type="button" class="color bgcolor" onclick="ChangeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
    <p>
      <small>11月8日 ~ 11月12日頃</small><br/>
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
      <small>11月13日 ~ 11月17日頃</small><br/>
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
      <small>11月18日 ~ 11月21日頃</small><br/>
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
