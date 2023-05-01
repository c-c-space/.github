<?php require('../php/head.php'); ?>
<body>
  <script src="/js/menu.js"></script>
  <header id="menu" class="bgcolor" hidden>
    <button class="color bgcolor" id="js-button"><b></b></button>
    <nav id="contents">
      <a href="/" target="_parent">
        <p><b>creative-community.space</b></p>
        <u>Index</u>
      </a>
    </nav>
  </header>

  <?php require('../php/main.php'); ?>
  <script src="../js/main.js"></script>

  <dialog id="modal" class="color bgcolor">
    <h3>2023 | Message Board</h3>
    <button class="color bgcolor" id="closeButton">×</button>
    <br/>
    <form method="GET">
      <select class="color bgcolor" name="timeframe">
        <option selected disabled>時間帯 Time Frame</option>
        <option value="night">00:00:00 - 05:59:59</option>
        <option value="morning">06:00:00 - 11:59:59</option>
        <option value="afternoon">12:00:00 - 17:59:59</option>
        <option value="evening">18:00:00 - 23:59:59</option>
      </select>
      <section hidden>
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
      </section>
      <button class="color bgcolor" type="submit">GET</button>
    </form>
  </dialog>
  <script src="/coding/yourinfo/jscolor.js"></script>
  <script src="../js/storage.js"></script>
</body>
</html>
