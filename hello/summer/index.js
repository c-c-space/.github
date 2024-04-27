// ?sekki=24
let thisSeason,
    thisDate,
    thisDescription;

if (location.search) {
    const queryString = location.search;
    const params = new URLSearchParams(queryString)
    let thisSekki = params.get("sekki")

    if (thisSekki === "rikka") {
        thisSeason = "立夏 " + thisSekki;
        thisDate = "May 5 - May 19";
        thisDescription = "The Beginning of Summer";
    } else if (thisSekki === "shouman") {
        thisSeason = "小満 " + thisSekki;
        thisDate = "May 20 - Jun 4";
        thisDescription = "Plants come into full leaf";
    } else if (thisSekki === "boushu") {
        thisSeason = "芒種 " + thisSekki;
        thisDate = "Jun 5 - Jun 20";
        thisDescription = "Time to plant rice seedlings";
    } else if (thisSekki === "geshi") {
        thisSeason = "夏至 " + thisSekki;
        thisDate = "Jun 21 - July 6";
        thisDescription = "The Summer Solstice";
    } else if (thisSekki === "shousho") {
        thisSeason = "小暑 " + thisSekki;
        thisDate = "July 7 - July 22";
        thisDescription = "End of the rainy season";
    } else if (thisSekki === "taisho") {
        thisSeason = "大暑 " + thisSekki;
        thisDate = "July 23 - August 7";
        thisDescription = "Hottest time of the year";
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
    thisSeason = "夏 summer";
    thisDate = "May 5 - August 7";
    thisDescription = "「なつ」は熱（ねつ）の季節";

    window.addEventListener('load', () => {
        koJSON('sekki.json')
    }, false)
}