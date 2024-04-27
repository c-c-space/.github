<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
date_default_timezone_set("Asia/Tokyo");

if (date("H") >= 6 and date("H") <= 11) {
    $timeframe = "morning";
} elseif (date("H") >= 12 and date("H") <= 17) {
    $timeframe = "afternoon";
} elseif (date("H") >= 18 and date("H") <= 23) {
    $timeframe = "evening";
} else {
    $timeframe = "night";
}

//現在の日時を取得
$datetime = date('m-d');
if ($datetime >= '01-06' and $datetime <= '01-19') {
    $season = "winter";
    $sekki = "shoukan";
} elseif ($datetime >= '01-20' and $datetime <= '02-03') {
    $season = "winter";
    $sekki = "daikan";
} elseif ($datetime >= '02-04' and $datetime < '02-18') {
    $season = "spring";
    $sekki = "risshun";
} elseif ($datetime >= '02-19' and $datetime <= '03-04') {
    $season = "spring";
    $sekki = "usui";
} elseif ($datetime >= '03-05' and $datetime <= '03-19') {
    $season = "spring";
    $sekki = "keichitsu";
} elseif ($datetime >= '03-20' and $datetime <= '04-03') {
    $season = "spring";
    $sekki = "shunbun";
} elseif ($datetime >= '04-04' and $datetime <= '04-18') {
    $season = "spring";
    $sekki = "seimei";
} elseif ($datetime >= '04-19' and $datetime <= '05-04') {
    $season = "spring";
    $sekki = "kokuu";
} elseif ($datetime >= '05-05' and $datetime <= '05-19') {
    $season = "summer";
    $sekki = "rikka";
} elseif ($datetime >= '05-20' and $datetime <= '06-04') {
    $season = "summer";
    $sekki = "shouman";
} elseif ($datetime >= '06-05' and $datetime <= '06-20') {
    $season = "summer";
    $sekki = "boushu";
} elseif ($datetime >= '06-21' and $datetime <= '07-06') {
    $season = "summer";
    $sekki = "geshi";
} elseif ($datetime >= '07-07' and $datetime <= '07-22') {
    $season = "summer";
    $sekki = "shousho";
} elseif ($datetime >= '07-23' and $datetime <= '08-07') {
    $season = "summer";
    $sekki = "taisho";
} elseif ($datetime >= '08-08' and $datetime <= '08-22') {
    $season = "autumn";
    $sekki = "risshu";
} elseif ($datetime >= '08-23' and $datetime <= '09-07') {
    $season = "autumn";
    $sekki = "shosho";
} elseif ($datetime >= '09-08' and $datetime <= '09-22') {
    $season = "autumn";
    $sekki = "hakuro";
} elseif ($datetime >= '09-23' and $datetime <= '10-07') {
    $season = "autumn";
    $sekki = "shuubun";
} elseif ($datetime >= '10-08' and $datetime <= '10-23') {
    $season = "autumn";
    $sekki = "kanro";
} elseif ($datetime >= '10-24' and $datetime <= '11-07') {
    $season = "autumn";
    $sekki = "soukou";
} elseif ($datetime >= '11-08' and $datetime <= '11-21') {
    $season = "winter";
    $sekki = "rittou";
} elseif ($datetime >= '11-22' and $datetime <= '12-06') {
    $season = "winter";
    $sekki = "shousetsu";
} elseif ($datetime >= '12-07' and $datetime <= '12-21') {
    $season = "winter";
    $sekki = "taisetsu";
} else {
    $season = "winter";
    $sekki = "touji";
}

$source_file = $season . "/" . $sekki . "/" . $timeframe . ".csv";

define("LOGFILE", $source_file);
$data = json_decode(file_get_contents("php://input"), true);

$output = array(
    '"' . $data["timestamp"] . '"',
    '"' . $data["voice"] . '"',
    '"' . $data["lang"] . '"',
    '"' . $data["pitch"] . '"',
    '"' . $data["rate"] . '"',
    '"' . $data["hello"] . '"'
);

$result = implode(', ', $output);
file_put_contents(LOGFILE, $result . "\n", FILE_APPEND | LOCK_EX);
echo json_encode($data);
