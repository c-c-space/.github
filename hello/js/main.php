<main id="log">
  <div>
    <h1>
      <b></b><br/>
      <code id="lastModified"></code>
    </h1>
    <h2>
      <span class="realtimeuserscounter">
        <b><?php echo $post;?></b> Posts
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

<nav id="now" class="hidden">
  <section class="controls">
    <input type="button" class="color bgcolor" id="cancel-btn" value="⏹">
    <input type="button" class="color bgcolor" id="pause-btn" value="⏸">
    <input type="button" class="color bgcolor" id="resume-btn" value="⏯">
  </section>
  <button id="openModal" class="color bgcolor" type="button">?</button>
</nav>

<script type="text/javascript">
const greeting = document.querySelector('#log div h1 b')

let timeframe = (new Date()).getHours()
if (timeframe <= 5) { greeting.innerText = "Good Night おやすみ" }	// 0時から5時
else if (timeframe <= 11) { greeting.innerText = "Good Moning おはよう" }	// 6時から11時
else if (timeframe <= 17) { greeting.innerText = "Hello こんにちは" }	// 12時から17時
else if (timeframe <= 22 ) { greeting.innerText = "Good Evening こんばんは" }	// 18時から22時
else { greeting.innerText = "Good Night おやすみ" }
</script>
