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
} elseif ($datetime >= '02-19' and $datetime <= '03-04') {
  $season = "spring";
  $sekki = "usui";
  $seasonName = "春";
  $sekkiName = "雨水";
} elseif ($datetime >= '03-05' and $datetime <= '03-19') {
  $season = "spring";
  $sekki = "keichitsu";
  $seasonName = "春";
  $sekkiName = "啓蟄";
} elseif ($datetime >= '03-20' and $datetime <= '04-03') {
  $season = "spring";
  $sekki = "shunbun";
  $seasonName = "春";
  $sekkiName = "春分";
} elseif ($datetime >= '04-04' and $datetime <= '04-18') {
  $season = "spring";
  $sekki = "seimei";
  $seasonName = "春";
  $sekkiName = "清明";
} elseif ($datetime >= '04-19' and $datetime <= '05-04') {
  $season = "spring";
  $sekki = "kokuu";
  $seasonName = "春";
  $sekkiName = "穀雨";
} elseif ($datetime >= '05-05' and $datetime <= '05-19') {
  $season = "summer";
  $sekki = "rikka";
  $seasonName = "夏";
  $sekkiName = "立夏";
} elseif ($datetime >= '05-20' and $datetime <= '06-04') {
  $season = "summer";
  $sekki = "shouman";
  $seasonName = "夏";
  $sekkiName = "小満";
} elseif ($datetime >= '06-05' and $datetime <= '06-20') {
  $season = "summer";
  $sekki = "boushu";
  $seasonName = "夏";
  $sekkiName = "芒種";
} elseif ($datetime >= '06-21' and $datetime <= '07-06') {
  $season = "summer";
  $sekki = "geshi";
  $seasonName = "夏";
  $sekkiName = "夏至";
} elseif ($datetime >= '07-07' and $datetime <= '07-22') {
  $season = "summer";
  $sekki = "shousho";
  $seasonName = "夏";
  $sekkiName = "小暑";
} elseif ($datetime >= '07-23' and $datetime <= '08-07') {
  $season = "summer";
  $sekki = "taisho";
  $seasonName = "夏";
  $sekkiName = "大暑";
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
