<?php
$ip = $_SERVER["REMOTE_ADDR"];
$hqdn = $_SERVER["REMOTE_PORT"];
$os = $_SERVER["HTTP_USER_AGENT"];
?>

<p><u>Your Info</u></p>
<p>
  <?php
  echo "IP <code id='ip'>" . $ip . "</code> | ";
  echo "PORT <code id='hqdn'>" . $hqdn . "</code><br/>";
  echo "<code id='os'>" . $os . "</code>";
  ?>
</p>
<br/>
<button type="button" class="color bgcolor" id="enterBtn" onclick="setLOG()">Enter</button>
