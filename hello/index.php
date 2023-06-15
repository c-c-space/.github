<?php
mb_language("ja");
mb_internal_encoding("UTF-8");

require('all/greeting.php');
require('all/24sekki.php');
$source_file = $season . "/". $sekki . "/". $timeframe . ".csv";
$fp = fopen($source_file, 'a+b');
$post = sizeof(file($source_file));

$seasonColor = $season . "/color.json";

while ($row = fgetcsv($fp)) {
  $rows[] = $row;
}

fclose($fp);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <script src="/js/index.js" async></script>
  <script src="js/readyState.js" async></script>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="css/controls.css" />
  <link rel="stylesheet" href="css/log.css" />
  <link rel="stylesheet" href="../css/menu.css" />
  <style media="screen">
  #hello #readme {
    margin: 0;
  }

  @media screen and (max-width: 750px) {
    #hello #readme {
      margin: 0;
    }
  }
  </style>
  <link rel="stylesheet" href="css/mobile.css" media="screen and (max-width: 750px)" />
  <link rel="icon" href="/ver/icon/android.png" sizes="192x192" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="/ver/icon/apple.png" sizes="180x180" type="image/png">
</head>

<body>
  <header id="menu" class="bgcolor" hidden>
    <button class="color bgcolor" id="js-button"><b></b></button>
    <nav id="contents">
      <a href="#" onclick="window.history.back(); return false;">
        <p><b>creative-community.space</b></p>
        <u>↩︎</u>
      </a>
      <a href="<?php echo $season;?>/">
        <i><?php echo $seasonDate;?></i>
        <p><b><?php echo $seasonName;?></b> <?php echo $season;?></p>
      </a>
      <a href="<?php echo $season;?>/<?php echo $sekki;?>/">
        <i>Now is the season named</i>
        <p><b><?php echo $sekkiName; ?></b> <?php echo $sekki; ?></p>
      </a>
    </nav>
  </header>
  <script src="/js/menu.js"></script>

  <main id="hello" hidden>
    <details>
      <summary>Speech to Text to Text to Speech</summary>
      <section id="howto"></section>
      <br>
    </details>
    <hr>
    <form method="post">
      <?php require('js/form.html');?>
      <hr/>
      <section id="next">
        <button type="button" class="color bgcolor" id="submit-btn">Submit</button>
        <button type="button" class="color bgcolor" id="back-btn" onclick="ChangeHidden()">Back</button>
      </section>
    </form>
  </main>
  <script src="js/recognition.js"></script>

  <main id="log">
    <button type="button" id="enter-btn" class="color bgcolor">Submit a Text of <?php echo $sekkiName;?> <?php echo $sekki;?></button>
    <div>
      <h1>
        <b><?php echo $greeting;?></b><br/>
        <code id="lastModified"></code>
      </h1>
      <h2>
        Now is The Season named<br/>
        <a href="<?php echo $season;?>/<?php echo $sekki;?>/"><?php echo $sekkiName;?></a>
        (<b><?php echo $sekki;?></b>) in
        <b><?php echo $season;?></b>
      </h2>
    </div>
    <?php
    function h($str) {
      return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }
    require('all/log.php');
    ?>
  </main>

  <nav id="now" class="hidden">
    <section class="controls">
      <input type="button" class="color bgcolor" id="cancel-btn" value="⏹">
      <input type="button" class="color bgcolor" id="pause-btn" value="⏸">
      <input type="button" class="color bgcolor" id="resume-btn" value="⏯">
    </section>
    <button id="openModal" class="color bgcolor" type="button">?</button>
  </nav>
  <script src="js/controls.js"></script>

  <dialog id="modal" class="color bgcolor">
    <h3>
      <u><small>Speech to Text to Text to Speech</small></u><br/>
      <?php echo $greeting;?>
    </h3>
    <button type="button" class="color bgcolor" id="closeButton">×</button>
    <section id="about">
      <p><i><?php echo $date;?></i></p>
      <h2>
        <strong><?php echo $sekkiName;?></strong> (<?php echo $sekki;?>)
        is <?php echo $description;?>
      </h2>
      <p><?php echo $hello;?></p>
    </section>
    <p>
      <smal>
        <u>Choose A Traditional Japanese Seasonal Color to Change Text & Background Colors</u>
      </small>
    </p>
    <label for="color">Text Color</label>
    <select class="color bgcolor" id="color"></select>
    <br/>
    <label for="bgcolor">Background Color</label>
    <select class="color bgcolor" id="bgcolor"></select>
    <hr/>
    <label for="fontSize">Font Size</label>
    <select class="color bgcolor" id="fontSize">
      <option value="13px">Small</option>
      <option value="16px" selected>Medium</option>
      <option value="20px">Large</option>
    </select>
    <hr/>
    コントロールから日本の伝統的な季節の色を選択すると、文字・背景の色が変更されます。
  </dialog>

  <script src="all/controls.js"></script>
  <script type="text/javascript">
  colorJSON('<?php echo $seasonColor;?>');
  </script>
  <script src="../profile/js/setStyles.js"></script>
  <script src="../js/log.js"></script>
</body>
</html>
