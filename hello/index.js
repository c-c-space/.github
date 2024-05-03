'use strict'

function changeHidden() {
    const mainAll = document.querySelectorAll('main')
    mainAll.forEach(main => {
        if (main.hidden == false) {
            main.hidden = true;
        } else {
            main.hidden = false;
        }
    })
}

if (localStorage.getItem('yourInfo')) {
    switch (document.readyState) {
        case "loading":
            const head = document.querySelector('head')
            const recognitionJS = document.createElement("script")
            recognitionJS.src = 'js/recognition.js';
            head.appendChild(recognitionJS)

            const synthesisJS = document.createElement("script")
            synthesisJS.src = 'js/synthesis.js';
            head.appendChild(synthesisJS)
            break;
    }
}

document.addEventListener('readystatechange', event => {
    if (event.target.readyState === 'interactive') {
        const loginBtn = document.querySelector('#login-btn')
        const helloForm = document.querySelector('#hello form')
        const submitBtn = document.querySelector('#submit-btn')
        if (localStorage.getItem('yourInfo')) {
            creatVoises('#voice', '')
            helloForm.addEventListener('submit', function (e) {
                e.preventDefault()

                const thisText = document.querySelector('#readme')
                const voiceIndex = document.querySelector('#voice-select')
                const selectVoice = voiceIndex.selectedIndex;
                const thisPitch = document.querySelector("#pitch").value;
                const thisRate = document.querySelector("#rate").value;

                let thisHello = {
                    timestamp: new Date().toLocaleString(),
                    hello: thisText.innerText,
                    voice: voiceIndex.options[selectVoice].value,
                    lang: voiceIndex.options[selectVoice].dataset.lang,
                    pitch: thisPitch,
                    rate: thisRate
                }

                const helloJSON = JSON.stringify(thisHello)
                async function submitThis() {
                    let url = 'submit.php'
                    let response = await fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json;charset=utf-8'
                        },
                        body: helloJSON
                    })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data)
                        })
                        .catch(error => {
                            console.log(error)
                        });
                }

                submitThis()
                setTimeout(() => {
                    location.reload()
                }, 1500)
            }, false)
        } else {
            fetchHTML('../profile/yourinfo.php', '#hello form section')
            loginBtn.textContent = 'Submit Your Info to Enter Here';
            submitBtn.textContent = 'Enter Here';
            helloForm.addEventListener('submit', function (e) {
                e.preventDefault()
                setLOG()
            }, false)
        }
        fetchText('readme.md', '#howto')
    } else if (event.target.readyState === 'complete') {
        const d = new Date(),
            mm = d.getMonth() + 1,
            dd = ("0" + d.getDate()).slice(-2),
            mmdd = parseInt(mm + dd),
            hh = Number(d.getHours());

        let siki,
            sikiName,
            sikiDate,
            sekki,
            sekkiName,
            sekkiDate,
            timeframe,
            greeting;

        if (mmdd >= 204 && mmdd <= 229 || mmdd >= 301 && mmdd <= 331 || mmdd >= 401 && mmdd <= 430 || mmdd >= 501 && mmdd <= 504) {
            siki = "spring";
            sikiName = "春";
            sikiDate = "February 4 - May 4";
            colorJSON('/hello/spring/color.json')
        } else if (mmdd >= 505 && mmdd <= 531 || mmdd >= 601 && mmdd <= 630 || mmdd >= 701 && mmdd <= 731 || mmdd >= 801 && mmdd <= 807) {
            siki = "summer";
            sikiName = "夏";
            sikiDate = "May 5 - August 7";
            colorJSON('/hello/summer/color.json')
        } else if (mmdd >= 808 && mmdd <= 831 || mmdd >= 901 && mmdd <= 930 || mmdd >= 1001 && mmdd <= 1031 || mmdd >= 1101 && mmdd <= 1107) {
            siki = "autumn";
            sikiName = "秋";
            sikiDate = "August 8 - November 7";
            colorJSON('/hello/autumn/color.json')
        } else {
            siki = "winter";
            sikiName = "冬";
            sikiDate = "November 8 - February 3";
            colorJSON('/hello/winter/color.json')
        }

        if (mmdd >= 106 && mmdd <= 119) {
            sekki = "shoukan";
            sekkiName = "小寒";
            sekkiDate = "January 6 - January 19";
        } else if (mmdd >= 120 && mmdd <= 131 || mmdd >= 201 && mmdd <= 203) {
            sekki = "daikan";
            sekkiName = "大寒";
            sekkiDate = "January 20 - February 3";
        } else if (mmdd >= 204 && mmdd <= 218) {
            sekki = "risshun";
            sekkiName = "立春";
            sekkiDate = "February 4 - February 18";
        } else if (mmdd >= 219 && mmdd <= 229 || mmdd >= 301 && mmdd <= 304) {
            sekki = "usui";
            sekkiName = "雨水";
            sekkiDate = "February 19 - March 4";
        } else if (mmdd >= 305 && mmdd <= 319) {
            sekki = "keichitsu";
            sekkiName = "啓蟄";
            sekkiDate = "March 5 - March 19";
        } else if (mmdd >= 320 && mmdd <= 331 || mmdd >= 401 && mmdd <= 403) {
            sekki = "shunbun";
            sekkiName = "春分";
            sekkiDate = "March 20 - April 3";
        } else if (mmdd >= 404 && mmdd <= 418) {
            sekki = "seimei";
            sekkiName = "清明";
            sekkiDate = "April 4 - April 18";
        } else if (mmdd >= 419 && mmdd <= 430 || mmdd >= 501 && mmdd <= 504) {
            sekki = "kokuu";
            sekkiName = "穀雨";
            sekkiDate = "April 19 - May 4";
        } else if (mmdd >= 505 && mmdd <= 519) {
            sekki = "rikka";
            sekkiName = "立夏";
            sekkiDate = "May 5 - May 19";
        } else if (mmdd >= 520 && mmdd <= 531 || mmdd >= 601 && mmdd <= 604) {
            sekki = "shouman";
            sekkiName = "小満";
            sekkiDate = "May 20 - Jun 4";
        } else if (mmdd >= 605 && mmdd <= 620) {
            sekki = "boushu";
            sekkiName = "芒種";
            sekkiDate = "Jun 5 - Jun 20";
        } else if (mmdd >= 621 && mmdd <= 630 || mmdd >= 701 && mmdd <= 706) {
            sekki = "geshi";
            sekkiName = "夏至";
            sekkiDate = "Jun 21 - July 6";
        } else if (mmdd >= 707 && mmdd <= 722) {
            sekki = "shousho";
            sekkiName = "小暑";
            sekkiDate = "July 7 - July 22";
        } else if (mmdd >= 723 && mmdd <= 731 || mmdd >= 801 && mmdd <= 807) {
            sekki = "taisho";
            sekkiName = "大暑";
            sekkiDate = "July 23 - August 7";
        } else if (mmdd >= 808 && mmdd <= 822) {
            sekki = "risshu";
            sekkiName = "立秋";
            sekkiDate = "August 8 - August 22";
        } else if (mmdd >= 823 && mmdd <= 831 || mmdd >= 901 && mmdd <= 907) {
            sekki = "shosho";
            sekkiName = "処暑";
            sekkiDate = "August 23 - September 7";
        } else if (mmdd >= 908 && mmdd <= 922) {
            sekki = "hakuro";
            sekkiName = "白露";
            sekkiDate = "September 8 - September 22";
        } else if (hakuro >= 923 && mmdd <= 930 || mmdd >= 1001 && mmdd <= 1007) {
            sekki = "shuubun";
            sekkiName = "秋分";
            sekkiDate = "September 23 - October 7";
        } else if (mmdd >= 1008 && mmdd <= 1023) {
            sekki = "kanro";
            sekkiName = "寒露";
            sekkiDate = "October 8 - October 23";
        } else if (mmdd >= 1024 && mmdd <= 1031 || mmdd >= 1101 && mmdd <= 1107) {
            sekki = "soukou";
            sekkiName = "霜降";
            sekkiDate = "October 24 - November 7";
        } else if (mmdd >= 1108 && mmdd <= 1121) {
            sekki = "rittou";
            sekkiName = "立冬";
            sekkiDate = "November 8 - November 21";
        } else if (mmdd >= 1122 && mmdd <= 1130 || mmdd >= 1201 && mmdd <= 1206) {
            sekki = "shousetsu";
            sekkiName = "小雪";
            sekkiDate = "November 22 - December 6";
        } else if (mmdd >= 1207 && mmdd <= 1221) {
            sekki = "taisetsu";
            sekkiName = "大雪";
            sekkiDate = "December 7 - December 21";
        } else {
            sekki = "touji";
            sekkiName = "冬至";
            sekkiDate = "December 22 - January 5";
        }

        if (hh >= 6 && hh <= 11) {
            timeframe = "morning";
            greeting = "Good Morning おはよう";
        } else if (hh >= 12 && hh <= 17) {
            timeframe = "afternoon";
            greeting = "Hello こんにちは";
        } else if (hh >= 18 && hh <= 23) {
            timeframe = "evening";
            greeting = "Good Evening こんばんは";
        } else {
            timeframe = "night";
            greeting = "Good Night おやすみ";
        }

        const hello = document.querySelector('#log h1 b');
        hello.textContent = greeting;

        const thisSiki = document.querySelector('#thisSiki');
        thisSiki.href = `${siki}/`;
        const thisSikiI = document.querySelector('#thisSiki i');
        thisSikiI.innerText = sikiDate;
        const thisSikiB = document.querySelector('#thisSiki B');
        thisSikiB.innerText = `${sikiName} ${siki}`;

        const thisSekki = document.querySelector('#thisSekki');
        const h2A = document.querySelector('#log h2 a');
        thisSekki.href = `${siki}/?sekki=${sekki}`;
        h2A.href = `${siki}/?sekki=${sekki}`;
        const thisSekkiI = document.querySelector('#thisSekki i');
        thisSekkiI.innerText = sekkiDate;
        const thisSekkiB = document.querySelector('#thisSekki B');
        const h2B = document.querySelector('#log h2 b');
        const h2I = document.querySelector('#log h2 i');
        thisSekkiB.innerText = `${sekkiName} ${sekki}`;
        h2A.innerText = sekkiName;
        h2B.innerText = sekki;
        h2I.innerText = siki;

        if (localStorage.getItem('yourInfo')) {
            const sekkiB = document.querySelector('#login-btn strong');
            sekkiB.textContent = sekki;

            const timeframeI = document.querySelector('#login-btn i');
            timeframeI.textContent = timeframe;
        }

        helloCSV(siki + '/' + sekki + '/' + timeframe + '.csv?' + Date.now())

        const lastModified = document.querySelector('#lastModified');
        lastModified.innerHTML =
            'Last Modified <time datetime="'
            + document.lastModified + '">'
            + document.lastModified + '</time>';
    }
}, false)
