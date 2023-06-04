<section>
  <ul>
    <?php if (!empty($rows)) : ?>
      <?php shuffle($rows); foreach ($rows as $row):?>
        <li>
          <p>
            <code>Google 日本語 (ja-JP)</code>
            <code>Pitch 0.9</code>
            <code>Rate 0.9</code>
          </p>
          <p>
            <button type="button" data-name="Google 日本語" lang="ja-JP" data-pitch="0.9" data-rate="0.9" data-hello="<?php echo $description;?>">
              <?php echo $date;?>
            </button>
          </p>
        </li>
      <?php endforeach; ?>
    <?php else : ?>
      <li>
        <p>
          <code>Google 日本語 (ja-JP)</code>
          <code>Pitch 0.9</code>
          <code>Rate 0.9</code>
        </p>
        <p>
          <button type="button" data-name="Google 日本語" lang="ja-JP" data-pitch="0.9" data-rate="0.9" data-hello="<?php echo $description;?>">
            <?php echo $date;?>
          </button>
        </p>
      </li>
    <?php endif; ?>
  </ul>
</section>
