<?php
mb_language("ja");
mb_internal_encoding("UTF-8");

require('all/greeting.php');
require('all/24sekki.php');
$source_file = $season . "/" . $sekki . "/" . $timeframe . ".csv";
$seasonColor = $season . "/color.json";
$fp = fopen($source_file, 'a+b');
$post = sizeof(file($source_file));

while ($row = fgetcsv($fp)) {
  $rows[] = $row;
}

fclose($fp);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="format-detection" content="telephone=no" />
  <script src="../js/menu.js"></script>
  <script src="js/readyState.js" async></script>

  <!--og:meta-->
  <meta content="website" property="og:type">
  <title>Hello | creative-community.space</title>
  <meta content="Hello | creative-community.space" property="og:title">
  <meta content="This is a Online Textboard that works with Web Speech API" name="description">
  <meta content="This is a Online Textboard that works with Web Speech API" name="og:description">

  <!--for Twitter-->
  <meta content="summary_large_image" name="twitter:card">
  <meta content="https://creative-community.space/hello/" property="og:url">
  <meta content="https://creative-community.space/hello/summary.png" property="og:image">
  <meta content="https://creative-community.space/hello/summary.png" name="twitter:image:src">

  <link rel="icon" href="../ver/icon/favicon.png" type="image/png">
  <link rel="stylesheet" href="../css/menu.css" />
  <link rel="stylesheet" href="../css/modal.css" />
  <link rel="stylesheet" href="../css/controls.css" />
  <link rel="stylesheet" href="css/index.css" />
  <style media="print">
    main,
    #log section {
      break-before: page;
      break-after: page;
    }

    #hello {
      display: none;
    }
  </style>
</head>

<body>
  <header id="menu" hidden>
    <button><b></b></button>
    <menu id="contents">
      <a href="#" onclick="window.history.back(); return false;">
        <p>creative-community.space</p>
        <u>↩︎</u>
      </a>
      <a href="<?php echo $season; ?>/">
        <i><?php echo $seasonDate; ?></i>
        <b><?php echo $seasonName; ?></b>
        <u><?php echo $season; ?></u>
      </a>
      <a href="<?php echo $season; ?>/<?php echo $sekki; ?>/">
        <i>Now is the season named</i>
        <b><?php echo $sekkiName; ?></b>
        <u><?php echo $sekki; ?></u>
      </a>
    </menu>
  </header>

  <main id="log">
    <button type="button" onclick="changeHidden()" id="login-btn">
      Submit a Text of <?php echo $sekkiName; ?> <?php echo $sekki; ?>
    </button>
    <div>
      <h1>
        <b><?php echo $greeting; ?></b><br />
        <code id="lastModified"></code>
      </h1>
      <h2>
        Now is The Season named<br />
        <a href="<?php echo $season; ?>/<?php echo $sekki; ?>/"><?php echo $sekkiName; ?></a>
        (<b><?php echo $sekki; ?></b>) in
        <b><?php echo $season; ?></b>
      </h2>
    </div>
    <?php
    function h($str)
    {
      return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }
    require('all/log.php');
    ?>
    <script src="../js/log.js"></script>
  </main>

  <main id="hello" hidden>
    <details>
      <summary>Speech to Text to Text to Speech</summary>
      <section id="howto"></section>
    </details>

    <form id="form" method="post">
      <section>
        <?php require('js/form.html'); ?>
      </section>
      <hr />
      <nav id="next">
        <button type="submit" id="submit-btn">Submit</button>
        <button type="button" id="back-btn" onclick="changeHidden()">Back</button>
      </nav>
    </form>
    <script src="js/recognition.js"></script>
  </main>

  <nav id="now" class="hidden">
    <section class="controls">
      <input id="cancel-btn" value="⏹" class="color bgcolor" type="button" />
      <input id="pause-btn" value="⏸" class="color bgcolor" type="button" />
      <input id="resume-btn" value="⏯" class="color bgcolor" type="button" />
    </section>
    <button onclick="openModal()" type="button">?</button>
  </nav>
  <script src="js/controls.js"></script>

  <dialog id="modal">
    <button type="button" id="closeModal">×</button>
    <h3>
      <u><small>Speech to Text to Text to Speech</small></u><br />
      <?php echo $greeting; ?>
    </h3>
    <section id="about">
      <p><i><?php echo $date; ?></i></p>
      <h2>
        <strong><?php echo $sekkiName; ?></strong> (<?php echo $sekki; ?>)
        is <?php echo $description; ?>
      </h2>
      <p><?php echo $hello; ?></p>
    </section>
    <hr>
    <p>
      <smal>
        <u>Choose A Traditional Japanese Seasonal Color to Change Text & Background Colors</u>
      </small>
    </p>
    <label for="color">文字の色</label>
    <select class="color bgcolor" id="color">
      <option selected>Text Color</option>
    </select>
    <br />
    <label for="bgcolor">背景の色</label>
    <select class="color bgcolor" id="bgcolor">
      <option selected>Background Color</option>
    </select>
    <hr />
    <label for="fontSize">文字の大きさ</label>
    <select class="color bgcolor" id="fontSize">
      <option value="13px">Small</option>
      <option value="16px" selected>Medium</option>
      <option value="20px">Large</option>
    </select>
    <hr />
    コントロールから日本の伝統的な季節の色を選択すると、文字・背景の色が変更されます。
  </dialog>

  <script src="all/controls.js"></script>
  <script type="text/javascript">
    colorJSON('<?php echo $seasonColor; ?>');
  </script>
  <script src="js/setStyles.js"></script>
  <script src="../js/modal.js"></script>
</body>

</html>