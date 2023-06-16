<?php
$season = "summer";
$sekki = "taisho";
$seasonName = "夏";
$sekkiName = "大暑";
$date = "July 23 - August 7";
$description = "Hottest time of the year";
$hello = "最も暑い節という意味だが実際は次の節の方が暑い。学校は夏休みに入り、空には雲の峰が高々とそびえるようになる。夏の土用の時期。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<main id="hello" hidden>
  <section id="readme">
    <input type="button" class="color bgcolor" onclick="ChangeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
    <p>
      <small>7月23日 ~ 7月27日頃</small><br/>
      <ruby>
        桐 <rp>(</rp><rt>きり</rt><rp>)</rp>
      </ruby>
      の
      <ruby>
        花 <rp>(</rp><rt>はな</rt><rp>)</rp>
      </ruby>
      が(
      <ruby>
        来年 <rp>(</rp><rt>らいねん</rt><rp>)</rp>
      </ruby>
      の)
      <ruby>
        蕾 <rp>(</rp><rt>つぼみ</rt><rp>)</rp>
      </ruby>
      をつける
    </p>
    <p>
      <small>7月28日 ~ 8月1日頃</small><br/>
      <ruby>
        土 <rp>(</rp><rt>つち</rt><rp>)</rp>
      </ruby>
      がしめって
      <ruby>
        蒸 <rp>(</rp><rt>む</rt><rp>)</rp>
      </ruby>
      し
      <ruby>
        暑 <rp>(</rp><rt>あつ</rt><rp>)</rp>
      </ruby>
      くなる
    </p>
    <p>
      <small>8月2日 ~ 8月7日頃</small><br/>
      <ruby>
        時 <rp>(</rp><rt>とき</rt><rp>)</rp>
      </ruby>
      として
      <ruby>
        大雨 <rp>(</rp><rt>おおあめ</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        降 <rp>(</rp><rt>ふ</rt><rp>)</rp>
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
<script src="../../js/log.js"></script>

<?php require('../../all/sekki.php'); ?>
