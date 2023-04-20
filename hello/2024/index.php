<?php require('../js/head.php'); ?>

<body>
  <?php require('../js/main.php'); ?>
  <script src="../js/main.js"></script>

  <dialog id="modal" class="color bgcolor">
    <h3>Hello | creative-community.space</h3>
    <section hidden>
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
      </section>
      <section id="about"></section>
      <button class="color bgcolor" id="closeButton">Close</button>
    </dialog>
    <script src="/coding/yourinfo/jscolor.js"></script>
    <script src="../js/storage.js"></script>
  </body>
  </html>
