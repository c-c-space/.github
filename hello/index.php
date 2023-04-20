<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />

  <script src="/js/index.js" async></script>
  <script src="js/readyState.js" async></script>

  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="css/controls.css" />
  <link rel="stylesheet" href="css/log.css" />
  <link rel="stylesheet" href="css/mobile.css" media="screen and (max-width: 750px)" />
  <style type="text/css">
  #js-button,
  #contents a {
    filter: invert();
  }

  #log button {
    color: inherit;
  }

  #now {
    position: fixed;
    z-index: 100;
    width: 100%;
    bottom: 0;
    padding: 1rem;
  }

  @media screen and (max-width: 750px) {
    #now {
      padding: 2.5%;
    }
  }
  </style>
</head>

<body>
  <script src="/js/menu.js"></script>
  <header id="menu" hidden>
    <button id="js-button"><b></b></button>
    <nav id="contents">
      <a href="/" target="_parent">
        <p><b>creative-community.space</b></p>
        <u>Index</u>
      </a>
    </nav>
  </header>

  <main id="log">
    <div>
      <h1>
        <b>Hello こんにちは</b><br/>
        <code id="lastModified"></code>
      </h1>
      <h2>
        <span class="realtimeuserscounter"><b></b></span>
      </h2>
    </div>
    <section>
      <?php
      mb_language("ja");
      mb_internal_encoding("UTF-8");
      date_default_timezone_set('Asia/Tokyo');

      if (date("H") >= 6 and date("H") <= 11) {
        $hello = "morning";
      } elseif (date("H") >= 12 and date("H") <= 17) {
        $hello = "afternoon";
      } elseif (date("H") >= 18 and date("H") <= 23) {
        $hello = "evening";
      } else {
        $hello = "night";
      }

      $source_file = date("Y"). "/". $hello . ".csv";

      function h($str)
      {
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
      }

      $fp = fopen($source_file, 'a+b');
      flock($fp, LOCK_SH);
      ?>

      <ul>
        <?php
        while ($row = fgetcsv($fp)) {
          $rows[] = $row;
        }
        ?>
        <?php if (!empty($rows)) : ?>
          <?php shuffle($rows); foreach ($rows as $row):?>
            <li>
              <p>
                <code><?= h($row[1]) ?> (<?= h($row[2]) ?>)</code>
                <code>Pitch <?= h($row[3]) ?></code>
                <code>Rate <?= h($row[4]) ?></code>
              </p>
              <p>
                <button type="button" class="color bgcolor" data-name="<?= h($row[1]) ?>" lang="<?= h($row[2]) ?>" data-pitch="<?= h($row[3]) ?>" data-rate="<?= h($row[4]) ?>" data-hello="<?= h($row[5]) ?>">
                  <?= h($row[0]) ?>
                </button>
              </p>
            </li>
          <?php endforeach; ?>
        <?php else : ?>
        <?php endif; ?>
      </ul>
    </section>
  </main>

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

  <nav id="now" class="hidden">
    <section class="controls">
      <input type="button" class="color bgcolor" id="cancel-btn" value="⏹">
      <input type="button" class="color bgcolor" id="pause-btn" value="⏸">
      <input type="button" class="color bgcolor" id="resume-btn" value="⏯">
    </section>
    <button id="openModal" class="color bgcolor" type="button">?</button>
  </nav>

  <script src="js/recognition.js"></script>
  <script src="js/controls.js"></script>

  <dialog id="modal" class="color bgcolor">
    <h3>Hello | creative-community.space</h3>
    <br/>
    <label for="fontSize">Font Size</label>
    <select class="color bgcolor" id="fontSize">
      <option value="13px">Small</option>
      <option value="16px" selected>Medium</option>
      <option value="20px">Large</option>
    </select>
    <br/>
    <label for="bgcolor">Background Color</label>
    <select class="color bgcolor" id="bgcolor">
    <option value="16px" selected>Medium</option></select>
    <br/>
    <label for="color">Color</label>
    <select class="color bgcolor" id="color"></select>
    <hr/>
    <section id="about"></section>
    <button class="color bgcolor" id="closeButton">Close</button>
  </dialog>

  <script src="/coding/yourinfo/jscolor.js"></script>
  <script src="js/storage.js"></script>

  <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="js/realtimeusers.js"></script>
</body>
</html>
