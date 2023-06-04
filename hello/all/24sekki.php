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
  $hello = "___";
} elseif ($datetime >= '02-19' and $datetime <= '03-04') {
  $season = "spring";
  $sekki = "usui";
  $seasonName = "春";
  $sekkiName = "雨水";
  $date = "February 19 - March 4";
  $description = "Snow melts into water";
  $hello = "___";
} elseif ($datetime >= '03-05' and $datetime <= '03-19') {
  $season = "spring";
  $sekki = "keichitsu";
  $seasonName = "春";
  $sekkiName = "啓蟄";
  $date = "March 5 - March 19";
  $description = "Insects emerge from the ground";
  $hello = "___";
} elseif ($datetime >= '03-20' and $datetime <= '04-03') {
  $season = "spring";
  $sekki = "shunbun";
  $seasonName = "春";
  $sekkiName = "春分";
  $date = "March 20 - April 3";
  $description = "The Spring Equinox";
  $hello = "___";
} elseif ($datetime >= '04-04' and $datetime <= '04-18') {
  $season = "spring";
  $sekki = "seimei";
  $seasonName = "春";
  $sekkiName = "清明";
  $date = "April 4 - April 18";
  $description = "Clear and Bright, Plants flower";
  $hello = "___";
} elseif ($datetime >= '04-19' and $datetime <= '05-04') {
  $season = "spring";
  $sekki = "kokuu";
  $seasonName = "春";
  $sekkiName = "穀雨";
  $date = "April 19 - May 4";
  $description = "Spring rains and seed sowing";
  $hello = "___";
} elseif ($datetime >= '05-05' and $datetime <= '05-19') {
  $season = "summer";
  $sekki = "rikka";
  $seasonName = "夏";
  $sekkiName = "立夏";
  $date = "May 5 - May 19";
  $description = "The Beginning of Summer";
  $hello = "___";
} elseif ($datetime >= '05-20' and $datetime <= '06-04') {
  $season = "summer";
  $sekki = "shouman";
  $seasonName = "夏";
  $sekkiName = "小満";
  $date = "May 20 - Jun 4";
  $description = "Plants come into full leaf";
  $hello = "___";
} elseif ($datetime >= '06-05' and $datetime <= '06-20') {
  $season = "summer";
  $sekki = "boushu";
  $seasonName = "夏";
  $sekkiName = "芒種";
  $date = "Jun 5 - Jun 20";
  $description = "Time to plant rice seedlings";
  $hello = "___";
} elseif ($datetime >= '06-21' and $datetime <= '07-06') {
  $season = "summer";
  $sekki = "geshi";
  $seasonName = "夏";
  $sekkiName = "夏至";
  $date = "Jun 21 - July 6";
  $description = "The Summer Solstice";
  $hello = "___";
} elseif ($datetime >= '07-07' and $datetime <= '07-22') {
  $season = "summer";
  $sekki = "shousho";
  $seasonName = "夏";
  $sekkiName = "小暑";
  $date = "July 7 - July 22";
  $description = "End of the rainy season";
  $hello = "___";
} elseif ($datetime >= '07-23' and $datetime <= '08-07') {
  $season = "summer";
  $sekki = "taisho";
  $seasonName = "夏";
  $sekkiName = "大暑";
  $date = "July 23 - August 7";
  $description = "Hottest time of the year";
  $hello = "___";
} elseif ($datetime >= '08-08' and $datetime <= '08-22') {
  $season = "autumn";
  $sekki = "risshu";
  $seasonName = "秋";
  $sekkiName = "立秋";
  $date = "August 8 - August 22";
  $description = "The Beginning of Autumn";
  $hello = "___";
} elseif ($datetime >= '08-23' and $datetime <= '09-07') {
  $season = "autumn";
  $sekki = "shosho";
  $seasonName = "秋";
  $sekkiName = "処暑";
  $date = "August 23 - September 7";
  $description = "Hot weather abates";
  $hello = "___";
} elseif ($datetime >= '09-08' and $datetime <= '09-22') {
  $season = "autumn";
  $sekki = "hakuro";
  $seasonName = "秋";
  $sekkiName = "白露";
  $date = "September 8 - September 22";
  $description = "Dew forms on the leaves";
  $hello = "___";
} elseif ($datetime >= '09-23' and $datetime <= '10-07') {
  $season = "autumn";
  $sekki = "shuubun";
  $seasonName = "秋";
  $sekkiName = "秋分";
  $date = "September 23 - October 7";
  $description = "The Autumn Equinox";
  $hello = "___";
} elseif ($datetime >= '10-08' and $datetime <= '10-23') {
  $season = "autumn";
  $sekki = "kanro";
  $seasonName = "秋";
  $sekkiName = "寒露";
  $date = "October 8 - October 23";
  $description = "Weather becomes colder";
  $hello = "___";
} elseif ($datetime >= '10-24' and $datetime <= '11-07') {
  $season = "autumn";
  $sekki = "soukou";
  $seasonName = "秋";
  $sekkiName = "霜降";
  $date = "October 24 - November 7";
  $description = "The Season of Frost";
  $hello = "___";
} elseif ($datetime >= '11-08' and $datetime <= '11-21') {
  $season = "winter";
  $sekki = "rittou";
  $seasonName = "冬";
  $sekkiName = "立冬";
  $date = "November 8 - November 21";
  $description = "The Beginning of Winter";
  $hello = "木枯らしが吹き、日は短くなり時雨が降る。北国や高山からは初雪の知らせも届き、冬枯れの景色の中で山茶花や水仙の花が咲きはじめる。";
} elseif ($datetime >= '11-22' and $datetime <= '12-06') {
  $season = "winter";
  $sekki = "shousetsu";
  $seasonName = "冬";
  $sekkiName = "小雪";
  $date = "November 22 - December 6";
  $description = "Snow appears on distant mountains";
  $hello = "陽射しは弱まり、冷え込みが厳しくなる。木々の葉は落ち、平地にも初雪が舞い始める「お歳暮」の準備をする期間。";
} elseif ($datetime >= '12-07' and $datetime <= '12-21') {
  $season = "winter";
  $sekki = "taisetsu";
  $seasonName = "冬";
  $sekkiName = "大雪";
  $date = "December 7 - December 21";
  $description = "Cold winds blow from Siberia";
  $hello = "山々は雪の衣を纏って冬の姿となり、動物たちが冬ごもりに入る時期。鮭が川を遡上し、鱈など冬の魚の漁も盛んになる。";
} elseif ($datetime >= '12-22' and $datetime <= '01-05') {
  $season = "winter";
  $sekki = "touji";
  $seasonName = "冬";
  $sekkiName = "冬至";
  $date = "December 22 - January 5";
  $description = "The Winter Solstice";
  $hello = "一年中で最も夜が長い頃。この日より日が伸び始めることから、古くはこの日を年の始点と考えられた。栄養価の高いかぼちゃを食べ、柚子湯に浸かり無病息災を願う。";
} elseif ($datetime >= '01-06' and $datetime <= '01-19') {
  $season = "winter";
  $sekki = "shoukan";
  $seasonName = "冬";
  $sekkiName = "小寒";
  $date = "January 6 - January 19";
  $description = "Cold weather nears its peak";
  $hello = "「寒の入り」といい、寒さが厳しくなる頃。これから節分までの期間が「寒」である。寒さはこれからが本番。「寒中見舞い」を出しはじめる時期。";
} elseif ($datetime >= '01-20' and $datetime <= '02-03') {
  $season = "winter";
  $sekki = "daikan";
  $seasonName = "冬";
  $sekkiName = "大寒";
  $date = "January 20 - February 3";
  $description = "Coldest time of the year";
  $hello = "一年で一番寒さの厳しい頃。逆の見方をすれば、これからは暖かくなると言うこと。春はもう目前。鶏が卵を産み、蕗の花が咲いたり、春に向けての足音が聞こえはじめる。";
}
?>
