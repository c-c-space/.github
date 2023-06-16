<?php
$season = "spring";
$sekki = "risshun";
$seasonName = "春";
$sekkiName = "立春";
$date = "February 4 - February 18";
$description = "The Beginning of Spring";
$hello = "旧暦では、一年のはじまりは立春から。まだ寒さの厳しい時期だが日脚は徐々に伸び、暖かい地方では梅が咲き始める。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<main id="hello" hidden>
  <section id="readme">
    <input type="button" class="color bgcolor" onclick="ChangeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
    <p>
      <small>2月4日 ~ 2月8日頃</small><br/>
      <ruby>
        東風 <rp>(</rp><rt>とうふう</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        厚 <rp>(</rp><rt>あつ</rt><rp>)</rp>
      </ruby>
      い
      <ruby>
        氷 <rp>(</rp><rt>こおり</rt><rp>)</rp>
      </ruby>
      を
      <ruby>
        解 <rp>(</rp><rt>と</rt><rp>)</rp>
      </ruby>
      かし
      <ruby>
        始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
      </ruby>
      める
    </p>
    <p>
      <small>2月9日 ~ 2月13日頃</small><br/>
      <ruby>
        鶯 <rp>(</rp><rt>うぐいす</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        山里 <rp>(</rp><rt>やまざと</rt><rp>)</rp>
      </ruby>
      で
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
      <small>2月14日 ~ 2月18日頃</small><br/>
      <ruby>
        割 <rp>(</rp><rt>わ</rt><rp>)</rp>
      </ruby>
      れた
      <ruby>
        氷 <rp>(</rp><rt>こおり</rt><rp>)</rp>
      </ruby>
      の
      <ruby>
        間 <rp>(</rp><rt>あいだ</rt><rp>)</rp>
      </ruby>
      から
      <ruby>
        魚 <rp>(</rp><rt>さかな</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        飛 <rp>(</rp><rt>と</rt><rp>)</rp>
      </ruby>
      び
      <ruby>
        出 <rp>(</rp><rt>で</rt><rp>)</rp>
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
