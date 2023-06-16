<?php
$season = "winter";
$sekki = "shousetsu";
$seasonName = "冬";
$sekkiName = "小雪";
$date = "November 22 - December 6";
$description = "Snow appears on distant mountains";
$hello = "陽射しは弱まり、冷え込みが厳しくなる。木々の葉は落ち、平地にも初雪が舞い始める。「お歳暮」の準備をする期間。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<main id="hello" hidden>
  <section id="readme">
    <input type="button" class="color bgcolor" onclick="ChangeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
    <p>
      <small>11月22日 ~ 11月26日頃</small><br/>
      <ruby>
        虹 <rp>(</rp><rt>にじ</rt><rp>)</rp>
      </ruby>
      を
      <ruby>
        見 <rp>(</rp><rt>み</rt><rp>)</rp>
      </ruby>
      かけなくなる
    </p>
    <p>
      <small>11月27日 ~ 12月1日頃</small><br/>
      <ruby>
        北風 <rp>(</rp><rt>きたかぜ</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        木 <rp>(</rp><rt>こ</rt><rp>)</rp>
      </ruby>
      の
      <ruby>
        葉 <rp>(</rp><rt>は</rt><rp>)</rp>
      </ruby>
      を
      <ruby>
        払 <rp>(</rp><rt>はら</rt><rp>)</rp>
      </ruby>
      い
      <ruby>
        除 <rp>(</rp><rt>の</rt><rp>)</rp>
      </ruby>
      ける
    </p>
    <p>
      <small>12月2日 ~ 12月6日頃</small><br/>
      <ruby>
        橘 <rp>(</rp><rt>たちばな</rt><rp>)</rp>
      </ruby>
      の
      <ruby>
        実 <rp>(</rp><rt>み</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        黄色 <rp>(</rp><rt>きいろ</rt><rp>)</rp>
      </ruby>
      くなり
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
