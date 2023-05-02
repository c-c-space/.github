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
      document.querySelector('#chargingTime').innerText = '-';
    } else {
      document.querySelector('#chargingTime').innerText = `${battery.chargingTime} 秒`;
    }
  }

  battery.addEventListener("dischargingtimechange", () => {
    updateDischargingInfo();
  });

  function updateDischargingInfo() {
    if (battery.dischargingTime === Infinity) {
      document.querySelector('#dischargingTime').innerText = '-';
    } else {
      document.querySelector('#dischargingTime').innerText = `${battery.dischargingTime} 秒`;
    }
  }
});
