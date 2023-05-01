<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
date_default_timezone_set('Asia/Tokyo');

if (date("H") >= 6 and date("H") <= 11) {
  $timeframe = "morning";
} elseif (date("H") >= 12 and date("H") <= 17) {
  $timeframe = "afternoon";
} elseif (date("H") >= 18 and date("H") <= 23) {
  $timeframe = "evening";
} else {
  $timeframe = "night";
}

$source_file = date("Y"). "/". $timeframe . ".csv";

function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

$fp = fopen($source_file, 'a+b');
flock($fp, LOCK_SH);
?>

<ul>
  <?php
  while ($row = fgetcsv($fp)) {
    $rows[] = $row;
  }
  ?>
  <?php if (!empty($rows)) : ?>
    <?php shuffle($rows); foreach ($rows as $row):?>
      <li>
        <p>
          <code><?= h($row[1]) ?> (<?= h($row[2]) ?>)</code>
          <code>Pitch <?= h($row[3]) ?></code>
          <code>Rate <?= h($row[4]) ?></code>
        </p>
        <p>
          <button type="button" class="color bgcolor" data-name="<?= h($row[1]) ?>" lang="<?= h($row[2]) ?>" data-pitch="<?= h($row[3]) ?>" data-rate="<?= h($row[4]) ?>" data-hello="<?= h($row[5]) ?>">
            <?= h($row[0]) ?>
          </button>
        </p>
      </li>
    <?php endforeach; ?>
  <?php else : ?>
  <?php endif; ?>
</ul>
