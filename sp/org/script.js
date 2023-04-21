// arr1
let arr1 = {
  'must' : '100 ~ 90',
  'should' : '90 ~ 70',
  'can' : '70 ~ 50',
  'may' : '50 ~ 30',
  'could' : '30 ~ 10',
  'cant' : '10 ~ 0',
}

const arrBtn1 = document.querySelector('#weight')
Object.entries(arr1).forEach(eachArr1 => {
  const arrInput1 = document.createElement ('input')
  arrInput1.setAttribute('type', 'radio')
  arrInput1.setAttribute('name', 'weight')
  arrInput1.setAttribute('id', eachArr1[0])
  arrInput1.value = eachArr1[0]
  arrBtn1.appendChild(arrInput1)

  const arrLabel1 = document.createElement ('label')
  arrLabel1.setAttribute('for', eachArr1[0])
  arrLabel1.innerText = eachArr1[1]
  arrBtn1.appendChild(arrLabel1)
})

// arr2
let arr2 = {
  'positive' : '+',
  'negative' : '-',
  'both' : '±',
  'neither' : '=',
  'unknown' : '?',
}

const arrBtn2 = document.querySelector('#size')
Object.entries(arr2).forEach(eachArr2 => {
  const arrInput2 = document.createElement ('input')
  arrInput2.setAttribute('type', 'radio')
  arrInput2.setAttribute('name', 'size')
  arrInput2.setAttribute('id', eachArr2[0])
  arrInput2.value = eachArr2[0]
  arrBtn2.appendChild(arrInput2)

  const arrLabel2 = document.createElement ('label')
  arrLabel2.setAttribute('for', eachArr2[0])
  arrLabel2.innerText = eachArr2[1]
  arrBtn2.appendChild(arrLabel2)
})

// arr3
let arr3 = {
  'happy' : '🙂',
  'hearts' : '🥰',
  'tongue' : '😜',
  'thinking' : '🤔',
  'neutral' : '😐',
  'relieved' : '😌',
  'dizzy' : '😵',
  'frowning' : '😮',
  'crying' : '😢',
  'steam' : '😤',
}

const arrBtn3 = document.querySelector('#feel')
Object.entries(arr3).forEach(eachArr3 => {
  const arrInput3 = document.createElement ('input')
  arrInput3.setAttribute('type', 'radio')
  arrInput3.setAttribute('name', 'feel')
  arrInput3.setAttribute('id', eachArr3[0])
  arrInput3.value = eachArr3[0]
  arrBtn3.appendChild(arrInput3)

  const arrLabel3 = document.createElement ('label')
  arrLabel3.setAttribute('for', eachArr3[0])
  arrLabel3.innerText = eachArr3[1]
  arrBtn3.appendChild(arrLabel3)
})

// .list li の表示・非表示
function multi_filter(org = "") {
  let radioAll = document.querySelectorAll(org)

  for (let i of radioAll) {
    i.addEventListener('change', () => {
      let name = i.getAttribute("name");
      let thisAll = document.querySelectorAll(`.list li[data-${name}='${i.value}']`)
      for (let ii of thisAll) {
        if (!ii.classList.contains("hidden")) {
          ii.classList.add("hidden");
        }
      }
    })
  }
}

multi_filter("#weight input[type='radio']");
multi_filter("#size input[type='radio']");
multi_filter("#feel input[type='radio']");
