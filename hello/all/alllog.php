<?php
$morning_file = fopen('morning.csv', 'a+b');
$afternoon_file = fopen('afternoon.csv', 'a+b');
$evening_file = fopen('evening.csv', 'a+b');
$night_file = fopen('night.csv', 'a+b');

while ($row = fgetcsv($morning_file)) {
  $rows[] = $row;
}

while ($row = fgetcsv($afternoon_file)) {
  $rows[] = $row;
}

while ($row = fgetcsv($evening_file)) {
  $rows[] = $row;
}

while ($row = fgetcsv($night_file)) {
  $rows[] = $row;
}

fclose($morning_file);
fclose($afternoon_file);
fclose($evening_file);
fclose($night_file);

function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?>