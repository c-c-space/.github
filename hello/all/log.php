<section>
  <ul>
    <li>
      <p>
        <code>en-GB</code>
        <code>Pitch 0.9</code>
        <code>Rate 0.9</code>
      </p>
      <p>
        <button type="button" data-name="" lang="ja" data-pitch="0.9" data-rate="0.9" data-hello="<?php echo $hello;?>">
          <?php echo $date;?>
        </button>
      </p>
    </li>
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
</section>
