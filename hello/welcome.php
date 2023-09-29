<?php
//現在の日時を取得
$datetime = date('m-d');
require('all/24sekki.php');
?>

<b>Welcome ようこそ</b><br>
Now is The Season named
<a href="/hello/">
    <?php echo $sekkiName; ?> (<?php echo $sekki; ?>)
</a>
in <b><?php echo $season; ?></b>