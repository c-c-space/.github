<?php
$season = "summer";
$sekki = "boushu";
$seasonName = "夏";
$sekkiName = "芒種";
$date = "Jun 5 - Jun 20";
$description = "Time to plant rice seedlings";
$hello = "稲の穂先のように芒(とげのようなもの)のある穀物の種まきをする頃という意味だが、現在の種まきは大分早まっている。梅の実が熟し、梅雨のじめじめした空模様がはじまる。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<main id="hello" hidden>
  <section id="readme">
    <input type="button" class="color bgcolor" onclick="ChangeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
    <p>
      <small>6月5日 ~ 6月9日頃</small><br/>
      <ruby>
        螳螂 <rp>(</rp><rt>かまきり</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        生 <rp>(</rp><rt>う</rt><rp>)</rp>
      </ruby>
      まれ
      <ruby>
        出 <rp>(</rp><rt>で</rt><rp>)</rp>
      </ruby>
      る
    </p>
    <p>
      <small>6月10日 ~ 6月15日頃</small><br/>
      <ruby>
        腐 <rp>(</rp><rt>くさ</rt><rp>)</rp>
      </ruby>
      った
      <ruby>
        草 <rp>(</rp><rt>くさ</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        蒸 <rp>(</rp><rt>む</rt><rp>)</rp>
      </ruby>
      れ
      <ruby>
        蛍 <rp>(</rp><rt>ほたる</rt><rp>)</rp>
      </ruby>
      になる
    </p>
    <p>
      <small>6月16日 ~ 6月20日頃</small><br/>
      <ruby>
        梅 <rp>(</rp><rt>うめ</rt><rp>)</rp>
      </ruby>
      の
      <ruby>
        実 <rp>(</rp><rt>み</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        黄 <rp>(</rp><rt>き</rt><rp>)</rp>
      </ruby>
      ばんで
      <ruby>
        熟 <rp>(</rp><rt>じゅく</rt><rp>)</rp>
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
