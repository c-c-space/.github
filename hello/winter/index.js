// ?sekki=24

if (location.search) {
    const queryString = location.search;
    const params = new URLSearchParams(queryString)
    thisSekki = params.get("sekki")

    if (thisSekki === "rittou") {
        thisSeason = "立冬 " + thisSekki;
        thisDate = "November 8 - November 21";
        thisDescription = "The Beginning of Winter";
        thisHello = "木枯らしが吹き、北国や高山からは初雪の知らせも届く頃。冬枯れの景色の中で山茶花や水仙の花が咲きはじめる。";
    } else if (thisSekki === "shousetsu") {
        thisSeason = "小雪 " + thisSekki;
        thisDate = "November 22 - December 6";
        thisDescription = "Snow appears on distant mountains";
        thisHello = "陽射しは弱まり、冷え込みが厳しくなる。木々の葉は落ち、平地にも初雪が舞い始める。「お歳暮」の準備をする期間。";
    } else if (thisSekki === "taisetsu") {
        thisSeason = "大雪 " + thisSekki;
        thisDate = "December 7 - December 21";
        thisDescription = "Cold winds blow from Siberia";
        thisHello = "山々は雪の衣を纏って冬の姿となり、動物たちが冬ごもりに入る時期。鮭が川を遡上し、鱈など冬の魚の漁が盛んになる。";
    } else if (thisSekki === "touji") {
        thisSeason = "冬至 " + thisSekki;
        thisDate = "December 22 - January 5";
        thisDescription = "The Winter Solstice";
        thisHello = "冬至日より日が伸び始めることから、古くには年の始点と考えられた。栄養価の高いかぼちゃを食べ、柚子湯に浸かり無病息災を願う。";
    } else if (thisSekki === "shoukan") {
        thisSeason = "小寒 " + thisSekki;
        thisDate = "January 6 - January 19";
        thisDescription = "Cold weather nears its peak";
        thisHello = "「寒の入り」といい、寒さが厳しくなる頃。これから節分までの期間が「寒」。「寒中見舞い」を出しはじめる時期。";
    } else if (thisSekki === "daikan") {
        thisSeason = "大寒 " + thisSekki;
        thisDate = "January 20 - February 3";
        thisDescription = "Coldest time of the year";
        thisHello = "一年で一番寒さの厳しい頃。逆の見方をすれば、これからは暖かくなると言うこと。蕗の花が咲き、鶏が卵を産みはじめ、春の足音が聞こえはじめる。";
    }
} else {
    thisSeason = "冬 winter";
    thisDate = "November 8 - February 3";
    thisDescription = "「ふゆ」は万物が冷ゆ（ひゆ）る季節";
    thisHello = "冬の真ん中、北半球では1年のうちで最も夜（日の入から日の出まで）の時間が長い冬至を境に太陽が生まれ変わり、陽気が増え始めるとされている";
}