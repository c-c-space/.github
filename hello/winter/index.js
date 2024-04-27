// ?sekki=24
let thisSeason,
    thisDate,
    thisDescription;

if (location.search) {
    const queryString = location.search;
    const params = new URLSearchParams(queryString)
    let thisSekki = params.get("sekki")

    if (thisSekki === "rittou") {
        thisSeason = "立冬 " + thisSekki;
        thisDate = "November 8 - November 21";
        thisDescription = "The Beginning of Winter";
    } else if (thisSekki === "shousetsu") {
        thisSeason = "小雪 " + thisSekki;
        thisDate = "November 22 - December 6";
        thisDescription = "Snow appears on distant mountains";
    } else if (thisSekki === "taisetsu") {
        thisSeason = "大雪 " + thisSekki;
        thisDate = "December 7 - December 21";
        thisDescription = "Cold winds blow from Siberia";
    } else if (thisSekki === "touji") {
        thisSeason = "冬至 " + thisSekki;
        thisDate = "December 22 - January 5";
        thisDescription = "The Winter Solstice";
    } else if (thisSekki === "shoukan") {
        thisSeason = "小寒 " + thisSekki;
        thisDate = "January 6 - January 19";
        thisDescription = "Cold weather nears its peak";
    } else if (thisSekki === "daikan") {
        thisSeason = "大寒 " + thisSekki;
        thisDate = "January 20 - February 3";
        thisDescription = "Coldest time of the year";
    }

    document.addEventListener('DOMContentLoaded', () => {
        document.querySelector('#about i').remove()
    }, false)

    window.addEventListener('load', () => {
        koJSON(`${thisSekki}/ko.json`)
        helloCSV(`${thisSekki}/morning.csv`)
        helloCSV(`${thisSekki}/afternoon.csv`)
        helloCSV(`${thisSekki}/evening.csv`)
        helloCSV(`${thisSekki}/night.csv`)
    }, false)
} else {
    thisSeason = "冬 winter";
    thisDate = "November 8 - February 3";
    thisDescription = "「ふゆ」は万物が冷ゆ（ひゆ）る季節";

    window.addEventListener('load', () => {
        koJSON('sekki.json')
    }, false)
}