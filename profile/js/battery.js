'use strict'

document.addEventListener('DOMContentLoaded', function () {
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    const battery = document.querySelector('#battery')
    battery.style.display = "none"
  }

  navigator.getBattery().then((battery) => {
    function updateAllBatteryInfo() {
      updateChargeInfo();
      updateLevelInfo();
      updateChargingInfo();
      updateDischargingInfo();
    }

    updateAllBatteryInfo();

    battery.addEventListener("chargingchange", () => {
      updateChargeInfo();
    });

    function updateChargeInfo() {
      document.querySelector('#charging').innerText = `${battery.charging ? "充電中" : "放電中"}`;
    }

    battery.addEventListener("levelchange", () => {
      updateLevelInfo();
    });

    function updateLevelInfo() {
      document.querySelector('#level').innerText = `${battery.level * 100} %`;
      document.querySelector('#progress').value = `${battery.level * 100}`;
    }

    battery.addEventListener("chargingtimechange", () => {
      updateChargingInfo();
    });

    function updateChargingInfo() {
      if (battery.chargingTime === Infinity) {
        document.querySelector('#chargingTime').innerHTML = '-';
      } else {
        document.querySelector('#chargingTime').innerHTML = `<b>${battery.chargingTime}</b> Sec`;
      }
    }

    battery.addEventListener("dischargingtimechange", () => {
      updateDischargingInfo();
    });

    function updateDischargingInfo() {
      if (battery.dischargingTime === Infinity) {
        document.querySelector('#dischargingTime').innerHTML = '-';
      } else {
        document.querySelector('#dischargingTime').innerHTML = `<b>${battery.dischargingTime}</b> Sec`;
      }
    }
  });
});
