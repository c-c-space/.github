<?php
$season = "winter";
$sekki = "daikan";
$seasonName = "冬";
$sekkiName = "大寒";
$date = "January 20 - February 3";
$description = "Coldest time of the year";
$hello = "一年で一番寒さの厳しい頃。逆の見方をすれば、これからは暖かくなると言うこと。春はもう目前。蕗の花が咲き、鶏が卵を産みはじめ、春の足音が聞こえはじめる。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<main id="hello" hidden>
  <section id="readme">
    <input type="button" class="color bgcolor" onclick="ChangeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
    <p>
      <small>1月20日 ~ 1月24日頃</small><br/>
      <ruby>
        蕗 <rp>(</rp><rt>ふき</rt><rp>)</rp>
      </ruby>
      の
      <ruby>
        薹 <rp>(</rp><rt>とう</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        蕾 <rp>(</rp><rt>つぼみ</rt><rp>)</rp>
      </ruby>
      を
      <ruby>
        出 <rp>(</rp><rt>だ</rt><rp>)</rp>
      </ruby>
      す
    </p>
    <p>
      <small>1月25日 ~ 1月29日頃</small><br/>
      <ruby>
        沢 <rp>(</rp><rt>さわ</rt><rp>)</rp>
      </ruby>
      に
      <ruby>
        氷 <rp>(</rp><rt>こおり</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        厚 <rp>(</rp><rt>あつ</rt><rp>)</rp>
      </ruby>
      く
      <ruby>
        張 <rp>(</rp><rt>は</rt><rp>)</rp>
      </ruby>
      りつめる
    </p>
    <p>
      <small>1月30日 ~ 2月3日頃</small><br/>
      <ruby>
        鶏 <rp>(</rp><rt>にわとり</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        卵 <rp>(</rp><rt>たまご</rt><rp>)</rp>
      </ruby>
      を
      <ruby>
        産 <rp>(</rp><rt>う</rt><rp>)</rp>
      </ruby>
      み
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
