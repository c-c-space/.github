'use strict'

function update(online) {
  document.querySelector('#status').textContent =
  online ? 'Online' : 'Offline';
}

const connectionInfo = navigator.connection;
if (connectionInfo !== undefined) {
  const init = function() {
    document.getElementById('network').innerHTML =
    'Network Type <b>' + connectionInfo.effectiveType + '</b> <b>' + connectionInfo.type + '</b> | '
    + 'Downlink <b>' + connectionInfo.downlink + '</b> Mb/s | '
    + 'RTT <b>'+ connectionInfo.rtt + '</b> ms'
  };
  init();

  if ('onchange' in connectionInfo) {
    connectionInfo.addEventListener('change', init);
  } else if ('ontypechange' in connectionInfo) {
    connectionInfo.addEventListener('typechange', init);
  }
}

const memory = navigator.deviceMemory;
const hardware = navigator.hardwareConcurrency;
document.querySelector('#navigator').innerHTML = `This Device has at least <b>${memory}</b> GiB of RAM | <b>${hardware}</b> CPU available.`;
