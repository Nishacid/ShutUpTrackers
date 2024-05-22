<?php require __DIR__ . "/../inc/header.php"; ?>
<body>
<?php require __DIR__ . "/../inc/nav.php"; ?>
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
  <ul class="cards" style="margin-bottom: 180px;">
    <li class="cards_item">
    <div class="card">
        <div class="card_content">
        <div class="circle">
            <img src="/assets/img/OS/qubesos.png" alt="QubesOS" style="width: 110px;">
        </div>
          <h2 class="card_title">QUBES OS</h2>
          <p class="card_text">Qubes is an open-source operating system designed to provide strong security for desktop computing.</p>
         <button class="btn card_btn" onclick="window.location.href = 'https://www.qubes-os.org/'">Read More</button>
        </div>
      </div>
    </li>
    <li class="cards_item">
    <div class="card">
        <div class="card_content">
        <div class="circle">
            <img src="/assets/img/OS/fedora.png" alt="Fedora">
        </div>
          <h2 class="card_title">FEDORA</h2>
          <p class="card_text">Fedora is a Linux distribution developed by the Fedora Project and sponsored by Red Hat. Fedora Workstation is a secure, reliable, and user-friendly.</p>
          <button class="btn card_btn" onclick="window.location.href = 'https://getfedora.org/'">Read More</button>
        </div>
      </div>
    </li>
    </ul>
</div>
  <?php require __DIR__ . "/../inc/contact.php"; ?>
  <?php require __DIR__ . "/../inc/footer.php"; ?>
        <script src="/assets/js/main.js"></script>
</body>

</html>
