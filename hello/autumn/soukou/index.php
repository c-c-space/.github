<?php
$season = "autumn";
$sekki = "soukou";
$seasonName = "秋";
$sekkiName = "霜降";
$date = "October 24 - November 7";
$description = "The Season of Frost";
$hello = "北国や山間部では、朝霜が降りて草木が白く化粧をする頃。野の花の数は減り始め、代わって山を紅葉が飾る。人々や動物たちの冬仕度が始まる。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<main id="hello" hidden>
  <section id="readme">
    <input type="button" class="color bgcolor" onclick="ChangeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
    <p>
      <small>10月24日 ~ 10月28日頃</small><br/>
      <ruby>
        霜 <rp>(</rp><rt>しも</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        降 <rp>(</rp><rt>ふ</rt><rp>)</rp>
      </ruby>
      り
      <ruby>
        始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
      </ruby>
      める
    </p>
    <p>
      <small>10月29日 ~ 11月2日頃</small><br/>
      <ruby>
        小雨 <rp>(</rp><rt>こさめ</rt><rp>)</rp>
      </ruby>
      がしとしと
      <ruby>
        降 <rp>(</rp><rt>ふ</rt><rp>)</rp>
      </ruby>
      る
    </p>
    <p>
      <small>11月3日 ~ 11月7日頃</small><br/>
      <ruby>
        楓 <rp>(</rp><rt>かえで</rt><rp>)</rp>
      </ruby>
      や
      <ruby>
        蔦 <rp>(</rp><rt>つた</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        黄葉 <rp>(</rp><rt>こうよう</rt><rp>)</rp>
      </ruby>
      する
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
<?php require('../../all/sekki.php'); ?>
