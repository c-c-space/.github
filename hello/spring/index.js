// ?sekki=24
let thisSeason,
    thisDate,
    thisDescription;

if (location.search) {
    const queryString = location.search;
    const params = new URLSearchParams(queryString)
    let thisSekki = params.get("sekki")

    if (thisSekki === "risshun") {
        thisSeason = "立春 " + thisSekki;
        thisDate = "February 4 - February 18";
        thisDescription = "The Beginning of Spring";
    } else if (thisSekki === "usui") {
        thisSeason = "雨水 " + thisSekki;
        thisDate = "February 19 - March 4";
        thisDescription = "Snow melts into water";
    } else if (thisSekki === "keichitsu") {
        thisSeason = "啓蟄 " + thisSekki;
        thisDate = "March 5 - March 19";
        thisDescription = "Insects emerge from the ground";
    } else if (thisSekki === "shunbun") {
        thisSeason = "春分 " + thisSekki;
        thisDate = "March 20 - April 3";
        thisDescription = "The Spring Equinox";
    } else if (thisSekki === "seimei") {
        thisSeason = "清明 " + thisSekki;
        thisDate = "April 4 - April 18";
        thisDescription = "Clear and Bright, Plants flower";
    } else if (thisSekki === "kokuu") {
        thisSeason = "穀雨 " + thisSekki;
        thisDate = "April 19 - May 4";
        thisDescription = "Spring rains and seed sowing";
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
    thisSeason = "春 Spring";
    thisDate = "February 4 - May 4";
    thisDescription = "「はる」は万物が発る季節";

    document.addEventListener('DOMContentLoaded', () => {
        koJSON('sekki.json')
        sekkiJSON('sekki.json')
        colorJSON('color.json')
    }, false)
}