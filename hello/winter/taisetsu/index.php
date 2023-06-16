<?php
$season = "winter";
$sekki = "taisetsu";
$seasonName = "冬";
$sekkiName = "大雪";
$date = "December 7 - December 21";
$description = "Cold winds blow from Siberia";
$hello = "山々は雪の衣を纏って冬の姿となり、動物たちが冬ごもりに入る時期。鮭が川を遡上し、鱈など冬の魚の漁が盛んになる。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<main id="hello" hidden>
  <section id="readme">
    <input type="button" class="color bgcolor" onclick="ChangeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
    <p>
      <small>12月7日 ~ 12月11日頃</small><br/>
      <ruby>
        天地 <rp>(</rp><rt>てんち</rt><rp>)</rp>
      </ruby>
      の
      <ruby>
        気 <rp>(</rp><rt>き</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        塞 <rp>(</rp><rt>ふさが</rt><rp>)</rp>
      </ruby>
      がって
      <ruby>
        冬 <rp>(</rp><rt>ふゆ</rt><rp>)</rp>
      </ruby>
      となる
    </p>
    <p>
      <small>12月12日 ~ 12月16日頃</small><br/>
      <ruby>
        熊 <rp>(</rp><rt>くま</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        冬眠 <rp>(</rp><rt>とうみん</rt><rp>)</rp>
      </ruby>
      のために
      <ruby>
        穴 <rp>(</rp><rt>あな</rt><rp>)</rp>
      </ruby>
      に
      <ruby>
        隠 <rp>(</rp><rt>かく</rt><rp>)</rp>
      </ruby>
      れる
    </p>
    <p>
      <small>12月17日 ~ 12月21日頃</small><br/>
      <ruby>
        鮭 <rp>(</rp><rt>さけ</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        群 <rp>(</rp><rt>むら</rt><rp>)</rp>
      </ruby>
      がり
      <ruby>
        川 <rp>(</rp><rt>かわ</rt><rp>)</rp>
      </ruby>
      を
      <ruby>
        上 <rp>(</rp><rt>のぼ</rt><rp>)</rp>
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
