<header id="menu" hidden>
    <button><b></b></button>
    <menu id="contents">
        <a href="#" onclick="window.history.back(); return false;">
            <p>creative-community.space</p>
            <u>↩︎</u>
        </a>
        <a href="/ver/" target="_parent">
            <i>更新履歴</i>
            <b>New Contents & Version Up</b>
        </a>
        <a href="/profile/" target="_parent">
            <i>The Information About Network & Browser</i>
            <b>通信情報／ブラウザ等情報</b>
        </a>
    </menu>
</header>

<ul id="log">
    <?php
    while ($line = fgetcsv($fp)) {
        echo "<li class='log'>";
        for ($i = 0; $i < count($line); $i++) {
            echo "<span>" . $line[$i] . "</span>";
        }
        echo "</li>";
    }
    fclose($fp);
    ?>

    <li>
        <span>
            <?php
            echo "<b>" . $year . "</b> 年 <b>" . $month . "</b> 月";
            ?>
        </span>
        <span>アクセス履歴</span>
        <span>
            <b><?php echo sizeof(file($source_file)); ?></b>
            people entered
            <?php
            echo $_SERVER['HTTPS'] . " ";
            echo $_SERVER['SERVER_NAME'] . "<br/>";
            echo $_SERVER['SERVER_PROTOCOL'] . " ";

            $hostname = $_SERVER['SERVER_NAME'];
            $hostip = gethostbyname($hostname);
            echo $hostip . " ";

            echo $_SERVER['SERVER_PORT'] . " ";
            echo $_SERVER['SERVER_SOFTWARE'];
            ?>
        </span>
    </li>
</ul>