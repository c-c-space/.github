<?php
$sekki = "shousho";
$seasonName = "夏";
$sekkiName = "小暑";
$date = "July 7 - July 22";
$description = "End of the rainy season";
$hello = "梅雨明けが近く、本格的な暑さが始まる集中豪雨のシーズン。蓮の花が咲き、蝉の合唱が始まる「暑中見舞い」を出す頃。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<body>
  <main id="log">
    <div>
      <h1>
        <b>
          <code><?php echo $greeting;?></code>
          <?php echo $sekkiName;?> <?php echo $sekki;?>
        </b><br/>
        <code id="lastModified"><?php echo $date;?></code>
      </h1>
      <h2><?php echo $description;?></h2>
    </div>
    <?php
    function h($str) {
      return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }
    require('../../all/log.php');
    ?>
  </main>
  <?php require('../../all/controls.html'); ?>
  <script src="../../js/log.js"></script>

  <dialog id="modal" class="color bgcolor">
    <h3>
      <small><?php echo $date;?></small><br/>
      <?php echo $sekkiName;?> <?php echo $sekki;?>
    </h3>
    <button class="color bgcolor" id="closeButton">×</button>
    <p><?php echo $description;?></p>
    <p><?php echo $hello;?></p>
    <br/>
    <?php require('../../all/timeframe.html'); ?>
  </dialog>
  <script src="../color.js"></script>
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
  <script src="../../../profile/js/setStyles.js"></script>
</body>
</html>
