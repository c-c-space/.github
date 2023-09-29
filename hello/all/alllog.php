<?php
$morning_file = fopen('morning.csv', 'a+b');
$afternoon_file = fopen('afternoon.csv', 'a+b');
$evening_file = fopen('evening.csv', 'a+b');
$night_file = fopen('night.csv', 'a+b');

while ($row = fgetcsv($morning_file)) {
  $rows[] = $row;
}

while ($row = fgetcsv($afternoon_file)) {
  $rows[] = $row;
}

while ($row = fgetcsv($evening_file)) {
  $rows[] = $row;
}

while ($row = fgetcsv($night_file)) {
  $rows[] = $row;
}

fclose($morning_file);
fclose($afternoon_file);
fclose($evening_file);
fclose($night_file);

function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?>

<ul>
  <?php if (!empty($rows)) : ?>
    <?php shuffle($rows); foreach ($rows as $row):?>
      <li>
        <p>
          <code><?= h($row[1]) ?> (<?= h($row[2]) ?>)</code>
          <code>Pitch <?= h($row[3]) ?></code>
          <code>Rate <?= h($row[4]) ?></code>
        </p>
        <p>
          <button type="button" data-name="<?= h($row[1]) ?>" lang="<?= h($row[2]) ?>" data-pitch="<?= h($row[3]) ?>" data-rate="<?= h($row[4]) ?>" data-hello="<?= h($row[5]) ?>">
            <?= h($row[0]) ?>
          </button>
        </p>
      </li>
    <?php endforeach; ?>
  <?php else : ?>
  <?php endif; ?>
</ul>
