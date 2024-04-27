<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $year = "2024";
  $month = "01";
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
      <option value="01"><?php echo $year; ?>年1月</option>
      <option value="02"><?php echo $year; ?>年2月</option>
      <option value="03"><?php echo $year; ?>年3月</option>
      <option value="04"><?php echo $year; ?>年4月</option>
      <option value="05"><?php echo $year; ?>年5月</option>
      <option value="06"><?php echo $year; ?>年6月</option>
      <option value="07"><?php echo $year; ?>年7月</option>
      <option value="08"><?php echo $year; ?>年8月</option>
      <option value="09"><?php echo $year; ?>年9月</option>
      <option value="10"><?php echo $year; ?>年10月</option>
      <option value="11"><?php echo $year; ?>年11月</option>
      <option value="12"><?php echo $year; ?>年12月</option>
    </select>
    <button type="submit">Access Log</button>
  </form>
</body>

</html>