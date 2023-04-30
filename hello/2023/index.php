<?php require('../js/head.php'); ?>
<body>
  <?php require('../js/main.php'); ?>
  <script src="../js/main.js"></script>

  <dialog id="modal" class="color bgcolor">
    <h3>2023 | Message Board</h3>
    <br/>
    <form method="GET">
      <label for="timeframe">Time Frame</label><br/>
      <select class="color bgcolor" id="timeframe" name="timeframe">
        <option value="night">00:00:00 - 05:59:59</option>
        <option value="morning">06:00:00 - 11:59:59</option>
        <option value="afternoon">12:00:00 - 17:59:59</option>
        <option value="evening">18:00:00 - 23:59:59</option>
      </select>
      <br/>
      <button class="color bgcolor" type="submit">View The Collection</button>
    </form>
    <br/>
    <section>
      <label for="fontSize">Font Size</label>
      <select class="color bgcolor" id="fontSize">
        <option value="13px">Small</option>
        <option value="16px" selected>Medium</option>
        <option value="20px">Large</option>
      </select>
      <br/>
      <label for="bgcolor">Background Color</label>
      <select class="color bgcolor" id="bgcolor">
        <option value="16px" selected>Medium</option>
      </select>
      <br/>
      <label for="color">Color</label>
      <select class="color bgcolor" id="color"></select>
    </section>
    <br/>
    <button class="color bgcolor" id="closeButton">Close</button>
  </dialog>
  <script src="/coding/yourinfo/jscolor.js"></script>
  <script src="../js/storage.js"></script>
</body>
</html>
