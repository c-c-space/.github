'use strict'

const dateAll = document.querySelectorAll('#log ul li button')
for (const dateLi of dateAll) {
  dateLi.addEventListener('click', function () {
    const sekkiName = document.querySelector('#log h1 b')
    sekkiName.innerText = this.innerText

    const sekkiDates = document.querySelector('#lastModified')
    sekkiDates.innerText = this.dataset.date

    const sekkiAbout = document.querySelector('#log h2')
    sekkiAbout.innerText = this.dataset.hello
  }, false)
}
