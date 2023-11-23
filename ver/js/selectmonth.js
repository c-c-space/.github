'use strict'

// 今年の1月から今月までのセレクターオプションを生成

document.addEventListener("readystatechange", () => {
  const date = new Date()
  const year = date.getFullYear()
  const month = date.getMonth()

  let Count = 1
  let selectMonth = '<option disabled selected hidden>Select Month</option>'

  for (let m = 0; m < month; m++) {
    if (m < 9) {
      selectMonth += '<option value="0' + Count + '">' + year + '年' + Count + '月' + '</option>'
      Count++
    }
    else {
      selectMonth += '<option value="' + Count + '">' + year + '年' + Count + '月' + '</option>'
      Count++
    }
  }

  document.querySelector('#month').innerHTML = selectMonth
});
