// ?sekki=24

if (location.search) {
    const queryString = location.search;
    const params = new URLSearchParams(queryString)
    thisSekki = params.get("sekki")

    if (thisSekki === "risshu") {
        thisSeason = "立秋 " + thisSekki;
        thisDate = "August 8 - August 22";
        thisDescription = "The Beginning of Autumn";
        thisHello = "一年で一番暑い頃。一番暑いと言うことはあとは涼しくなるばかり。季節の挨拶が「残暑見舞い」に替わる。";
    } else if (thisSekki === "shosho") {
        thisSeason = "処暑 " + thisSekki;
        thisDate = "August 23 - September 7";
        thisDescription = "Hot weather abates";
        thisHello = "暑さが和らぐ頃。マツムシや鈴虫など心地よい虫の声が聞こえ、朝夕は心地よい涼風が吹く。同時に台風の季節も到来する。";
    } else if (thisSekki === "hakuro") {
        thisSeason = "白露 " + thisSekki;
        thisDate = "September 8 - September 22";
        thisDescription = "Dew forms on the leaves";
        thisHello = "野に顔を出しはじめた薄の穂に朝露がつき、白い粒のように光って見える頃。涼風に幾分の肌寒さを感じさせる冷風が混じり始める。";
    } else if (thisSekki === "shuubun") {
        thisSeason = "秋分 " + thisSekki;
        thisDate = "September 23 - October 7";
        thisDescription = "The Autumn Equinox";
        thisHello = "「暑さ寒さも彼岸まで」の言葉通り、暑い日に代わり冷気を感ずる日が増えはじめ、秋が深まっていく。秋の七草が咲き揃う頃。";
    } else if (thisSekki === "kanro") {
        thisSeason = "寒露 " + thisSekki;
        thisDate = "October 8 - October 23";
        thisDescription = "Weather becomes colder";
        thisHello = "夜が長くなり露がつめたく感じられる頃。菊の花が咲き始め、山の木々の葉は紅葉の準備に入る。安定して秋晴れの日が多くなる。";
    } else if (thisSekki === "soukou") {
        thisSeason = "霜降 " + thisSekki;
        thisDate = "October 24 - November 7";
        thisDescription = "The Season of Frost";
        thisHello = "北国や山間部では、朝霜が降りて草木が白く化粧をする頃。野の花の数は減り始め、代わって山を紅葉が飾る。人々や動物たちの冬仕度が始まる。";
    }
} else {
    thisSeason = "秋 Autumn";
    thisDate = "August 8 - November 7";
    thisDescription = "「あき」は草木が紅（あか）く染まる季節";
    thisHello = "秋の真ん中、昼夜の長さがほぼ当分に二分される（日本の場合、実際には昼の方が14分ほど長い）秋分の日は国民の祝日。「祖先をうやまい、なくなつた人々をしのぶ」日";
}