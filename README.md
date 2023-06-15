# Index | creative-community.space
How to Coding | creative-community.space

* [index.json を 読み込み、メタデータコンテンツ と アンカー要素を生成](js/index.js)
* [Web Speech API を 使用して、#readme 要素の音声合成(Text to Speech) を実行](js/hello.js)
* [ローカルストレージに追加されている情報を取得し、ページ内容を生成](js/readyState.js)


## BODY

メニューを生成
```
<header id="menu" hidden>
  <button id="js-button"><b></b></button>
  <nav id="contents">
    <a href="/" target="_parent">
      <p><b>Index | creative-community.space</b></p>
      <u>ver.2.0</u>
    </a>
  </nav>
</header>
<script src="/js/menu.js"></script>
```

* [メニューの表示・非表示を切り替える](js/menu.js)

---

トップページに表示する挨拶文
```
<main id="hello">
  <section id="readme">
    <h1>
      <?php require('hello/all/greeting.php');?>
      <b><?php echo $greeting;?></b><br>
      IP <code><?php echo $_SERVER["REMOTE_ADDR"];?></code>
    </h1>
    <p>
      Thank you for visiting
      <u data-id="website">The Website</u>
      <b id="website" class="hide">
        that
        <u data-id="create">Creates</u>
        <b id="create" class="hide">beautiful things through</b>
        <u data-id="communicate">Communication</u>
        <b id="communicate" class="hide">that everyone can do</b>
        <br>
        <small>このウェブサイトは、誰にでもできることを自分らしく行うことの美しさを形にするコミュニティサイトです。</small>
      </b>
    </p>
    <script>
    $(function(){
      $("#readme u").on("click", function(){
        let show = $(this).data("id");
        $("#" + show).show(1000);
      })
    });
    </script>
  </section>
</main>
```

* [時間帯によって挨拶文を変更する](hello/all/greeting.php)
* [ローカルストレージに通信情報／ブラウザ等情報が追加されている場合に、現在の二十四節気を表示](welcome.php)

---

ローカルストレージに通信情報／ブラウザ等情報を追加する
```
<main id="yourinfo" hidden>
  <form method="post">
    <button id="openModal" type="button">あなたの通信情報／ブラウザ等情報</button>
    <p><?php require('yourinfo.php'); ?></p>
    <section>
      <button type="button" id="enter-btn" onclick="setLOG()">Enter</button>
      <button type="button" id="back-btn">Back</button>
    </section>
  </form>
  <script src="js/log.js"></script>
</main>

<dialog id="modal">
  <button id="closeButton">Close 閉じる</button>
  <section id="about"></section>
</dialog>
```

* [通信情報／ブラウザ等情報を取得する](yourinfo.php)
* [通信情報／ブラウザ等情報をローカルストレージに追加する](js/log.js)
* [通信情報／ブラウザ等情報をアクセス履歴に記録する](log.php)


***

ダイアログ要素の操作
```
<script type="text/javascript">
const dialogModal = document.querySelector('#modal');
const openModal = document.querySelector('#openModal');

openModal.addEventListener('click', function onModal() {
  if (typeof dialogModal.showModal === "function") {
    dialogModal.showModal();
  } else {
    alert("The <dialog> API is not supported by this browser");
  }
});

const closeButton = document.querySelector('#closeButton');
closeButton.addEventListener('click', () => {
  dialogModal.close();
});

fetchHTML('profile/yourinfo.html','#about')
</script>
```
