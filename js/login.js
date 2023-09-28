'use strict'

// form#login から投稿された ポート番号・IPアドレス・OS等情報を ローカルストレージと月毎のCSVに追加

const form = document.querySelector('form#login')
form.addEventListener('submit', function() {
  setLOG()
}, false);

function setLOG() {
  const hqdn = document.querySelector('#hqdn').textContent,
    ip = document.querySelector('#ip').textContent,
    os = document.querySelector('#os').textContent;

  const yourInfo = {
    port: hqdn,
    ip: ip,
    os: os
  }

  const yourJSON = JSON.stringify(yourInfo)
  localStorage.setItem('yourInfo', yourJSON)

  async function submitLOG() {
    let url = '/login.php'
    let response = await fetch(url, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json;charset=utf-8'
      },
      body: yourJSON
    })

      .then(response => response.json())
      .then(data => {
        console.log(data)
      })
      .catch(error => {
        console.log(error)
      });
  }

  submitLOG();
  setTimeout(() => {
    location.reload()
  }, 1500)
}
