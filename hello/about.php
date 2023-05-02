<?php
$ip = $_SERVER["REMOTE_ADDR"];
$hqdn = $_SERVER["REMOTE_PORT"];
$os = $_SERVER["HTTP_USER_AGENT"];
?>

<!--
<h3>このページについて</h3>
<hr/>
-->

<p>
  <u>Your Info</u><br/>
  <?php
  echo "IP <code id='ip'>" . $ip . "</code> | ";
  echo "PORT <code id='hqdn'>" . $hqdn . "</code><br/>";
  echo "<small id='os'>" . $os . "</small>";
  ?>
</p>
<button id="enterBtn" type="button" class="color bgcolor" onclick="setLOG()">Enter</button>
<hr/>
