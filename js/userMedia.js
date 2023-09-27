'use strict'

window.addEventListener('load', function(){
    userStream()
}, false);

function userStream() {
    const userMedia = document.createElement('video')
    userMedia.id = "userMedia"
    userMedia.setAttribute('autoplay', 'true')
    userMedia.setAttribute('playsinline', 'true')
    userMedia.style.width = window.innerWidth
    userMedia.style.height = window.innerHeight
    document.body.appendChild(userMedia)
  
    let media = navigator.mediaDevices.getUserMedia({
      video: true,
      video: {
          facingMode: "user"
      }, // インカメラ
      //video: { facingMode: "environment" }, //背面カメラ
      audio: false,
    });
    media.then((stream) => {
      userMedia.srcObject = stream
    });
  }
  
  function stopStream() {
    const userMedia = document.querySelector('#userMedia')
    const stream = userMedia.srcObject
    const tracks = stream.getTracks()
    tracks.forEach(function (track) {
      track.stop()
    })
    userMedia.remove()
  }