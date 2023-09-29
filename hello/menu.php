<header id="menu" class="bgcolor color" hidden>
  <button type="button"><b></b></button>
  <menu id="contents">
    <a href="/hello/">
      <i>Speech to Text to Text to Speech</i>
      <b><?php echo $greeting; ?></b>
    </a>
    <a href="/hello/<?php echo $season; ?>/">
      <i><?php echo $seasonDate; ?></i>
      <b><?php echo $seasonName; ?> <?php echo $season; ?></b>
    </a>
    <a href="/hello/<?php echo $season; ?>/color.php">
      <i>The Collection of Traditional Seasonal Colors of Japan</i>
      <b><?php echo $seasonName; ?> <?php echo $season; ?></b>
    </a>
  </menu>
</header>