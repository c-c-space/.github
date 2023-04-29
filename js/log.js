'use strict'

function setLOG() {
  const hqdn = document.querySelector('#hqdn').textContent;
  const ip = document.querySelector('#ip').textContent;
  const os = document.querySelector('#os').textContent;

  const yourInfo = {
    port : hqdn,
    ip : ip,
    os : os
  }

  const yourJSON = JSON.stringify(yourInfo);
  localStorage.setItem('yourInfo', yourJSON);

  async function submitLOG() {
    let url = '/log.php';
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
