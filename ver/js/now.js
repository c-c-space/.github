'use strict'
// #showDate に 現在の日付・#showTime に 現在の時刻を表示

document.addEventListener('DOMContentLoaded', function () {
  setInterval('nowOn()', 1000)
}, false)

function set10(num) {
  let ret;
  if (num < 10) { ret = "0" + num; }
  else { ret = num; }
  return ret;
}

function nowOn() {
  const nowTime = new Date()

  const month = nowTime.getMonth()
  let months = ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"];
  const thismonth = months[month];

  const week = nowTime.getDay()
  let weeks = ["SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT"];
  const thisweek = weeks[week];

  const thisyear = nowTime.getFullYear()
  const today = set10(nowTime.getDate())
  const showDate = thisweek + " " + thismonth + " " + today + " " + thisyear;
  document.querySelector("#showDate").textContent = showDate;

  const nowHour = set10(nowTime.getHours())
  const nowMin = set10(nowTime.getMinutes())
  const nowSec = set10(nowTime.getSeconds())
  const showTime = nowHour + ":" + nowMin + ":" + nowSec;
  document.querySelector("#showTime").textContent = showTime;
}
