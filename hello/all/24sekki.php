<?php
//現在の日時を取得
$datetime = date('m-d');

if ($datetime >= '02-04' and $datetime <= '05-04') {
  $seasonDate = "February 4 - May 4";
} elseif ($datetime >= '05-05' and $datetime <= '08-07') {
  $seasonDate = "May 5 - August 7";
} elseif ($datetime >= '08-08' and $datetime <= '11-07') {
  $seasonDate = "August 8 - November 7";
} elseif ($datetime >= '11-08' and $datetime <= '02-03') {
  $seasonDate = "November 8 - February 3";
}

if ($datetime >= '02-04' and $datetime < '02-18') {
  $season = "spring";
  $sekki = "risshun";
  $seasonName = "春";
  $sekkiName = "立春";
  $date = "February 4 - February 18";
  $description = "The Beginning of Spring";
} elseif ($datetime >= '02-19' and $datetime <= '03-04') {
  $season = "spring";
  $sekki = "usui";
  $seasonName = "春";
  $sekkiName = "雨水";
  $date = "February 19 - March 4";
  $description = "Snow melts into water";
} elseif ($datetime >= '03-05' and $datetime <= '03-19') {
  $season = "spring";
  $sekki = "keichitsu";
  $seasonName = "春";
  $sekkiName = "啓蟄";
  $date = "March 5 - March 19";
  $description = "Insects emerge from the ground";
} elseif ($datetime >= '03-20' and $datetime <= '04-03') {
  $season = "spring";
  $sekki = "shunbun";
  $seasonName = "春";
  $sekkiName = "春分";
  $date = "March 20 - April 3";
  $description = "The Spring Equinox";
} elseif ($datetime >= '04-04' and $datetime <= '04-18') {
  $season = "spring";
  $sekki = "seimei";
  $seasonName = "春";
  $sekkiName = "清明";
  $date = "April 4 - April 18";
  $description = "Clear and Bright, Plants flower";
} elseif ($datetime >= '04-19' and $datetime <= '05-04') {
  $season = "spring";
  $sekki = "kokuu";
  $seasonName = "春";
  $sekkiName = "穀雨";
  $date = "April 19 - May 4";
  $description = "Spring rains and seed sowing";
} elseif ($datetime >= '05-05' and $datetime <= '05-19') {
  $season = "summer";
  $sekki = "rikka";
  $seasonName = "夏";
  $sekkiName = "立夏";
  $date = "May 5 - May 19";
  $description = "The Beginning of Summer";
} elseif ($datetime >= '05-20' and $datetime <= '06-04') {
  $season = "summer";
  $sekki = "shouman";
  $seasonName = "夏";
  $sekkiName = "小満";
  $date = "May 20 - Jun 4";
  $description = "Plants come into full leaf";
} elseif ($datetime >= '06-05' and $datetime <= '06-20') {
  $season = "summer";
  $sekki = "boushu";
  $seasonName = "夏";
  $sekkiName = "芒種";
  $date = "Jun 5 - Jun 20";
  $description = "Time to plant rice seedlings";
} elseif ($datetime >= '06-21' and $datetime <= '07-06') {
  $season = "summer";
  $sekki = "geshi";
  $seasonName = "夏";
  $sekkiName = "夏至";
  $date = "Jun 21 - July 6";
  $description = "The Summer Solstice";
} elseif ($datetime >= '07-07' and $datetime <= '07-22') {
  $season = "summer";
  $sekki = "shousho";
  $seasonName = "夏";
  $sekkiName = "小暑";
  $date = "July 7 - July 22";
  $description = "End of the rainy season";
} elseif ($datetime >= '07-23' and $datetime <= '08-07') {
  $season = "summer";
  $sekki = "taisho";
  $seasonName = "夏";
  $sekkiName = "大暑";
  $date = "July 23 - August 7";
  $description = "Hottest time of the year";
} elseif ($datetime >= '08-08' and $datetime <= '08-22') {
  $season = "autumn";
  $sekki = "risshu";
  $seasonName = "秋";
  $sekkiName = "立秋";
} elseif ($datetime >= '08-23' and $datetime <= '09-07') {
  $season = "autumn";
  $sekki = "shosho";
  $seasonName = "秋";
  $sekkiName = "処暑";
} elseif ($datetime >= '09-08' and $datetime <= '09-22') {
  $season = "autumn";
  $sekki = "hakuro";
  $seasonName = "秋";
  $sekkiName = "白露";
} elseif ($datetime >= '09-23' and $datetime <= '10-07') {
  $season = "autumn";
  $sekki = "shuubun";
  $seasonName = "秋";
  $sekkiName = "秋分";
} elseif ($datetime >= '10-08' and $datetime <= '10-23') {
  $season = "autumn";
  $sekki = "kanro";
  $seasonName = "秋";
  $sekkiName = "寒露";
} elseif ($datetime >= '10-24' and $datetime <= '11-07') {
  $season = "autumn";
  $sekki = "soukou";
  $seasonName = "秋";
  $sekkiName = "霜降";
} elseif ($datetime >= '11-08' and $datetime <= '11-21') {
  $season = "winter";
  $sekki = "rittou";
  $seasonName = "冬";
  $sekkiName = "立冬";
} elseif ($datetime >= '11-22' and $datetime <= '12-06') {
  $season = "winter";
  $sekki = "shousetsu";
  $seasonName = "冬";
  $sekkiName = "小雪";
} elseif ($datetime >= '12-07' and $datetime <= '12-21') {
  $season = "winter";
  $sekki = "taisetsu";
  $seasonName = "冬";
  $sekkiName = "大雪";
} elseif ($datetime >= '12-22' and $datetime <= '01-05') {
  $season = "winter";
  $sekki = "touji";
  $seasonName = "冬";
  $sekkiName = "冬至";
} elseif ($datetime >= '01-06' and $datetime <= '01-19') {
  $season = "winter";
  $sekki = "shoukan";
  $seasonName = "冬";
  $sekkiName = "小寒";
} elseif ($datetime >= '01-20' and $datetime <= '02-03') {
  $season = "winter";
  $sekki = "daikan";
  $seasonName = "冬";
  $sekkiName = "大寒";
}
?>
