// ?sekki=24

if (location.search) {
    const queryString = location.search;
    const params = new URLSearchParams(queryString)
    thisSekki = params.get("sekki")

    if (thisSekki === "rikka") {
        thisSeason = "立夏 " + thisSekki;
        thisDate = "May 5 - May 19";
        thisDescription = "The Beginning of Summer";
        thisHello = "一年のうちで、もっとも過ごしやすい節。野山が新緑に彩られ、夏の気配が感じられるようになる。かえるが鳴き始め、竹の子が生えてくる頃。";
    } else if (thisSekki === "shouman") {
        thisSeason = "小満 " + thisSekki;
        thisDate = "May 20 - Jun 4";
        thisDescription = "Plants come into full leaf";
        thisHello = "あらゆる生命が満ちていく頃。陽気がよくなり、草木などの生物が次第に生長して生い茂る。西日本でははしり梅雨が現れる。";
    } else if (thisSekki === "boushu") {
        thisSeason = "芒種 " + thisSekki;
        thisDate = "Jun 5 - Jun 20";
        thisDescription = "Time to plant rice seedlings";
        thisHello = "稲の穂先のように芒（とげのようなもの）のある穀物の種まきをする頃という意味だが、現在の種まきは大分早まっている。梅の実が熟し、梅雨のじめじめした空模様がはじまる。";
    } else if (thisSekki === "geshi") {
        thisSeason = "夏至 " + thisSekki;
        thisDate = "Jun 21 - July 6";
        thisDescription = "The Summer Solstice";
        thisHello = "一年で昼の時間が一番長くなる節だが、日本の大部分は梅雨の時期であまり実感されない。花しょうぶや紫陽花などの雨の似合う花が咲き、暑さが増して来る頃。";
    } else if (thisSekki === "shousho") {
        thisSeason = "小暑 " + thisSekki;
        thisDate = "July 7 - July 22";
        thisDescription = "End of the rainy season";
        thisHello = "梅雨明けが近く、本格的な暑さが始まる集中豪雨のシーズン。蓮の花が咲き、蝉の合唱が始まる「暑中見舞い」を出す頃。";
    } else if (thisSekki === "taisho") {
        thisSeason = "大暑 " + thisSekki;
        thisDate = "July 23 - August 7";
        thisDescription = "Hottest time of the year";
        thisHello = "最も暑い節という意味だが実際は次の節の方が暑い。学校は夏休みに入り、空には雲の峰が高々とそびえるようになる。夏の土用の時期。";
    }
} else {
    thisSeason = "夏 Summer";
    thisDate = "May 5 - August 7";
    thisDescription = "「なつ」は熱（ねつ）の季節";
    thisHello = "夏の真ん中、北半球では1年のうちで最も昼（日の出から日没まで）の時間が長い夏至は、日本の大部分で梅雨の最中で、あまり実感されない";
}