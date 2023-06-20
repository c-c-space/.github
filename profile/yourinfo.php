<?php
$ip = $_SERVER["REMOTE_ADDR"];
$hqdn = $_SERVER["REMOTE_PORT"];
$os = $_SERVER["HTTP_USER_AGENT"];

echo "<span>IP <code id='ip'>" . $ip . "</code></span>";
echo "<span>PORT <code id='hqdn'>" . $hqdn . "</code></span>";
echo "<span><small>USER AGENT <code id='os'>" . $os . "</code></small></span>";
?>
