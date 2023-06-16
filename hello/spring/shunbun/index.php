<?php
$season = "spring";
$sekki = "shunbun";
$seasonName = "春";
$sekkiName = "春分";
$date = "March 20 - April 3";
$description = "The Spring Equinox";
$hello = "春分日をはさんで前後7日間が彼岸。雀が巣をつくり始め、桜が開花する頃。花冷えや寒の戻りがあるので暖かいと言っても油断は禁物。この後は昼の時間が長くなって行く。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<main id="hello" hidden>
  <section id="readme">
    <input type="button" class="color bgcolor" onclick="ChangeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
    <p>
      <small>3月20日 ~ 3月24日頃</small><br/>
      <ruby>
        雀 <rp>(</rp><rt>すずめ</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        巣 <rp>(</rp><rt>す</rt><rp>)</rp>
      </ruby>
      を
      <ruby>
        構 <rp>(</rp><rt>かま</rt><rp>)</rp>
      </ruby>
      え
      <ruby>
        始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
      </ruby>
      める
    </p>
    <p>
      <small>3月25日 ~ 3月29日頃</small><br/>
      <ruby>
        桜 <rp>(</rp><rt>さくら</rt><rp>)</rp>
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
      <small>3月30日 ~ 4月3日頃</small><br/>
      <ruby>
        遠 <rp>(</rp><rt>とお</rt><rp>)</rp>
      </ruby>
      くで
      <ruby>
        雷 <rp>(</rp><rt>かみなり</rt><rp>)</rp>
      </ruby>
      の
      <ruby>
        音 <rp>(</rp><rt>おと</rt><rp>)</rp>
      </ruby>
      がし
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
<script src="../../js/log.js"></script>

<?php require('../../all/sekki.html'); ?>
