'use strict'

document.addEventListener('readystatechange', event => {
  if (event.target.readyState === 'interactive') {
    creatVoises('#speechAPI', 'ja|en')
    playStop('#speechAPI', '#speech')

    const nextBtn = document.querySelector('#submit-btn')
    const backBtn = document.querySelector('#back-btn')

    if (localStorage.getItem('yourInfo')) {
      // yourInfo 情報を表示
      const yourInfo = JSON.parse(localStorage.getItem('yourInfo'));
      nextBtn.innerHTML = `by ${yourInfo.os}<br>${yourInfo.ip} ${yourInfo.port}`;
      nextBtn.style.fontSize = '100%';
      nextBtn.style.lineHeight = '150%';
      nextBtn.style.padding = '0.75rem 1rem';
      nextBtn.addEventListener('click', function () {
        openModal()
      }, false)

      fetchHTML('welcome.php', 'h1')

      const removetAll = document.querySelectorAll('#yourinfo');
      removetAll.forEach((removeEach) => {
        removeEach.remove()
      }, false)
    } else {
      nextBtn.textContent = "Your Info";
      nextBtn.style.fontSize = '175%';
      nextBtn.style.padding = '0.75rem 1rem';
      nextBtn.addEventListener('click', function () {
        changeHidden()
        environmentStream()
      }, false)

      backBtn.addEventListener('click', function () {
        changeHidden()
        stopStream()
      }, false)

      fetchHTML('greeting.php', 'h1')
      fetchHTML('profile/yourinfo.php', '#login h3')
      fetchHTML('profile/yourinfo.html', '#modal section')
    }
  } else if (event.target.readyState === 'complete') {
    const yourStrage = document.querySelector('#hello h2')

    if (localStorage.getItem('yourInfo')) {
      yourStrage.innerHTML = '<u>You Posted</u><br/>';
      yourStrage.style.pointerEvents = "auto";
      yourStrage.style.userSelect = "auto";

      // sign 情報を表示
      if (!localStorage.getItem('sign')) {
        yourStrage.innerHTML +=
          '<a href="/sign/collection/">0</a>';
      } else {
        const yourSign = JSON.parse(localStorage.getItem('sign'))
        yourStrage.innerHTML +=
          `<a href="/sign/">${yourSign.length}</a>`;
      }
      yourStrage.innerHTML +=
        ' Colors & Symbols that Suit You<br/>';

      // emoji 情報を表示
      if (!localStorage.getItem('emoji')) {
        yourStrage.innerHTML +=
          '<a href="/org/">0</a>';
      } else {
        const emoji = JSON.parse(localStorage.getItem('emoji'))
        yourStrage.innerHTML +=
          `<a href="/org/">${emoji.length}</a>`;
      }
      yourStrage.innerHTML +=
        ' Emoji that Your Emotions<br/>';

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
        ' things that you heard<br/>';

    } else {
      const login = document.querySelector('#login')
      login.addEventListener('submit', function (e) {
        e.preventDefault()
        setLOG()
      }, false)
    }
  }
})

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