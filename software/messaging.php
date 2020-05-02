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
            <img src="../img/Software/Bitmessage.png" alt="Bitmessage">
        </div>
          <h2 class="card_title">BITMESSAGE</h2>
          <p class="card_text">Bitmessage is a P2P communications protocol used to send encrypted messages to another person or to many subscribers. It is decentralized and trustless, meaning that you need-not inherently trust any entities like root certificate authorities.</p>
          <button class="btn card_btn" onclick="window.location.href = 'https://bitmessage.org/'">Read More</button>
        </div>
      </div>
    </li>
    <li class="cards_item">
    <div class="card">
        <div class="card_content">
        <div class="circle">
            <img src="../img/Software/retroshare.png" alt="RetroShare" style="width:50px;">
        </div>
          <h2 class="card_title">RETROSHARE</h2>
          <p class="card_text">Retroshare is a private peer-to-peer free software that creates an acentric computer network. It allows: peer-to-peer file sharing, serverless email, instant messaging, chat rooms, forums.</p>
          <button class="btn card_btn" onclick="window.location.href = 'https://retroshare.cc/'">Read More</button>
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