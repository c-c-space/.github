<?php
$season = "spring";
$sekki = "kokuu";
$seasonName = "春";
$sekkiName = "穀雨";
$date = "April 19 - May 4";
$description = "Spring rains and seed sowing";
$hello = "田んぼや畑の準備が整い、それに合わせるように柔らかな春の雨が降る頃。この頃より変りやすい春の天気も安定し日差しも強まる。植物が緑一色に輝きはじめる。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<main id="hello" hidden>
  <section id="readme">
    <input type="button" class="color bgcolor" onclick="ChangeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
    <p>
      <small>4月19日 ~ 4月24日頃</small><br/>
      <ruby>
        葦 <rp>(</rp><rt>あし</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        芽 <rp>(</rp><rt>め</rt><rp>)</rp>
      </ruby>
      を
      <ruby>
        吹 <rp>(</rp><rt>ふ</rt><rp>)</rp>
      </ruby>
      き
      <ruby>
        始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
      </ruby>
      める
    </p>
    <p>
      <small>4月25日 ~ 4月29日頃</small><br/>
      <ruby>
        霜 <rp>(</rp><rt>しも</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        終 <rp>(</rp><rt>お</rt><rp>)</rp>
      </ruby>
      り
      <ruby>
        稲 <rp>(</rp><rt>いね</rt><rp>)</rp>
      </ruby>
      の
      <ruby>
        稲苗<rp>(</rp><rt>なえ</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        生長<rp>(</rp><rt>せいちょう</rt><rp>)</rp>
      </ruby>
      する
    </p>
    <p>
      <small>4月30日 ~ 5月4日頃</small><br/>
      <ruby>
        牡丹 <rp>(</rp><rt>ぼたん</rt><rp>)</rp>
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
