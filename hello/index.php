<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $title = 'Hello | creative-community.space';
  $description = "This is a Online Textboard that works with Web Speech API";

  require('head.php');
  $source_file = $season . "/" . $sekki . "/" . $timeframe . ".csv";
  $fp = fopen($source_file, 'a+b');
  $post = sizeof(file($source_file));

  while ($row = fgetcsv($fp)) {
    $rows[] = $row;
  }

  fclose($fp);
  ?>
  <script src="index.js"></script>
  <script src="../js/login.js"></script>

  <!--for Twitter-->
  <meta content="summary_large_image" name="twitter:card">
  <meta content="<?php echo $url; ?>" property="og:url">
  <meta content="<?php echo $url . $season ."/summary.png"; ?>" property="og:image">
  <meta content="<?php echo $url . $season ."/summary.png"; ?>" name="twitter:image:src">

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
  <header id="menu" class="bgcolor color" hidden>
    <button type="button"><b></b></button>
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
        <?php echo $season; ?>
      </h2>
    </div>
    <?php
    function h($str)
    {
      return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }
    require('log.php');
    ?>
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

  <dialog id="modal">
    <button type="button" id="closeModal">×</button>
    <section id="about">
      <p><i><?php echo $date; ?></i></p>
      <h3>
        <strong><?php echo $sekkiName; ?></strong> (<?php echo $sekki; ?>)
        is <?php echo $description; ?>
      </h3>
      <p><?php echo $hello; ?></p>
    </section>
    <section id="color-size"></section>
  </dialog>
  
  <?php require('controls.html'); ?>
  <script type="text/javascript">
    colorSize()
    colorJSON('<?php echo $season . "/color.json"; ?>');
  </script>
  <script src="js/setStyles.js"></script>
</body>

</html>