<link rel="stylesheet" href="../../css/index.css" />

<dialog id="modal" class="color bgcolor">
  <h3>
    <small><?php echo $date;?></small><br/>
    <?php echo $sekkiName;?> <?php echo $sekki;?>
  </h3>
  <button class="color bgcolor" id="closeButton">×</button>
  <p><?php echo $description;?></p>
  <p><?php echo $hello;?></p>
  <form method="GET" class="collection">
    <br>
    <select class="color bgcolor" name="timeframe">
      <option selected disabled>時間帯 Time Frame</option>
      <option value="night">00:00:00 - 05:59:59</option>
      <option value="morning">06:00:00 - 11:59:59</option>
      <option value="afternoon">12:00:00 - 17:59:59</option>
      <option value="evening">18:00:00 - 23:59:59</option>
    </select>
    <section hidden>
      <select class="color bgcolor" id="bgcolor"></select>
      <br/>
      <select class="color bgcolor" id="color"></select>
      <hr/>
      <select class="color bgcolor" id="fontSize">
        <option value="13px">Small</option>
        <option value="16px" selected>Medium</option>
        <option value="20px">Large</option>
      </select>
    </section>
    <button class="color bgcolor" type="submit">GET</button>
  </form>
</dialog>

<script src="../../all/controls.js"></script>
<script src="../../all/72ko.js"></script>
<script type="text/javascript">
colorJSON('../color.json')
koJSON('ko.json')

function ChangeHidden() {
  const mainAll = document.querySelectorAll('main');
  mainAll.forEach(main => {
    if (main.hidden == false) {
      main.hidden = true;
    } else {
      main.hidden = false;
    }
  })
};
</script>
<script src="../../js/log.js"></script>
<script src="../../js/setStyles.js"></script>
</body>
</html>
