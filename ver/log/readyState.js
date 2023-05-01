"use strict"

document.addEventListener('readystatechange', event => {
  if (event.target.readyState === 'loading') {
    // 文書の読み込み中に実行する
  } else if (event.target.readyState === 'interactive') {
    const yourInfo = JSON.parse(localStorage.getItem('yourInfo'));
    const yourStorage = document.querySelector('#yourInfo');

    if(!localStorage.getItem('yourInfo')) {
      const logAll = document.querySelectorAll('.log');
      for  (let log of logAll) {
        log.remove()
      }
      const nowForm = document.querySelector('form');
      nowForm.innerHTML = `<button type="button" onclick="location.replace('/')">creative-community.space</button>`
    } else {
      yourStorage.innerHTML = `
      <span>あなたの通信情報／ブラウザ等情報</span>
      <span><button id="update" type="button" onclick="setLOG()">Update</button></span>
      <span><small id="hqdn">${yourInfo.port}</small> <small id="ip">${yourInfo.ip}</small></span>
      <span id="os">${yourInfo.os}</span>
      `;
    }
  } else if (event.target.readyState === 'complete') {
    const userMedia = document.querySelector("#userMedia")
    userMedia.style.width = window.innerWidth
    userMedia.style.height = window.innerHeight

    const media = navigator.mediaDevices.getUserMedia({
      video: true,
      video: { facingMode: "environment" }, //背面カメラ
      //video: { facingMode: "user" }, //インカメラ
      audio: false,
    });

    media.then((stream) => {
      userMedia.srcObject = stream;
    });
  }
});
