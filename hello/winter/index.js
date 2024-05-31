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

    function resolveAfter2Seconds() {
        return new Promise(() => {
            setTimeout(() => {
                viewAll()
            }, 2000);
        });
    }

    async function asyncCall() {
        csvtojson(`${thisSekki}/morning.csv`)
        csvtojson(`${thisSekki}/afternoon.csv`)
        csvtojson(`${thisSekki}/evening.csv`)
        csvtojson(`${thisSekki}/night.csv`)
        const result = await resolveAfter2Seconds();
    }

    document.addEventListener('DOMContentLoaded', () => {
        document.querySelector('#about i').textContent = "";
        koJSON(`${thisSekki}/ko.json`)
        sekkiJSON('sekki.json')
        colorJSON('color.json')
        asyncCall()
    }, false)
} else {
    thisSeason = "冬 winter";
    thisDate = "November 8 - February 3";
    thisDescription = "「ふゆ」は万物が冷ゆ（ひゆ）る季節";

    document.addEventListener('DOMContentLoaded', () => {
        koJSON('sekki.json')
        sekkiJSON('sekki.json')
        colorJSON('color.json')
    }, false)
}