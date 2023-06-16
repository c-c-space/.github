<?php
$season = "summer";
$sekki = "geshi";
$seasonName = "夏";
$sekkiName = "夏至";
$date = "Jun 21 - July 6";
$description = "The Summer Solstice";
$hello = "一年で昼の時間が一番長くなる節だが、日本の大部分は梅雨の時期であまり実感されない。花しょうぶや紫陽花などの雨の似合う花が咲き、暑さが増して来る頃。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<main id="hello" hidden>
  <section id="readme">
    <input type="button" class="color bgcolor" onclick="ChangeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
    <p>
      <small>6月21日 ~ 6月25日頃</small><br/>
      <ruby>
        夏枯草 <rp>(</rp><rt>かごそう</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        枯 <rp>(</rp><rt>か</rt><rp>)</rp>
      </ruby>
      れる
    </p>
    <p>
      <small>6月26日 ~ 6月30日頃</small><br/>
      <ruby>
        菖蒲 <rp>(</rp><rt>あやめ</rt><rp>)</rp>
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
    <p>
      <small>7月1日 ~ 7月6日頃</small><br/>
      <ruby>
        烏柄杓 <rp>(</rp><rt>からすびしゃく</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        生 <rp>(</rp><rt>は</rt><rp>)</rp>
      </ruby>
      える
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
