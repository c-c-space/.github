<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="author" content="creative-community.space">
    <meta name="reply-to" content="pehu@creative-community.space">
    <link rel="icon" href="/ver/icon/favicon.png">
    <link rel="icon" href="/ver/icon/android.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="/ver/icon/apple.png" sizes="180x180">

    <meta property="og:type" content="website">
    <title>Hello | creative-community.space</title>
    <meta property="og:title" content="Hello | creative-community.space">
    <meta name="description" content="This is a Online Textboard that works with Web Speech API">
    <meta property="og:description" content="This is a Online Textboard that works with Web Speech API">

    <?php
    require('all/24sekki.php');
    mb_language("ja");
    mb_internal_encoding("UTF-8");

    $site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
    $url = "{$site}" . "{$_SERVER['REQUEST_URI']}";
    ?>

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="creative-community.space">

    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:image" content="<?php echo $url . $season . " /summary.png"; ?>">
    <meta name="twitter:image" content="<?php echo $url . $season . " /summary.png"; ?>">

    <script src="all/index.js?v=2.0"></script>
    <script src="all/colorSize.js?v=1"></script>
    <script src="index.js?v=2.22"></script>
    <script src="../ver/js/menu.js?v=1"></script>
    <script src="../ver/js/modal.js?v=1"></script>
    <script src="../ver/js/login.js?v=1"></script>
    <script src="../ver/js/speechAPI.js?v=1"></script>

    <link rel="stylesheet" href="index.css?v=1" />
    <link rel="stylesheet" href="../ver/css/menu.css?v=1" />
    <link rel="stylesheet" href="../ver/css/controls.css?v=1" />
    <link rel="stylesheet" href="../ver/css/modal.css?v=1" />
</head>

<body>
    <header id="menu" class="bgcolor color" hidden>
        <button><b></b></button>
        <menu id="contents"><a href="#" onclick="window.history.back(); return false;">
                <p>creative-community.space</p>
                <u>↩︎</u>
            </a>
            <a id="thisSiki">
                <i></i>
                <b></b>
            </a>
            <a id="thisSekki">
                <i></i>
                <b></b>
            </a>
        </menu>
    </header>
    <main id="log">
        <button type="button" onclick="changeHidden()" id="login-btn">
            Submit a Text of <strong></strong>
            at <i></i>
        </button>
        <h1>
            <b>Hello</b><br />
            <code id="lastModified"></code>
        </h1>
        <h2>
            Now is The Season named<br />
            <a></a> (<b></b>) in <i></i>
        </h2>
        <article id="submit"></article>
    </main>

    <main id="hello" hidden>
        <details>
            <summary>Speech to Text to Text to Speech</summary>
            <p id="howto"></p>
        </details>
        <form>
            <section>
                <nav id="voice">
                    <p>
                        <label for="voice-select">
                            Select a Language & Voice<br>
                            言語・声の種類を選択
                        </label>
                    </p>
                </nav>
                <p>
                    <label for="speech-btn">音声認識（音声をテキストに変換）</label><br />
                    <button type="button" id="speech-btn">Speech to Text</button>
                </p>
                <div id="readme" contenteditable="true"></div>
                <hr />
                <p>
                    <label for="speak-btn">音声合成（テキストを音声に変換）</label><br />
                    <button type="button" id="speak-btn">Text to Speech</button>
                </p>
                <hr />
                <p>
                    <label>音声合成のピッチ(音域)とレート(速度)を選択</label>
                </p>
                <div class="range">
                    <label for="pitch">Pitch</label>
                    <code class="pitch-value"></code>
                    <input id="pitch" class="color bgcolor" name="pitch" type="range" min="0" max="2" value="1" step="0.1" />
                </div>
                <div class="range">
                    <label for="rate">Rate</label>
                    <code class="rate-value"></code>
                    <input id="rate" class="color bgcolor" name="rate" type="range" min="0.1" max="2" value="1" step="0.1" />
                </div>
            </section>
            <hr>
            <nav id="next">
                <button type="submit" id="submit-btn">Submit</button>
                <button type="button" id="back-btn" onclick="changeHidden()">Back</button>
            </nav>
        </form>
    </main>

    <dialog id="modal">
        <button type="button" id="closeModal">×</button>
        <section id="about">
            <small>
                <?php echo $date; ?>
            </small>
            <h3>
                <strong>
                    <?php echo $sekkiName; ?>
                </strong> (
                <?php echo $sekki; ?>)<br />
                <?php echo $description; ?>
            </h3>
            <p>
                <?php echo $hello; ?>
            </p>
        </section>
        <hr>
        <section id="color-size"></section>
    </dialog>

    <footer id="now">
        <nav class="controls">
            <input id="cancel-btn" value="⏹" type="button" onclick="speechCancel()" />
            <input id="pause-btn" value="⏸" type="button" onclick="speechPause()" />
            <input id="resume-btn" value="⏯" type="button" onclick="speechResume()" />
        </nav>
        <button onclick="openModal()" type="button">?</button>
    </footer>
</body>

</html>