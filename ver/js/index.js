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
    fetchHTML('profile/yourinfo.html', '#modal section')
  } else if (event.target.readyState === 'complete') {
    const nextBtn = document.querySelector('#submit-btn')

    if (localStorage.getItem('yourInfo')) {
      // ローカルストレージに yourInfo 情報がある場合
      fetchHTML('hello/welcome.php', '#hello h1')
      const yourStrage = document.querySelector('#hello h2')
      yourStrage.innerHTML = ""
      yourStrage.innerHTML = '<u>You Posted</u><br/>'

      // sign 情報を表示
      if (!localStorage.getItem('sign')) {
        yourStrage.innerHTML += '<a href="/sign/">0</a>'
      } else {
        const yourSign = JSON.parse(localStorage.getItem('sign'))
        yourStrage.innerHTML += `<a href="/sign/">${yourSign.length}</a>`
      }
      yourStrage.innerHTML += ' Colors & Symbols that Suit You<br/>'

      // ローカルストレージの情報をすべて削除
      nextBtn.textContent = "すべて削除 Delete All"
      nextBtn.addEventListener('click', function () {
        localStorage.clear()
        setTimeout(() => {
          location.reload()
        }, 1000)
      })
    } else {
      nextBtn.textContent = "Your Info";
      nextBtn.addEventListener('click', function () {
        changeHidden()
        environmentStream()
      }, false)

      const login = document.querySelector('#login')
      login.addEventListener('submit', function (e) {
        e.preventDefault();
        setLOG()
      }, false)

      const backBtn = document.querySelector('#back-btn')
      backBtn.addEventListener('click', function () {
        changeHidden()
        stopStream()
      }, false)
    }
  }
});
