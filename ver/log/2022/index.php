<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $year = "2022";
  $month = "10";
  if (isset($_GET["month"])) {
    $month = $_GET["month"];
  }

  $title = 'Access Log | creative-community.space';
  $description = $year . ' 年 ' . $month . ' 月 の アクセス履歴';
  $source_file = $month . ".csv";
  $fp = fopen($source_file, 'r');
  flock($fp, LOCK_SH);
  require('../head.php');
  ?>
</head>

<body>

  <?php require('../log.php'); ?>

  <form id="now" method="GET" class="hidden">
    <select id="month" name="month">
      <option disabled selected hidden>Select Month</option>
      <option value="10"><?php echo $year; ?>年10月</option>
      <option value="11"><?php echo $year; ?>年11月</option>
      <option value="12"><?php echo $year; ?>年12月</option>
    </select>
    <button type="submit">Access Log</button>
  </form>
</body>

</html>