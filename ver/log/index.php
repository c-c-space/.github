<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $year = date("Y");
  $month = date("m");
  if (isset($_GET["month"])) {
    $month = $_GET["month"];
  }

  $title = 'Access Log | creative-community.space';
  $description = $year . ' 年 ' . $month . ' 月 の アクセス履歴';

  $timestamp = date("j.M.y.D g:i:s A T");
  $source_file = $year . '/' . $month . '.csv';
  $fp = fopen($source_file, 'a+');
  flock($fp, LOCK_SH);

  require('head.php');
  ?>

  <style>
    #log li {
      filter: blur(0.25rem);
    }

    #log li:nth-last-child(1) {
      filter: blur(0);
    }

    #log li:hover,
    #log li:focus,
    #log li:active {
      filter: blur(0);
      transition: all 500ms ease;
    }

    @media print {

      #menu,
      #now,
      #now * {
        display: none;
      }

      #log li {
        filter: blur(0);
      }
    }
  </style>
</head>

<body>

  <?php require('log.php'); ?>

  <form id="now" method="GET" class="hidden">
    <select id="month" name="month"></select>
    <button type="submit">Access Log</button>
  </form>
  <script src="selectmonth.js"></script>
</body>

</html>