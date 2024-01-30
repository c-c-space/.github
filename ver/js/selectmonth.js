'use strict'

// 今年の1月から今月までのセレクターオプションを生成
document.addEventListener("readystatechange", () => {
  const date = new Date()
  const year = date.getFullYear()
  const month = date.getMonth()

  let n = 1
  let selectMonth = '<option disabled selected hidden>Select Month</option>'

  for (let m = 0; m < month; m++) {
    if (m < 9) {
      selectMonth += '<option value="0' + n + '">' + year + '年' + n + '月' + '</option>'
      n++
    }
    else {
      selectMonth += '<option value="' + n + '">' + year + '年' + n + '月' + '</option>'
      n++
    }
  }

  document.querySelector('#month').innerHTML = selectMonth
});
