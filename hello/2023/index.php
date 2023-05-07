<?php
require_once('../php/head.php');
?>

<body>
  <script src="/js/menu.js"></script>
  <header id="menu" class="bgcolor" hidden>
    <button class="color bgcolor" id="js-button"><b></b></button>
    <nav id="contents"></nav>
  </header>

  <?php require_once('../php/main.php'); ?>

  <dialog id="modal" class="color bgcolor">
    <h3>2023 | Message Board</h3>
    <button class="color bgcolor" id="closeButton">×</button>
    <br/>
    <?php require_once('../php/timeframe.php'); ?>
  </dialog>
  <script src="../../profile/setStyles.js"></script>
</body>
</html>
