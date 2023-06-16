<?php
$season = "spring";
$sekki = "keichitsu";
$seasonName = "春";
$sekkiName = "啓蟄";
$date = "March 5 - March 19";
$description = "Insects emerge from the ground";
$hello = "冬眠をしていた虫が穴から出てくる頃。蝶々が飛びはじめ、柳の若芽が芽吹き、蕗のとうの花や桃の花が咲く頃。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<main id="hello" hidden>
  <section id="readme">
    <input type="button" class="color bgcolor" onclick="ChangeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
    <p>
      <small>3月5日 ~ 3月9日頃</small><br/>
      <ruby>
        冬籠 <rp>(</rp><rt>ふゆごも</rt><rp>)</rp>
      </ruby>
      りの
      <ruby>
        虫 <rp>(</rp><rt>むし</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        出 <rp>(</rp><rt>で</rt><rp>)</rp>
      </ruby>
      て
      <ruby>
        来 <rp>(</rp><rt>く</rt><rp>)</rp>
      </ruby>
      る
    </p>
    <p>
      <small>3月10日 ~ 3月14日頃</small><br/>
      <ruby>
        桃 <rp>(</rp><rt>もも</rt><rp>)</rp>
      </ruby>
      の
      <ruby>
        花 <rp>(</rp><rt>はな</rt><rp>)</rp>
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
      <small>3月15日 ~ 3月19日頃</small><br/>
      <ruby>
        青虫 <rp>(</rp><rt>あおむし</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        羽化 <rp>(</rp><rt>うか</rt><rp>)</rp>
      </ruby>
      して
      <ruby>
        紋白蝶 <rp>(</rp><rt>もんしろちょう</rt><rp>)</rp>
      </ruby>
      になる
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

<?php require('../../all/sekki.php'); ?>
