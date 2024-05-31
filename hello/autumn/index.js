// ?sekki=24
let thisSeason,
    thisDate,
    thisDescription;

if (location.search) {
    const queryString = location.search;
    const params = new URLSearchParams(queryString)
    let thisSekki = params.get("sekki")

    if (thisSekki === "risshu") {
        thisSeason = "立秋 " + thisSekki;
        thisDate = "August 8 - August 22";
        thisDescription = "The Beginning of Autumn";
    } else if (thisSekki === "shosho") {
        thisSeason = "処暑 " + thisSekki;
        thisDate = "August 23 - September 7";
        thisDescription = "Hot weather abates";
    } else if (thisSekki === "hakuro") {
        thisSeason = "白露 " + thisSekki;
        thisDate = "September 8 - September 22";
        thisDescription = "Dew forms on the leaves";
    } else if (thisSekki === "shuubun") {
        thisSeason = "秋分 " + thisSekki;
        thisDate = "September 23 - October 7";
        thisDescription = "The Autumn Equinox";
    } else if (thisSekki === "kanro") {
        thisSeason = "寒露 " + thisSekki;
        thisDate = "October 8 - October 23";
        thisDescription = "Weather becomes colder";
    } else if (thisSekki === "soukou") {
        thisSeason = "霜降 " + thisSekki;
        thisDate = "October 24 - November 7";
        thisDescription = "The Season of Frost";
    }

    csvtojson(`${thisSekki}/morning.csv`)
    csvtojson(`${thisSekki}/afternoon.csv`)
    csvtojson(`${thisSekki}/evening.csv`)
    csvtojson(`${thisSekki}/night.csv`)

    document.addEventListener('DOMContentLoaded', () => {
        document.querySelector('#about i').textContent = "";
        koJSON(`${thisSekki}/ko.json`)
    }, false)
} else {
    thisSeason = "秋 autumn";
    thisDate = "August 8 - November 7";
    thisDescription = "「あき」は草木が紅（あか）く染まる季節";

    document.addEventListener('DOMContentLoaded', () => {
        koJSON('sekki.json')
    }, false)
}