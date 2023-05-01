<?php
$ip = $_SERVER["REMOTE_ADDR"];
$hqdn = $_SERVER["REMOTE_PORT"];
$os = $_SERVER["HTTP_USER_AGENT"];
?>

<p>
  <?php
  echo "IP <code id='ip'>" . $ip . "</code> | ";
  echo "PORT <code id='hqdn'>" . $hqdn . "</code><br/>";
  echo "USER AGENT <code id='os'>" . $os . "</code>";
  ?>
</p>
<br/>
<button type="button" id="enter-btn" onclick="setLOG()">Enter</button>

<script src="/js/log.js"></script>
