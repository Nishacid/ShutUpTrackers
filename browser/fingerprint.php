<?php require('/shutuptrackers/inc/header.php');?>
<body>
<?php require('/shutuptrackers/inc/nav.php'); ?>
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
            <h1 style="font-size: 2.5em;" class="title_pres" >Browser Fingerprint</h1>
            <h3 class="title_desc" id="fingerprint">1 - What is Browser <strong>Fingerprinting</strong> ?</h3>
            <p class="desc_article">Browser <strong>fingerprinting</strong> is the systematic collection of information about a remote device, for identification purposes.<br>
                Client-side scripting languages allow the development of procedures to collect very rich <strong>fingerprints</strong> : <br>
                browser and operating system type and version, screen resolution, architecture type, graphic card, lists of fonts, plugins, microphone, camera ...</p>

            <h3 class="title_desc" id="use">2 - How <strong>fingerprint</strong> are used ?</h3>
            <p class="desc_article">
            There are three main ways to use <strong>fingerprints</strong> : <br>

            <i style="color: #2ea722;">- <strong>Fingerprints</strong> can be used in a constructive way to combat fraud or credential hijacking, by checking that a user who logs into a specific site is likely the legitimate user.</i><br>

            <i style="color: #FF7700;">- <strong>Fingerprints</strong> can also be used in more questionable way, in order to track users across web sites and collect information about their habits and their tastes without the users knowing about it.</i><br>

            <i style="color: #e10707;">- <strong>Fingerprints</strong> can even be used in a destructive way: if attackers know which software modules (specific browser version, plugins, etc.) are installed on a specific device, they can deliver exploits that are tailored for these specific modules or combination of modules.</i>
            </p>
            <h3 class="title_desc" id="collected">3 - How is the <strong>Fingerprint</strong> collected ?</h3>
            <p class="desc_article">
            <strong>Browser fingerprints</strong> are also called <a href="https://sites.cs.ucsb.edu/~vigna/publications/2013_SP_cookieless.pdf" target="_blank">cookieless monsters</a> because it is not necessary to install any form of cookie to collect a <strong>fingerprint</strong>. 
            This means that the act of <strong>fingerprinting</strong> a specific browser is stateless and transparent for the user. <br>Any third-party interested in <strong>fingerprinting</strong> can exploit a set of different techniques to get a rich <strong>fingerprint</strong> :
            </p>
            <ul>
                <li><a href="https://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> gives access to many browser-populated features like the plugins installed on the user’s device.</li>
                <li>Through the display of an HTML5 Canvas element, it is possible to collect small differences in the hardware or in the software configurations, thanks to slight differences in the image rendering between devices. The smallest pixel difference can be detected. This is called <a href="https://securehomes.esat.kuleuven.be/~gacar/persistent/#canvas-results" target="_blank">canvas fingerprinting</a>.</li>
                <li>If the <a href="https://www.adobe.com/fr/products/flashruntimes.html" target="_blank">Flash plugin</a> is installed, its rich programming interface (API) provides access to many system-specific attributes: exact version of the operating system, list of fonts,screen resolution, timezone.</li>
                <li>the <a href="http://useragentstring.com/" target="_blank">user agent</a> and the <a href="https://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html" target="_blank">accept headers</a> are automatically sent to websites when a connection is initiated.</li>
                <li><a href="http://www.pinlady.net/PluginDetect/" target="_blank">Plugin Detect</a> for plugins detection.</li>
            </ul>
            <h3 class="title_desc" id=="protect">4 - How to protect yourself ?</h3>
            <p class="desc_article">
            It is not possible to completely prevent the <strong>digital fingerprint</strong> of your Internet browser from being determined, the characteristics automatically transferred in the HTTP header during the passive fingerprint are always received by the web server operator. <br>
            However, you can try to keep the recognition value of your client as low as possible so that the <strong>fingerprint</strong> is not unique and therefore unusable for tracking.
            </p>
            <h4 id="protect_firefox">4.1 - Mozilla Firefox</h4>
            <p class="desc_article">Version 67 of Mozilla Firefox provides protection against digital fingerprints.
            By default, this protection is not activated and it is up to the user to activate it.
            You have to go to the privacy options and switch the content blocking to custom and check the "fingerprints" box.</p>
            <h4 id="protect_plugins">4.2 - Browser Plugins</h4>
            <br><ul>
                <li><a href="https://addons.mozilla.org/en-US/firefox/addon/canvasblocker/" target="_blank">CanvasBlocker</a> - Alters some JS APIs to prevent fingerprinting.</li>
                <li><a href="https://addons.mozilla.org/en-US/firefox/addon/noscript/" target="_blank">NoScript</a> - Blocks JavaScript and other objects, so the source code of the Tracker and FingerPrint Browser can be blocked.</li>
                <li><a href="https://addons.mozilla.org/en-US/firefox/addon/absolutedouble-trace/" target="_blank">Trace</a> - An advanced extension that can protect many different types of browser fingerprinting such as Canvas/Audio/WebGL Fingerprinting.</li>
                <li><a href="https://addons.mozilla.org/en-US/firefox/addon/chameleon-ext/" target="_blank">Chameleon</a> - Spoof your browser profile. Includes a few privacy enhancing options.</li>
            </ul>
            <p class="desc_article">Don't forget to check our <a href="addons.php">Add-ons</a> recommandations and our <a href="tweaks.php">Firefox Tweaks</a>.</p>
        <?php require('/shutuptrackers/inc/contact.php'); ?>
        <?php require('/shutuptrackers/inc/footer.php'); ?>

        <script src="/assets/js/main.js"></script>
</body>

</html>