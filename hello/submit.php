<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
date_default_timezone_set("Asia/Tokyo");

if (date("H") >= 6 and date("H") <= 11) {
  $hello = "morning";
} elseif (date("H") >= 12 and date("H") <= 17) {
  $hello = "afternoon";
} elseif (date("H") >= 18 and date("H") <= 23) {
  $hello = "evening";
} else {
  $hello = "night";
}

$source_file = date("Y"). "/". $hello . ".csv";

define("LOGFILE", $source_file);
$data = json_decode(file_get_contents("php://input"), true);

$output = array(
  '"'. $data["timestamp"] .'"',
  '"'. $data["voice"] .'"',
  '"'. $data["lang"] .'"',
  '"'. $data["pitch"] .'"',
  '"'. $data["rate"] .'"',
  '"'. $data["hello"] .'"'
);

$result = implode(', ', $output);
file_put_contents(LOGFILE, $result."\n", FILE_APPEND | LOCK_EX);
echo json_encode($data);
