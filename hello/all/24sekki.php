<?php

//現在の日時を取得
$datetime = date('m-d');

//四季を表示
if ($datetime <= '02-03') {
  $season = "winter";
  $seasonName = "冬";
  $seasonDate = "November 8 - February 3";
} elseif ($datetime >= '02-04' and $datetime <= '05-04') {
  $season = "spring";
  $seasonName = "春";
  $seasonDate = "February 4 - May 4";
} elseif ($datetime >= '05-05' and $datetime <= '08-07') {
  $season = "summer";
  $seasonName = "夏";
  $seasonDate = "May 5 - August 7";
} elseif ($datetime >= '08-08' and $datetime <= '11-07') {
  $season = "autumn";
  $seasonName = "秋";
  $seasonDate = "August 8 - November 7";
} else {
  $season = "winter";
  $seasonName = "冬";
  $seasonDate = "November 8 - February 3";
}

//二十四節気を表示
if ($datetime <= '01-05') {
  $sekki = "touji";
  $sekkiName = "冬至";
  $date = "December 22 - January 5";
  $description = "The Winter Solstice";
  $hello = "冬至日より日が伸び始めることから、古くには年の始点と考えられた。栄養価の高いかぼちゃを食べ、柚子湯に浸かり無病息災を願う。";
} elseif ($datetime >= '01-06' and $datetime <= '01-19') {
  $sekki = "shoukan";
  $sekkiName = "小寒";
  $date = "January 6 - January 19";
  $description = "Cold weather nears its peak";
  $hello = "「寒の入り」といい、寒さが厳しくなる頃。これから節分までの期間が「寒」。「寒中見舞い」を出しはじめる時期。";
} elseif ($datetime >= '01-20' and $datetime <= '02-03') {
  $sekki = "daikan";
  $sekkiName = "大寒";
  $date = "January 20 - February 3";
  $description = "Coldest time of the year";
  $hello = "一年で一番寒さの厳しい頃。逆の見方をすれば、これからは暖かくなると言うこと。春はもう目前。蕗の花が咲き、鶏が卵を産みはじめ、春の足音が聞こえはじめる。";
}  ($datetime >= '02-04' and $datetime < '02-18') {
  $sekki = "risshun";
  $sekkiName = "立春";
  $date = "February 4 - February 18";
  $description = "The Beginning of Spring";
  $hello = "旧暦では、一年のはじまりは立春から。まだ寒さの厳しい時期だが日脚は徐々に伸び、暖かい地方では梅が咲き始める。";
} elseif ($datetime >= '02-19' and $datetime <= '03-04') {
  $sekki = "usui";
  $sekkiName = "雨水";
  $date = "February 19 - March 4";
  $description = "Snow melts into water";
  $hello = "空から降るものが雪から雨に替わる頃。深く積もった雪も融け始める。草木がほんのり色づく様子や、春霞を楽しめる季節。";
} elseif ($datetime >= '03-05' and $datetime <= '03-19') {
  $sekki = "keichitsu";
  $sekkiName = "啓蟄";
  $date = "March 5 - March 19";
  $description = "Insects emerge from the ground";
  $hello = "冬眠をしていた虫が穴から出てくる頃。蝶々が飛びはじめ、柳の若芽が芽吹き、蕗のとうの花や桃の花が咲く頃。";
} elseif ($datetime >= '03-20' and $datetime <= '04-03') {
  $sekki = "shunbun";
  $sekkiName = "春分";
  $date = "March 20 - April 3";
  $description = "The Spring Equinox";
  $hello = "春分日をはさんで前後7日間が彼岸。雀が巣をつくり始め、桜が開花する頃。花冷えや寒の戻りがあるので暖かいと言っても油断は禁物。この後は昼の時間が長くなって行く。";
} elseif ($datetime >= '04-04' and $datetime <= '04-18') {
  $sekki = "seimei";
  $sekkiName = "清明";
  $date = "April 4 - April 18";
  $description = "Clear and Bright, Plants flower";
  $hello = "清浄明潔の略。晴れ渡った空には当に清浄明潔という語にふさわしい。つばめが飛来し、爽やかな風が吹く頃。地上に目を移せば、百花が咲き競う。";
} elseif ($datetime >= '04-19' and $datetime <= '05-04') {
  $sekki = "kokuu";
  $sekkiName = "穀雨";
  $date = "April 19 - May 4";
  $description = "Spring rains and seed sowing";
  $hello = "田んぼや畑の準備が整い、それに合わせるように柔らかな春の雨が降る頃。この頃より変りやすい春の天気も安定し日差しも強まる。植物が緑一色に輝きはじめる。";
} elseif ($datetime >= '05-05' and $datetime <= '05-19') {
  $sekki = "rikka";
  $sekkiName = "立夏";
  $date = "May 5 - May 19";
  $description = "The Beginning of Summer";
  $hello = "一年のうちで、もっとも過ごしやすい節。野山が新緑に彩られ、夏の気配が感じられるようになる。かえるが鳴き始め、竹の子が生えてくる頃。";
} elseif ($datetime >= '05-20' and $datetime <= '06-04') {
  $sekki = "shouman";
  $sekkiName = "小満";
  $date = "May 20 - Jun 4";
  $description = "Plants come into full leaf";
  $hello = "あらゆる生命が満ちていく頃。陽気がよくなり、草木などの生物が次第に生長して生い茂る。西日本でははしり梅雨が現れる。";
} elseif ($datetime >= '06-05' and $datetime <= '06-20') {
  $sekki = "boushu";
  $sekkiName = "芒種";
  $date = "Jun 5 - Jun 20";
  $description = "Time to plant rice seedlings";
  $hello = "稲の穂先のように芒(とげのようなもの)のある穀物の種まきをする頃という意味だが、現在の種まきは大分早まっている。梅の実が熟し、梅雨のじめじめした空模様がはじまる。";
} elseif ($datetime >= '06-21' and $datetime <= '07-06') {
  $sekki = "geshi";
  $sekkiName = "夏至";
  $date = "Jun 21 - July 6";
  $description = "The Summer Solstice";
  $hello = "一年で昼の時間が一番長くなる節だが、日本の大部分は梅雨の時期であまり実感されない。花しょうぶや紫陽花などの雨の似合う花が咲き、暑さが増して来る頃。";
} elseif ($datetime >= '07-07' and $datetime <= '07-22') {
  $sekki = "shousho";
  $sekkiName = "小暑";
  $date = "July 7 - July 22";
  $description = "End of the rainy season";
  $hello = "梅雨明けが近く、本格的な暑さが始まる集中豪雨のシーズン。蓮の花が咲き、蝉の合唱が始まる「暑中見舞い」を出す頃。";
} elseif ($datetime >= '07-23' and $datetime <= '08-07') {
  $sekki = "taisho";
  $sekkiName = "大暑";
  $date = "July 23 - August 7";
  $description = "Hottest time of the year";
  $hello = "最も暑い節という意味だが実際は次の節の方が暑い。学校は夏休みに入り、空には雲の峰が高々とそびえるようになる。夏の土用の時期。";
} elseif ($datetime >= '08-08' and $datetime <= '08-22') {
  $sekki = "risshu";
  $sekkiName = "立秋";
  $date = "August 8 - August 22";
  $description = "The Beginning of Autumn";
  $hello = "一年で一番暑い頃。一番暑いと言うことはあとは涼しくなるばかり。季節の挨拶が「残暑見舞い」に替わる。";
} elseif ($datetime >= '08-23' and $datetime <= '09-07') {
  $sekki = "shosho";
  $sekkiName = "処暑";
  $date = "August 23 - September 7";
  $description = "Hot weather abates";
  $hello = "暑さが和らぐ頃。マツムシや鈴虫など心地よい虫の声が聞こえ、朝夕は心地よい涼風が吹く。同時に台風の季節も到来する。";
} elseif ($datetime >= '09-08' and $datetime <= '09-22') {
  $sekki = "hakuro";
  $sekkiName = "白露";
  $date = "September 8 - September 22";
  $description = "Dew forms on the leaves";
  $hello = "野に顔を出しはじめた薄の穂に朝露がつき、白い粒のように光って見える頃。涼風に幾分の肌寒さを感じさせる冷風が混じり始める。";
} elseif ($datetime >= '09-23' and $datetime <= '10-07') {
  $sekki = "shuubun";
  $sekkiName = "秋分";
  $date = "September 23 - October 7";
  $description = "The Autumn Equinox";
  $hello = "「暑さ寒さも彼岸まで」の言葉通り、暑い日に代わり冷気を感ずる日が増えはじめ、秋が深まっていく。秋の七草が咲き揃う頃。";
} elseif ($datetime >= '10-08' and $datetime <= '10-23') {
  $sekki = "kanro";
  $sekkiName = "寒露";
  $date = "October 8 - October 23";
  $description = "Weather becomes colder";
  $hello = "夜が長くなり露がつめたく感じられる頃。菊の花が咲き始め、山の木々の葉は紅葉の準備に入る。安定して秋晴れの日が多くなる。";
} elseif ($datetime >= '10-24' and $datetime <= '11-07') {
  $sekki = "soukou";
  $sekkiName = "霜降";
  $date = "October 24 - November 7";
  $description = "The Season of Frost";
  $hello = "北国や山間部では、朝霜が降りて草木が白く化粧をする頃。野の花の数は減り始め、代わって山を紅葉が飾る。人々や動物たちの冬仕度が始まる。";
} elseif ($datetime >= '11-08' and $datetime <= '11-21') {
  $sekki = "rittou";
  $sekkiName = "立冬";
  $date = "November 8 - November 21";
  $description = "The Beginning of Winter";
  $hello = "木枯らしが吹き、北国や高山からは初雪の知らせも届く頃。冬枯れの景色の中で山茶花や水仙の花が咲きはじめる。";
} elseif ($datetime >= '11-22' and $datetime <= '12-06') {
  $sekki = "shousetsu";
  $sekkiName = "小雪";
  $date = "November 22 - December 6";
  $description = "Snow appears on distant mountains";
  $hello = "陽射しは弱まり、冷え込みが厳しくなる。木々の葉は落ち、平地にも初雪が舞い始める。「お歳暮」の準備をする期間。";
} elseif ($datetime >= '12-07' and $datetime <= '12-21') {
  $sekki = "taisetsu";
  $sekkiName = "大雪";
  $date = "December 7 - December 21";
  $description = "Cold winds blow from Siberia";
  $hello = "山々は雪の衣を纏って冬の姿となり、動物たちが冬ごもりに入る時期。鮭が川を遡上し、鱈など冬の魚の漁が盛んになる。";
} elseif ($datetime >= '12-22') {
  $sekki = "touji";
  $sekkiName = "冬至";
  $date = "December 22 - January 5";
  $description = "The Winter Solstice";
  $hello = "冬至日より日が伸び始めることから、古くには年の始点と考えられた。栄養価の高いかぼちゃを食べ、柚子湯に浸かり無病息災を願う。";
}