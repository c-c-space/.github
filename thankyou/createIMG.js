const canvasArea = document.querySelector("#canvas")
const createBtn = document.querySelector("#saveImg")

const areaImg = document.querySelector("#areaImg")
areaImg.style.position = "fixed"
areaImg.style.zIndex = "10"
areaImg.style.top = "0"
areaImg.style.left = "0"
areaImg.style.right = "0"
areaImg.style.display = "none"
areaImg.style.background = "#fff"
areaImg.style.height = "100%"

function createimg() {
  let yourImg = canvasArea.toDataURL();
  const createImg = document.querySelector("#createImg")
  createImg.src = yourImg
  createImg.style.width = "100%"
  createImg.style.height = "100%"
}

const close = () => {
  areaImg.style.display = "none"
  createBtn.value = "Create IMG"
};

const open = () => {
  areaImg.style.display = "block"
  createBtn.value = "Close"
  createimg()
};

let yourDrawing = false;

createBtn.addEventListener("click", event => {
  yourDrawing ? close() : open()
  yourDrawing = !yourDrawing
})
