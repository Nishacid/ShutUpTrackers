<?php require('../inc/header.php');?>
<body>
<?php require('nav.php'); ?>
    <div class="description-content">
            <div class="description-produit">
                <i class="fas fa-shield-alt"></i>
                <div class="text">
                    <h3>Protection</h3>
                    <p>Protection against mass surveillance and spying. ShutUpTrackers is a socially motivated website that provides information for protecting your data security and privacy </p>
                </div>
                <span></span>
            </div>
        </div>

        <div class="main">
  <ul class="cards">
    <li class="cards_item">
    <div class="card">
        <div class="card_content">
        <div class="circle">
            <img src="../img/Software/vlc.png" alt="VLC" style="width:70%;">
        </div>
          <h2 class="card_title">VLC</h2>
          <p class="card_text">VLC is a free and open source cross-platform multimedia player and framework that plays most multimedia files, and various streaming protocols. Supports a wide range of formats for both local and remote playback.</p>
          <button class="btn card_btn" onclick="window.location.href = 'https://www.videolan.org/'">Read More</button>
        </div>
      </div>
    </li>
    <li class="cards_item">
    <div class="card">
        <div class="card_content">
        <div class="circle">
            <img src="../img/Software/kodi.png" alt="Kodi" style="width:80%;">
        </div>
          <h2 class="card_title">Kodi</h2>
          <p class="card_text">
          Kodi is a free media player that is designed to look great on your big screen TV but is just as home on a small screen. Kodi is available as a native application for Android, Linux, Mac OS X, iOS and Windows operating systems, running on most common processor architectures.</p>
          <button class="btn card_btn" onclick="window.location.href = 'https://kodi.tv/'">Read More</button>
        </div>
      </div>
    </li>
    </ul>
</div>
        <?php require('../inc/contact.php'); ?>
        <?php require('../inc/footer.php'); ?>

        <script src="../js/main.js"></script>
</body>

</html>