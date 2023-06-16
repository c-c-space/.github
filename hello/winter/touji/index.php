<?php
$season = "winter";
$sekki = "touji";
$seasonName = "冬";
$sekkiName = "冬至";
$date = "December 22 - January 5";
$description = "The Winter Solstice";
$hello = "冬至日より日が伸び始めることから、古くには年の始点と考えられた。栄養価の高いかぼちゃを食べ、柚子湯に浸かり無病息災を願う。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<main id="hello" hidden>
  <section id="readme">
    <input type="button" class="color bgcolor" onclick="ChangeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
    <p>
      <small>12月22日 ~ 12月26日頃</small><br/>
      <ruby>
        夏枯草 <rp>(</rp><rt>かごそう</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        芽 <rp>(</rp><rt>め</rt><rp>)</rp>
      </ruby>
      を
      <ruby>
        出 <rp>(</rp><rt>だ</rt><rp>)</rp>
      </ruby>
      す
    </p>
    <p>
      <small>12月27日 ~ 12月31日頃</small><br/>
      <ruby>
        大鹿 <rp>(</rp><rt>おおしか</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        角 <rp>(</rp><rt>つの</rt><rp>)</rp>
      </ruby>
      を
      <ruby>
        落 <rp>(</rp><rt>お</rt><rp>)</rp>
      </ruby>
      とす
    </p>
    <p>
      <small>1月1日 ~ 1月5日頃</small><br/>
      <ruby>
        雪 <rp>(</rp><rt>ゆき</rt><rp>)</rp>
      </ruby>
      の
      <ruby>
        下 <rp>(</rp><rt>した</rt><rp>)</rp>
      </ruby>
      で
      <ruby>
        麦 <rp>(</rp><rt>むぎ</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        芽 <rp>(</rp><rt>め</rt><rp>)</rp>
      </ruby>
      を
      <ruby>
        出 <rp>(</rp><rt>だ</rt><rp>)</rp>
      </ruby>
      す
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
