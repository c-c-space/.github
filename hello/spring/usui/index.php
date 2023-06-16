<?php
$season = "spring";
$sekki = "usui";
$seasonName = "春";
$sekkiName = "雨水";
$date = "February 19 - March 4";
$description = "Snow melts into water";
$hello = "空から降るものが雪から雨に替わる頃。深く積もった雪も融け始める。草木がほんのり色づく様子や、春霞を楽しめる季節。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<main id="hello" hidden>
  <section id="readme">
    <input type="button" class="color bgcolor" onclick="ChangeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
    <p>
      <small>2月19日 ~ 2月23日頃</small><br/>
      <ruby>
        雨 <rp>(</rp><rt>あめ</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        降 <rp>(</rp><rt>ふ</rt><rp>)</rp>
      </ruby>
      って
      <ruby>
        土 <rp>(</rp><rt>つち</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        湿 <rp>(</rp><rt>しめ</rt><rp>)</rp>
      </ruby>
      り
      <ruby>
        気 <rp>(</rp><rt>け</rt><rp>)</rp>
      </ruby>
      を
      <ruby>
        含 <rp>(</rp><rt>ふく</rt><rp>)</rp>
      </ruby>
      む
    </p>
    <p>
      <small>2月24日 ~ 2月28日頃</small><br/>
      <ruby>
        霞 <rp>(</rp><rt>かすみ</rt><rp>)</rp>
      </ruby>
      がたなびき
      <ruby>
        始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
      </ruby>
      める
    </p>
    <p>
      <small>2月29日 ~ 3月4日頃</small><br/>
      <ruby>
        草木 <rp>(</rp><rt>くさき</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        芽吹 <rp>(</rp><rt>めぶ</rt><rp>)</rp>
      </ruby>
      き
      <ruby>
        始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
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
<?php require('../../all/sekki.php'); ?>
