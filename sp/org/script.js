let weight = {
  'must' : '100 ~ 90',
  'should' : '90 ~ 70',
  'can' : '70 ~ 50',
  'may' : '50 ~ 30',
  'could' : '30 ~ 10',
  'cant' : '10 ~ 0',
}

let size = {
  'positive' : '+',
  'negative' : '-',
  'both' : '±',
  'neither' : '=',
  'unknown' : '?',
}

let feel = {
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

radio(weight, "weight");
radio(size, "size");
radio(feel, "feel");

org("weight");
org("size");
org("feel");

// ラジオボタンの生成
function radio(arr, name = "") {
  let orgEach = arr + "Each"
  let orgRadio = arr + "Radio"
  let orgLabel = arr + "Label"

  let orgInput = document.querySelector(`#${name}`)
  Object.entries(arr).forEach(orgEach => {
    const orgRadio = document.createElement('input')
    orgRadio.setAttribute('type', 'radio')
    orgRadio.setAttribute('name', `${name}`)
    orgRadio.setAttribute('id', orgEach[0])
    orgRadio.value = orgEach[0]
    orgInput.appendChild(orgRadio)

    const orgLabel = document.createElement('label')
    orgLabel.setAttribute('for', orgEach[0])
    orgLabel.innerText = orgEach[1]
    orgInput.appendChild(orgLabel)
  })
}

// アイテムの表示・非表示
function org(org = "") {
  let radioAll = document.querySelectorAll(`#${org} input[type='radio']`)
  let orgAll = document.querySelectorAll('.list li')

  for (let i of radioAll) {
    i.addEventListener('change', () => {
      for (let ii of orgAll) {
        //*** delete hidden class ***
        ii.classList.remove("hidden");
        //*** check target every select ***
        for (let iii of radioAll) {
          //*** get radio name & value / target data attribute ***
          let value = iii.value;
          let name = iii.getAttribute('name');
          let item_data = document.querySelectorAll(`.list li[data-${name}='${value}']`)

          //*** set hidden class ***
          if (item_data && !ii.classList.contains("hidden")) {
            ii.classList.add("hidden");
          }
        }
      }
    })
  }
}
