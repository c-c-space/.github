<?php
mb_language("ja");
mb_internal_encoding("UTF-8");

require('all/greeting.php');
require('all/24sekki.php');
$source_file = $season . "/". $sekki . "/". $timeframe . ".csv";
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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <script src="/js/index.js" async></script>
  <script src="js/readyState.js" async></script>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="css/controls.css" />
  <link rel="stylesheet" href="css/log.css" />
  <link rel="stylesheet" href="css/mobile.css" media="screen and (max-width: 750px)" />
</head>

<body>
  <script src="/js/menu.js"></script>
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
        <i>Speech to Text to Text to Speech</i>
        <p>The Texts of <b><?php echo $sekkiName;?></b> <?php echo $sekki;?></p>
      </a>
    </nav>
  </header>

  <main id="hello" hidden>
    <form method="post">
      <section>
        <label for="voice-select">言語・声の種類を選択</label><br/>
        <select id="voice-select" class="color bgcolor" name="voice" required></select>
        <p>
          <label for="speech-btn">音声認識（選択した言語の音声をテキストに変換）</label><br/>
          <button type="button" class="color bgcolor" id="speech-btn">Speech to Text</button>
        </p>
      </section>
      <hr/>
      <section id="readme" contenteditable="true"></section>
      <hr/>
      <br/>
      <label for="speak-btn">音声合成（テキストを選択した言語・声の音声に変換）</label>
      <section>
        <input type="button" class="color bgcolor" id="speak-btn" value="Text to Speech">
      </section>
      <br/>
      <label>音声合成のピッチとレート(速度)を選択</label>
      <section class="range">
        <label for="pitch">Pitch</label>
        <input id="pitch" class="color bgcolor" name="pitch" type="range" min="0" max="2" value="1" step="0.1" />
        <code class="pitch-value"></code>
      </section>
      <section class="range">
        <label for="rate">Rate</label>
        <input id="rate" class="color bgcolor" name="rate" type="range" min="0.1" max="2" value="1" step="0.1" />
        <code class="rate-value"></code>
      </section>
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
      <h2>
        <strong><?php echo $sekkiName;?></strong> (<?php echo $sekki;?>)
      </h2>
      <p><?php echo $hello;?></p>
      <h3>
        <?php echo $description;?>
      </h3>
    </section>
    <hr/>
    <label for="bgcolor">Background Color</label>
    <select class="color bgcolor" id="bgcolor"></select>
    <br/>
    <label for="color">Color</label>
    <select class="color bgcolor" id="color"></select>
    <hr/>
    <label for="fontSize">Font Size</label>
    <select class="color bgcolor" id="fontSize">
      <option value="13px">Small</option>
      <option value="16px" selected>Medium</option>
      <option value="20px">Large</option>
    </select>
  </dialog>

  <script src="<?php echo $season;?>/color.js"></script>
  <script type="text/javascript">
  let namesForm = document.querySelectorAll('#bgcolor, #color')
  for (const names of namesForm) {
    Object.entries(colors).forEach(eachArr => {
      let option = document.createElement('option')
      option.textContent = Object.values(eachArr)[0]
      option.value = Object.values(eachArr)[1]
      names.appendChild(option)
    })
  }
  </script>
  <script src="../profile/js/setStyles.js"></script>
  <script src="../js/log.js"></script>
</body>
</html>
