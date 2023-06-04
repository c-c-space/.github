<?php
require_once('../../all/head.php');
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

  <dialog id="modal" class="color bgcolor">
    <h3></h3>
    <button class="color bgcolor" id="closeButton">×</button>
    <br/>
    <?php require('../../all/timeframe.php'); ?>
  </dialog>
  <script src="../../../profile/js/jscolor.js"></script>
  <script src="../../../profile/setStyles.js"></script>
</body>
</html>
