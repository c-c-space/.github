<?php
$season = "autumn";
$sekki = "hakuro";
$seasonName = "秋";
$sekkiName = "白露";
$date = "September 8 - September 22";
$description = "Dew forms on the leaves";
$hello = "野に顔を出しはじめた薄の穂に朝露がつき、白い粒のように光って見える頃。涼風に幾分の肌寒さを感じさせる冷風が混じり始める。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<main id="hello" hidden>
  <section id="readme">
    <input type="button" class="color bgcolor" onclick="ChangeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
    <p>
      <small>9月8日 ~ 9月12日頃</small><br/>
      <ruby>
        草 <rp>(</rp><rt>くさ</rt><rp>)</rp>
      </ruby>
      に
      <ruby>
        降 <rp>(</rp><rt>お</rt><rp>)</rp>
      </ruby>
      りた
      <ruby>
        露 <rp>(</rp><rt>つゆ</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        白 <rp>(</rp><rt>しろ</rt><rp>)</rp>
      </ruby>
      く
      <ruby>
        光 <rp>(</rp><rt>ひか</rt><rp>)</rp>
      </ruby>
      る
    </p>
    <p>
      <small>9月13日 ~ 9月17日頃</small><br/>
      <ruby>
        鶺鴒 <rp>(</rp><rt>せきれい</rt><rp>)</rp>
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
      <small>9月18日 ~ 9月22日頃</small><br/>
      <ruby>
        燕 <rp>(</rp><rt>つばめ</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        南 <rp>(</rp><rt>みなみ</rt><rp>)</rp>
      </ruby>
      へ
      <ruby>
        帰 <rp>(</rp><rt>かえ</rt><rp>)</rp>
      </ruby>
      って
      <ruby>
        行 <rp>(</rp><rt>い</rt><rp>)</rp>
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
