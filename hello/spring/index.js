// ?sekki=24

if (location.search) {
    const queryString = location.search;
    const params = new URLSearchParams(queryString)
    thisSekki = params.get("sekki")

    if (thisSekki === "risshun") {
        thisSeason = "立春 " + thisSekki;
        thisDate = "February 4 - February 18";
        thisDescription = "The Beginning of Spring";
        thisHello = "旧暦では、一年のはじまりは立春から。まだ寒さの厳しい時期だが日脚は徐々に伸び、暖かい地方では梅が咲き始める。";
    } else if (thisSekki === "usui") {
        thisSeason = "雨水 " + thisSekki;
        thisDate = "February 19 - March 4";
        thisDescription = "Snow melts into water";
        thisHello = "空から降るものが雪から雨に替わる頃。深く積もった雪も融け始める。草木がほんのり色づく様子や、春霞を楽しめる季節。";
    } else if (thisSekki === "keichitsu") {
        thisSeason = "啓蟄 " + thisSekki;
        thisDate = "March 5 - March 19";
        thisDescription = "Insects emerge from the ground";
        thisHello = "冬眠をしていた虫が穴から出てくる頃。蝶々が飛びはじめ、柳の若芽が芽吹き、蕗のとうの花や桃の花が咲く頃。";
    } else if (thisSekki === "shunbun") {
        thisSeason = "春分 " + thisSekki;
        thisDate = "March 20 - April 3";
        thisDescription = "The Spring Equinox";
        thisHello = "春分日をはさんで前後7日間が彼岸。雀が巣をつくり始め、桜が開花する頃。花冷えや寒の戻りがあるので暖かいと言っても油断は禁物。この後は昼の時間が長くなって行く。";
    } else if (thisSekki === "seimei") {
        thisSeason = "清明 " + thisSekki;
        thisDate = "April 4 - April 18";
        thisDescription = "Clear and Bright, Plants flower";
        thisHello = "清浄明潔の略。晴れ渡った空には当に清浄明潔という語にふさわしい。つばめが飛来し、爽やかな風が吹く頃。地上に目を移せば、百花が咲き競う。";
    } else if (thisSekki === "kokuu") {
        thisSeason = "穀雨 " + thisSekki;
        thisDate = "April 19 - May 4";
        thisDescription = "Spring rains and seed sowing";
        thisHello = "田んぼや畑の準備が整い、それに合わせるように柔らかな春の雨が降る頃。この頃より変りやすい春の天気も安定し日差しも強まる。植物が緑一色に輝きはじめる。";
    }
} else {
    thisSeason = "春 Spring";
    thisDate = "February 4 - May 4";
    thisDescription = "「はる」は万物が発る季節";
    thisHello = "春の真ん中、昼夜の長さがほぼ当分に二分される（日本の場合、実際には昼の方が14分ほど長い）春分の日は国民の祝日。「自然をたたえ、生物をいつくしむ」日";
}