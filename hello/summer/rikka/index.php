<?php
$season = "summer";
$sekki = "rikka";
$seasonName = "夏";
$sekkiName = "立夏";
$date = "May 5 - May 19";
$description = "The Beginning of Summer";
$hello = "一年のうちで、もっとも過ごしやすい節。野山が新緑に彩られ、夏の気配が感じられるようになる。かえるが鳴き始め、竹の子が生えてくる頃。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<main id="hello" hidden>
  <section id="readme">
    <input type="button" class="color bgcolor" onclick="ChangeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
    <p>
      <small>5月5日 ~ 5月9日頃</small><br/>
      <ruby>
        蛙 <rp>(</rp><rt>かえる</rt><rp>)</rp>
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
      <small>5月10日 ~ 5月14日頃</small><br/>
      <ruby>
        蚯蚓 <rp>(</rp><rt>みみず</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        地上 <rp>(</rp><rt>ちじょう</rt><rp>)</rp>
      </ruby>
      に
      <ruby>
        這出 <rp>(</rp><rt>はいで</rt><rp>)</rp>
      </ruby>
      る
    </p>
    <p>
      <small>5月15日 ~ 5月19日頃</small><br/>
      <ruby>
        筍 <rp>(</rp><rt>たけのこ</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        生 <rp>(</rp><rt>は</rt><rp>)</rp>
      </ruby>
      えて
      <ruby>
        来 <rp>(</rp><rt>く</rt><rp>)</rp>
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
