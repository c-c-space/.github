<?php
mb_language("ja");
mb_internal_encoding("UTF-8");

require('all/hello.php');
require('all/24seasons.php');
$source_file = $season . "/". $sekki . "/". $timeframe . ".csv";

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
