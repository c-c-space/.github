<?php
require_once('../../php/head.php');
?>

<body>
  <main id="log">
    <div>
      <h1>
        <b></b><br/>
        <code id="lastModified"></code>
      </h1>
      <h2></h2>
    </div>
    <?php require('../../all/log.php'); ?>
  </main>
  <?php require('../../all/controls.html'); ?>

  <dialog id="modal" class="color bgcolor">
    <h3></h3>
    <button class="color bgcolor" id="closeButton">×</button>
    <br/>
    <?php require('../../php/timeframe.php'); ?>
  </dialog>
  <script src="../../../profile/setStyles.js"></script>
  <script src="../../js/log.js"></script>
</body>
</html>
