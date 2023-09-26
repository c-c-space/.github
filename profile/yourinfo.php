<?php
$ip = $_SERVER["REMOTE_ADDR"];
$hqdn = $_SERVER["REMOTE_PORT"];
$os = $_SERVER["HTTP_USER_AGENT"];

echo "<span>IP <code id='ip' class='cc'>" . $ip . "</code></span>";
echo "<span>PORT <code id='hqdn' class='cc'>" . $hqdn . "</code></span>";
echo "<span><small>USER AGENT <code id='os' class='cc'>" . $os . "</code></small></span>";
?>
