<?php
date_default_timezone_set('Asia/Tokyo');

if (date("H") >= 6 and date("H") <= 11) {
  $greeting = "Good Morning おはよう";
} elseif (date("H") >= 12 and date("H") <= 17) {
  $greeting = "Hello こんにちは";
} elseif (date("H") >= 18 and date("H") <= 23) {
  $greeting = "Good Evening こんばんは";
} else {
  $greeting = "Good Night おやすみ";
}

echo "<strong>$greeting</strong><br>";
echo "IP <code>" . $_SERVER["REMOTE_ADDR"] . "</code>";
