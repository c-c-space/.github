<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
date_default_timezone_set('Asia/Tokyo');
$timestamp = date("j.M.y.D g:i:s A T");

$year = date("Y");
$month = date("m");
$source_file = "ver/log/" . $year . '/' . $month . ".csv";

define("LOGFILE", $source_file);
$data = json_decode(file_get_contents('php://input'), true);

$output = array(
  '"' . $timestamp . '"',
  $data["port"],
  $data["ip"],
  '"' . $data["os"] . '"'
);

$result = implode(',', $output);
file_put_contents(LOGFILE, $result . "\n", FILE_APPEND | LOCK_EX);
echo json_encode($data);
