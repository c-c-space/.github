<strong>あなたの通信情報／ブラウザ等情報</strong>
<p>
  <?php
  $ip = $_SERVER["REMOTE_ADDR"];
  $hqdn = $_SERVER["REMOTE_PORT"];
  $os = $_SERVER["HTTP_USER_AGENT"];
  
  echo "<span>IP <code id='ip'>" . $ip . "</code></span>";
  echo "<span>PORT <code id='hqdn'>" . $hqdn . "</code></span>";
  echo "<span><small>USER AGENT <code id='os'>" . $os . "</code></small></span>";
  ?>
</p>
<section>
  <button type="button" id="enter-btn" onclick="setLOG()">Enter</button>
  <button type="button" id="back-btn" onclick="changeHidden()">Back</button>
</section>
