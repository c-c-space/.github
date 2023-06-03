const helloLiAll = document.querySelectorAll('#log ul li button')
for (const helloLi of helloLiAll) {
  helloLi.addEventListener('click', function () {
    const sekki = document.querySelector('#log h1 b')
    sekki.innerText = this.innerText

    const dates = document.querySelector('#lastModified')
    dates.innerText = this.dataset.date

    const about = document.querySelector('#log h2')
    about.innerText = this.dataset.hello
  }, false)
}
