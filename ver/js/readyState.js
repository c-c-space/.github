document.addEventListener('readystatechange', event => {

  if (event.target.readyState === 'loading') {
    // 文書の読み込み中に実行する
  }

  else if (event.target.readyState === 'interactive') {
    const yourInfo = JSON.parse(localStorage.getItem('yourInfo'));
    if(!localStorage.getItem('yourInfo')) {
      location.replace('/')
    } else {

    }
  }

  else if (event.target.readyState === 'complete') {
    // window.addEventListener('load', event => { load イベントと同じ状態 })
  }

});
