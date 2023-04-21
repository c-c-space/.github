<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../org/style.css">
  <link rel="stylesheet" href="../org/submit.css">
  <style type="text/css">
  #modal h1,
  #modal p,
  button {
    font-family: "ipag", monospace;
    line-height: 150%;
    transform: scale(1, 1.25);
  }

  #submit legend b,
  #submit legend small,
  #weight label,
  #size label,
  #log ul li {
    font-family: "ipag", monospace;
  }

  #modal h1,
  #modal p,
  button {
    font-weight: 500;
  }

  main {
    overflow: auto;
  }

  #happy:checked ~ li:not(.happy) {
    display: none;
  }

  #happy:checked~li:not(.happy),
  #hearts:checked~li:not(.hearts),
  #tongue:checked~li:not(.tongue),
  #thinking:checked~li:not(.thinking),
  #neutral:checked~li:not(.neutral),
  #relieved:checked~li:not(.relieved),
  #dizzy:checked~li:not(.dizzy),
  #frowning:checked~li:not(.frowning),
  #crying:checked~li:not(.crying),
  #steam:checked~li:not(.steam) {
    display: none;
  }

  #modal {
    box-sizing: border-box;
    margin: 0 auto;
    max-width: 95%;
    max-height: 95%;
    overflow: auto;
  }

  #modal h1 {
    margin: 0 0 1rem;
  }

  #log ul li {
    margin: 1rem;
  }

  @media screen and (max-width: 550px) {
    #log ul li {
      margin: 2.5vw;
    }
  }
  </style>
</head>
<body>
  <button type="button" id="mainBtn" onclick="onModal()">ORG</button>
  <button type="button" class="backBtn" onclick="window.history.back(); return false;">↩︎</button>

  <dialog id="modal">
    <h1>言葉の強さと方向と感情</h1>
    <p>
      2021年10月10日(日) - 30日(土)<br/>
      展覧会「新しい生活を集める」へ ご来場した皆様の感想
    </p>
    <br/>
    <form id="submit">
      <fieldset id="weight">
        <legend>
          <i>%</i>
          <b>強さ</b>
          <small>文字の太さは言葉の強さを表します</small>
        </legend>
      </fieldset>

      <fieldset id="size">
        <legend>
          <i>to</i>
          <b>方向</b>
          <small>文字の大きさは感情の方向を表します</small>
        </legend>
      </fieldset>

      <fieldset id="feel" class="search-box">
        <legend>
          <i>emoji</i>
          <b>感情</b>
          <small>感想を絵文字によって絞り込むことができます</small>
        </legend>

        <input type="radio" name="feel" value="happy" id="happy" required>
        <label for="happy">🙂</label>

        <input type="radio" name="feel" value="hearts" id="hearts" required>
        <label for="hearts">🥰</label>

        <input type="radio" name="feel" value="tongue" id="tongue" required>
        <label for="tongue">😜</label>

        <input type="radio" name="feel" value="thinking" id="thinking" required>
        <label for="thinking">🤔</label>

        <input type="radio" name="feel" value="neutral" id="neutral" required>
        <label for="neutral">😐</label>

        <input type="radio" name="feel" value="relieved" id="relieved" required>
        <label for="relieved">😌</label>

        <input type="radio" name="feel" value="dizzy" id="dizzy" required>
        <label for="dizzy">😵</label>

        <input type="radio" name="feel" value="frowning" id="frowning" required>
        <label for="frowning">😮</label>

        <input type="radio" name="feel" value="crying" id="crying" required>
        <label for="crying">😢</label>

        <input type="radio" name="feel" value="steam" id="steam" required>
        <label for="steam">😤</label>
      </fieldset>
    </form>
    <button class="color bgcolor" id="closeButton">Close</button>
  </dialog>

  <main id="log">
    <?php require('log.php'); ?>
  </main>

  <script type="text/javascript">
  const dialogModal = document.querySelector('#modal');
  function onModal() {
    if (typeof dialogModal.showModal === "function") {
      dialogModal.showModal();
    } else {
      alert("The <dialog> API is not supported by this browser");
    }
  }

  const closeButton = document.querySelector('#closeButton');
  closeButton.addEventListener('click', () => {
    dialogModal.close();
  });
  </script>
</body>
</html>
