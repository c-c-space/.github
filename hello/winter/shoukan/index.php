<?php
$season = "winter";
$sekki = "shoukan";
$seasonName = "冬";
$sekkiName = "小寒";
$date = "January 6 - January 19";
$description = "Cold weather nears its peak";
$hello = "「寒の入り」といい、寒さが厳しくなる頃。これから節分までの期間が「寒」。「寒中見舞い」を出しはじめる時期。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<main id="hello" hidden>
  <section id="readme">
    <input type="button" class="color bgcolor" onclick="ChangeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
    <p>
      <small>1月6日 ~ 1月10日頃</small><br/>
      <ruby>
        芹 <rp>(</rp><rt>せり</rt><rp>)</rp>
      </ruby>
      がよく
      <ruby>
        生育 <rp>(</rp><rt>せいいく</rt><rp>)</rp>
      </ruby>
      する
    </p>
    <p>
      <small>1月11日 ~ 1月15日頃</small><br/>
      <ruby>
        地中 <rp>(</rp><rt>ちちゅう</rt><rp>)</rp>
      </ruby>
      で
      <ruby>
        凍 <rp>(</rp><rt>こお</rt><rp>)</rp>
      </ruby>
      った
      <ruby>
        泉 <rp>(</rp><rt>いずみ</rt><rp>)</rp>
      </ruby>
      が
      <ruby>
        動 <rp>(</rp><rt>うご</rt><rp>)</rp>
      </ruby>
      き
      <ruby>
        始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
      </ruby>
      める
    </p>
    <p>
      <small>1月16日 ~ 1月19日頃</small><br/>
      <ruby>
        雄 <rp>(</rp><rt>おす</rt><rp>)</rp>
      </ruby>
      の
      <ruby>
        雉 <rp>(</rp><rt>きじ</rt><rp>)</rp>
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
