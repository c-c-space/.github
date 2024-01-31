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
    }
  } else if (event.target.readyState === 'complete') {
    const nextBtn = document.querySelector('#submit-btn')
    const yourStrage = document.querySelector('#hello h2')

    fetchHTML('profile/yourinfo.html', '#modal section')

    if (localStorage.getItem('yourInfo')) {
      // ローカルストレージに yourInfo 情報がある場合
      yourStrage.innerHTML =
        '<u>You Posted</u><br/>';

      // sign 情報を表示
      if (!localStorage.getItem('sign')) {
        yourStrage.innerHTML +=
          '<a href="/sign/">0</a>';
      } else {
        const yourSign = JSON.parse(localStorage.getItem('sign'))
        yourStrage.innerHTML +=
          `<a href="/sign/">${yourSign.length}</a>`;
      }

      yourStrage.innerHTML +=
        ' Colors & Symbols that Suit You<br/>';

      // goout 情報を表示
      if (!localStorage.getItem('goout')) {
        yourStrage.innerHTML +=
          '<a href="/map/">0</a>';
      } else {
        const goout = JSON.parse(localStorage.getItem('goout'))
        yourStrage.innerHTML +=
          `<a href="/map/profile/">${goout.length}</a>`;
      }

      yourStrage.innerHTML +=
        ' Locations where you were<br/>';

      // heard 情報を表示
      if (!localStorage.getItem('heard')) {
        yourStrage.innerHTML +=
          '<a href="/map/heard/">0</a>';
      } else {
        const heard = JSON.parse(localStorage.getItem('heard'))
        yourStrage.innerHTML +=
          `<a href="/map/heard/www/">${heard.length}</a>`;
      }

      yourStrage.innerHTML +=
        ' things you heard<br/>';

      // yourInfo 情報を表示
      const yourInfo = JSON.parse(localStorage.getItem('yourInfo'));
      nextBtn.innerHTML = `<small>by ${yourInfo.os}<br>${yourInfo.ip} ${yourInfo.port}</small>`;
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
