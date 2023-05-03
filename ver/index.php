<?php
mb_language("ja");
mb_internal_encoding("UTF-8");

function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <script src="readyState.js"></script>
  <script src="/js/index.js" async></script>
  <link rel="stylesheet" href="rolling.css" />
  <style type="text/css">
  #rolling :first-child {
    width: 40%;
  }

  #rolling a,
  #rolling u,
  #rolling i {
    display: inline-block;
  }

  #rolling a,
  #rolling u {
    font-family: "ipag", monospace;
    font-weight: 500;
    transform: scale(1, 1.25);
  }

  #rolling b,
  #rolling i {
    font-family: "Times New Roman", serif;
  }

  #rolling small {
    font-family: "Arial Narrow", "Yu Gothic", "游ゴシック体", Arial, sans-serif;
  }

  #rolling b {
    font-size: 120%;
    font-style: italic;
  }

  #rolling b,
  #rolling strong {
    font-weight: 500;
  }

  #rolling a,
  #rolling i {
    font-size: 90%;
  }

  #rolling a {
    margin: 1vw 0 1.5vw;
  }

  #rolling u {
    font-size: 75%;
  }

  #rolling strong,
  #rolling small {
    font-size: 55%;
    margin: 0;
  }
  </style>
</head>

<body>
  <script src="/js/menu.js"></script>
  <header id="menu" hidden>
    <button id="js-button"><b></b></button>
    <nav id="contents">
      <a href="#" onclick="window.location.reload();">
        <p><b>Index | creative-community.space</b></p>
        <u>更新履歴</u>
      </a>
    </nav>
  </header>

  <main id="rolling">
    <section class="col">
      <u>creative-community.space</u><br/>
      <br/>
      <?php require('about.html'); ?>
      <?php
      $sp_file = "csv/special.csv";
      $special = fopen($sp_file, 'r');
      flock($special, LOCK_SH);

      while ($sp = fgetcsv($special)) {
        $spAll[] = $sp;
      }
      ?>
      <?php if (!empty($spAll)) : ?>
        <?php foreach ($spAll as $sp) : ?>
          <i><?= h($sp[0]) ?></i><br/>
          <a href="<?= h($sp[2]) ?>"><?= h($sp[1]) ?></a><br/>
          <small style="display:<?= h($sp[3]) ?>;"><?= h($sp[4]) ?></small>
          <br/>
        <?php endforeach; ?>
      <?php else : ?>
      <?php endif; ?>
      <br/>
    </section>
    <section class="col">
      <u>New Contents</u><br/>
      <br/>
      <?php
      $index_file = "csv/index.csv";
      $index = fopen($index_file, 'r');
      flock($index, LOCK_SH);

      while ($row = fgetcsv($index)) {
        $rows[] = $row;
      }
      ?>
      <?php if (!empty($rows)) : ?>
        <?php foreach ($rows as $row) : ?>
          <i><?= h($row[0]) ?></i><br/>
          <a href="<?= h($row[2]) ?>"><?= h($row[1]) ?></a><br/>
          <small style="display:<?= h($row[3]) ?>;"><?= h($row[4]) ?></small>
          <br/>
        <?php endforeach; ?>
      <?php else : ?>
      <?php endif; ?>
      <br/>
    </section>
    <section class="col">
      <u>Version Up</u><br/>
      <br/>
      <?php
      $upgrade_file = "csv/upgrade.csv";
      $upgrade = fopen($upgrade_file, 'r');
      flock($upgrade, LOCK_SH);

      while ($ver = fgetcsv($upgrade)) {
        $up[] = $ver;
      }
      ?>
      <?php if (!empty($up)) : ?>
        <?php foreach ($up as $ver) : ?>
          <i><?= h($ver[0]) ?></i><br/>
          <a href="<?= h($ver[2]) ?>"><?= h($ver[1]) ?></a><br/>
          <small style="display:<?= h($ver[3]) ?>;"><?= h($ver[4]) ?></small>
          <br/>
        <?php endforeach; ?>
      <?php else : ?>
      <?php endif; ?>
      <br/>
    </section>
  </main>

  <script src="rolling.js"></script>
</body>
</html>
