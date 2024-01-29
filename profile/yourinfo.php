<?php
$ip = $_SERVER["REMOTE_ADDR"];
$hqdn = $_SERVER["REMOTE_PORT"];
$os = $_SERVER["HTTP_USER_AGENT"];

echo "<span class='cc'>IP <code id='ip'>" . $ip . "</code></span>";
echo "<span class='cc'>PORT <code id='hqdn'>" . $hqdn . "</code></span>";
echo "<span class='cc'>USER AGENT <code id='os'>" . $os . "</code></span>";
