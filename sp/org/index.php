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
  button,
  #log ul li {
    font-family: "ipag", monospace;
    font-weight: 500;
    line-height: 150%;
    transform: scale(1, 1.25);
  }

  #submit legend b,
  #submit legend small,
  #weight label,
  #size label {
    font-family: "ipag", monospace;
  }

  main {
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

  #happy:checked~li:not(.happy),
  #hearts:checked~li:not(.hearts),
  #tongue:checked~li:not(.tongue),
  #thinking:checked~li:not(.thinking),
  #neutral:checked~li:not(.neutral),
  #relieved:checked~li:not(.relieved),
  #dizzy:checked~li:not(.dizzy),
  #frowning:checked~li:not(.frowning),
  #crying:checked~li:not(.crying),
  #steam:checked~a:not(.steam) {
    display: none;
  }
  </style>
</head>
<body>
  <button type="button" id="mainBtn" onclick="onModal()">ORG</button>
  <button type="button" class="backBtn" onclick="window.history.back(); return false;">↩︎</button>

  <main id="log">
    <?php require('log.php'); ?>
  </main>

  <dialog id="modal">
    <h1>言葉の強さと方向と感情</h1>
    <p>
      いま考えていること、覚えておきたいこと、適当なタイピング、どんな内容でも構いません。<br/>
      下記の入力フォームへ自由に文字を入力してみましょう。
    </p>
    <form id="submit"></form>
    <button class="color bgcolor" id="closeButton">Close</button>
  </dialog>

  <main id="readme" hidden></main>
  <script type="text/javascript">
  async function submit() {
    fetch('submit.html')
    .then(response => response.text())
    .then(submit => {
      document.querySelector('#submit').innerHTML = submit
    });
  }
  submit();

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
