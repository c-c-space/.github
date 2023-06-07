<nav id="contents">
  <a href="/hello/">
    <i>Speech to Text to Text to Speech</i>
    <p><b><?php echo $greeting; ?></b></p>
    <u>↩︎</u>
  </a>
  <a onclick="window.location.replace('/hello/<?php echo $season; ?>/');">
    <i><?php echo $seasonDate; ?></i>
    <p><b><?php echo $seasonName; ?></b> <?php echo $season; ?></p>
  </a>
  <a onclick="window.location.assign('/hello/<?php echo $season; ?>/<?php echo $sekki; ?>/');">
    <i>Now is the season named</i>
    <p><b><?php echo $sekkiName; ?></b> <?php echo $sekki; ?></p>
  </a>
</nav>
