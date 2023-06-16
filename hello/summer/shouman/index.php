<?php
$season = "summer";
$sekki = "shouman";
$seasonName = "夏";
$sekkiName = "小満";
$date = "May 20 - Jun 4";
$description = "Plants come into full leaf";
$hello = "あらゆる生命が満ちていく頃。陽気がよくなり、草木などの生物が次第に生長して生い茂る。西日本でははしり梅雨が現れる。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<main id="hello" hidden>
  <section id="readme">
    <input type="button" class="color bgcolor" onclick="ChangeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
    <p>
      <small>5月20日 ~ 5月25日頃</small><br/>
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
      <small>5月26日 ~ 5月30日頃</small><br/>
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
      <small>5月31日 ~ 6月4日頃</small><br/>
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
  <hr>
  <?php require('../../all/72ko.html');?>
</main>

<main id="log">
  <button type="button" id="enter-btn" onClick="ChangeHidden()">七十二候 72 kō</button>
  <hr>
  <div>
    <h1>
      <b>
        <?php echo $sekkiName;?> <?php echo $sekki;?>
      </b><br/>
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

<?php require('../../all/sekki.html'); ?>
