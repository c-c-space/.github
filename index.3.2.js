'use strict'

// トップページ (/index.php) の内容を動的に生成する

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

document.addEventListener('readystatechange', event => {
  if (event.target.readyState === 'interactive') {
    if (localStorage.getItem('yourInfo')) {
      const removetAll = document.querySelectorAll('#yourinfo');
      removetAll.forEach((removeEach) => {
        removeEach.remove()
      });

      const whoisForm = document.querySelector('#whois');
      whoisForm.style.height = "100vw";
      whoisForm.style.maxHeight = "75vh";
      const whoisInfo = document.querySelector('#whois .data');
      whoisInfo.style.top = "auto";
      whoisInfo.style.bottom = "0";
    } else {
      fetchHTML('profile/yourinfo.html', '#modal section')
    }
  } else if (event.target.readyState === 'complete') {
    const nextBtn = document.querySelector('#submit-btn')
    const yourStrage = document.querySelector('#hello h2')

    if (localStorage.getItem('yourInfo')) {
      // ローカルストレージに yourInfo 情報がある場合
      yourStrage.innerHTML = '<u>You Posted</u><br/>';

      // sign 情報を表示
      if (!localStorage.getItem('sign')) {
        yourStrage.innerHTML +=
          '<a href="/sign/collection/">0</a>';
      } else {
        const yourSign = JSON.parse(localStorage.getItem('sign'))
        yourStrage.innerHTML +=
          `<a href="/sign/collection/">${yourSign.length}</a>`;
      }

      yourStrage.innerHTML +=
        ' Colors & Symbols that Suit You<br/>';

      // heard 情報を表示
      if (!localStorage.getItem('heard')) {
        yourStrage.innerHTML +=
          '<a href="/map/heard/">0</a>';
      } else {
        const heard = JSON.parse(localStorage.getItem('heard'))
        yourStrage.innerHTML +=
          `<a href="/map/">${heard.length}</a>`;
      }

      yourStrage.innerHTML +=
        ' things you heard<br/>';

      yourStrage.style.pointerEvents = "auto";
      yourStrage.style.userSelect = "auto";

      // yourInfo 情報を表示
      const yourInfo = JSON.parse(localStorage.getItem('yourInfo'));
      nextBtn.innerHTML = `by ${yourInfo.os}<br>${yourInfo.ip} ${yourInfo.port}`;
      nextBtn.style.fontSize = '100%';
      nextBtn.style.lineHeight = '150%';
      nextBtn.addEventListener('click', function () {
        openModal()
      })

      fetchHTML('hello/welcome.php', '#hello h1')
    } else {
      nextBtn.textContent = "Your Info";
      nextBtn.addEventListener('click', function () {
        changeHidden()
        environmentStream()
      }, false)

      const backBtn = document.querySelector('#back-btn')
      backBtn.addEventListener('click', function () {
        changeHidden()
        stopStream()
      }, false)

      const login = document.querySelector('#login')
      login.addEventListener('submit', function (e) {
        e.preventDefault()
        setLOG()
      }, false)
    }
  }
})
