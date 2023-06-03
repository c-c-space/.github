<main id="log">
  <div>
    <h1>
      <b><?php echo $greeting;?></b><br/>
      <code id="lastModified"></code>
    </h1>
    <h2>
      <span>
        Now is The
        <b><?php echo $season;?></b> in
        <b><?php echo $seasonName;?></b>
      </span>
    </h2>
  </div>
  <section>
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
  </section>
</main>
