'use strict'

function environmentStream() {
  const userMedia = document.createElement('video')
  userMedia.id = "userMedia"
  userMedia.setAttribute('autoplay', 'true')
  userMedia.setAttribute('playsinline', 'true')
  userMedia.style.position = "fixed"
  userMedia.style.padding = "0"
  userMedia.style.margin = "0"
  userMedia.style.top = "50%"
  userMedia.style.left = "50%"
  userMedia.style.transform = "translate(-50%, -50%)"
  userMedia.style.width = window.innerWidth
  userMedia.style.height = window.innerHeight
  userMedia.style.minWidth = "100%"
  userMedia.style.minHeighteight = "100%"
  document.body.appendChild(userMedia)

  let media = navigator.mediaDevices.getUserMedia({
    video: true,
    video: {
      facingMode: "environment"
    }, // 背面カメラ
    audio: false,
  });
  media.then((stream) => {
    userMedia.srcObject = stream
  });
}

function userStream() {
  const userMedia = document.createElement('video')
  userMedia.id = "userMedia"
  userMedia.setAttribute('autoplay', 'true')
  userMedia.setAttribute('playsinline', 'true')
  userMedia.style.position = "fixed"
  userMedia.style.padding = "0"
  userMedia.style.margin = "0"
  userMedia.style.top = "50%"
  userMedia.style.left = "50%"
  userMedia.style.transform = "translate(-50%, -50%)"
  userMedia.style.width = window.innerWidth
  userMedia.style.height = window.innerHeight
  userMedia.style.minWidth = "100%"
  userMedia.style.minHeighteight = "100%"
  document.body.appendChild(userMedia)

  let media = navigator.mediaDevices.getUserMedia({
    video: true,
    video: {
      facingMode: "user"
    }, // インカメラ
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