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
        <h1 style="font-size: 2.5em;" class="title_pres">Firefox Privacy Settings</h1>
        <h3 class="title_desc">1 - Enhanced Tracking Protection</h3>
        <p class="desc_article">We will see the largest set of options, the Privacy and Security tab of Firefox. First, enhanced tracking protection. 
            This set of filters is set by default to Standard, but we will change it to Strict.<br>
            Also, in some rare cases, strict protections can cause websites to malfunction. 
            If you think that strict browsing protection is damaging a website you visit frequently, you can disable it site by site using the shield icon in the address bar.<br>
            Disabling Enhanced Tracking Protection will of course decrease your privacy on that site.
        </p>
            <a href="../img/Browser/settings.png"><img src="../img/Browser/settings.png" alt="settings" class="img_tweaks"></a><br>
            <small class="subtitle">Options/Preferences > Privacy & Security > Enhanced Tracking Protection</small>

        <h3 class="title_desc">2 - Change Your Search Engine</h3>
        <p class="desc_article">
        In the Search tab, change your default search engine to something other than Google, Bing, Yahoo ...<br>
        We offer various alternatives to these <a href="../provider/search.php">search engines here</a>
        </p>
        <h3 class="title_desc">3 - Disabling Telemetrics</h3>
        <p class="desc_article">
        When you use Firefox, the browser retrieves information about what you are doing, the type of extensions you have installed and many other things from your browser. 
        Although they claim to do so from a privacy perspective, it is always best to send as little data as possible from a privacy perspective, so we will uncheck all boxes under "Firefox data collection and use" for security reasons.
        </p>
        <a href="../img/Browser/data.png"><img src="../img/Browser/data.png" alt="data" class="img_tweaks"></a><br>
        <small class="subtitle">Options/Preferences > Privacy & Security > Firefox Data Collection and Use</small>
        <h3 class="title_desc">4 - Clearing Cookies and Site Data</h3>
        <p class="desc_article">This one is for more advanced users, so if you don't understand what it does, you can skip this section. 
            Firefox offers the ability to delete all your cookies and site data every time Firefox is closed. 
            Cookies and site data are small pieces of information that sites store in your browser, and they have a multitude of uses. 
            They are used for things like keeping you logged in and recording your website preferences, but they can also be used to track you on different websites. 
            By regularly deleting your cookies, your browser will appear website specific, making it harder to track you.</p>
        <a href="../img/Browser/cookies.png"><img src="../img/Browser/cookies.png" alt="cookies" class="img_tweaks"></a><br>
        <small class="subtitle">Options/Preferences > Privacy & Security > Cookies and Site Data</small>
        <h3 class="title_desc">5 - DNS over HTTPS</h3>
        <p class="desc_article">
        The DNS (or Domain Name System) is what your browser uses to turn domain names like <code>shutuptrackers.com</code> into IP addresses like <code>185.193.126.127</code>. 
        Since computers can only communicate with IP addresses, it is necessary to use DNS each time you visit a domain. 
        But the DNS is unencrypted by default, which means that everyone in your network (including your ISP) can see the domains you are looking for, and in some situations they can even modify IP responses to redirect you to their own websites! 
        Encrypting your DNS traffic can protect your queries and add extra protection to your browsing. 
        <br><br>
        Encrypted DNS takes many forms: DNS over HTTPS (DoH), DNS over TLS, DNSCrypt, etc., but they all accomplish the same thing. 
        They keep your DNS queries private from your ISP, and they make sure they aren't tampered with in transit between your DNS provider. 
        Fortunately, Firefox recently added native DoH support to the browser. On the General page of your preferences, scroll down to and open Network Settings. 
        At the bottom of the window you will be able to select "Enable DNS over HTTPS" and choose a provider:
        </p>
        <a href="../img/Browser/dns.png"><img src="../img/Browser/dns.png" alt="dns" class="img_tweaks"></a><br>
        <small class="subtitle">Options/Preferences > Privacy & Security > Network Settings > Enable DNS over HTTPS</small>
        <p class="desc_article">
        It should also be noted that even with DoH, your ISP will still be able to see what domain you're connecting to because of a technology called Server Name Indication (SNI). 
        Until SNI is encrypted as well, there's no getting around it. 
        Encrypted SNI (eSNI) is in the works — and can actually be enabled on Firefox today — but it only works with a small number of servers, mainly ones operated by Cloudflare, so its use is limited currently. 
        Therefore, while DoH provides some additional privacy and integrity protections, its use as a privacy tool is limited until other supplemental tools like eSNI and DNSSEC are finalized and implemented.
        </p>
        <h3 class="title_desc">6 - Multi-Account Containers</h3>
        <p class="desc_article">
        Mozilla has an in-house add-on called <a href="https://support.mozilla.org/en-US/kb/containers">Multi-Account Containers</a> that allows you to isolate websites from each other. 
        For example, you could have Facebook in a container separate from your other browsing. 
        In this situation, Facebook would only be able to set cookies with your profile on sites within the container, keeping your other browsing protected.
        </p>
        <a href="../img/Browser/container.png"><img src="../img/Browser/container.png" alt="dns" class="img_tweaks"></a><br>
        <h3 class="title_desc">7 - Privacy Related "about:config" Tweaks</h3>
        <p class="desc_article">
            First you need to go to <code>about:config</code> and press "Accept the Risk and Continue".<br><br>

            <strong>privacy.trackingprotection.fingerprinting.enabled = true</strong><br>
            Blocks Fingerprinting<br><br>

            <strong>privacy.firstparty.isolate = true</strong><br>
            This preference isolates all browser identifier sources (e.g. cookies) to the first party domain, with the goal of preventing tracking across different domains. (Don't do this if you are using the Firefox Addon "Cookie AutoDelete" with Firefox v58 or below.)<br><br>
            
            <strong>privacy.resistFingerprinting = true</strong><br>
            This preference makes Firefox more resistant to browser fingerprinting.<br><br>

            <strong>privacy.trackingprotection.cryptomining.enabled = true</strong><br>
            Blocks CryptoMining<br><br>

            <strong>privacy.trackingprotection.enabled = true</strong><br>
            This is Mozilla's new built-in tracking protection. One of it's benefits is blocking tracking (i.e. Google Analytics) on privileged pages where add-ons that usually do that are disabled.<br><br>

            <strong>browser.send_pings = false</strong><br>
            The attribute would be useful for letting websites track visitors' clicks.<br><br>

            <strong>browser.urlbar.speculativeConnect.enabled = false</strong><br>
            Disable preloading of autocomplete URLs. Firefox preloads URLs that autocomplete when a user types into the address bar, which is a concern if URLs are suggested that the user does not want to connect to. <br><br>

            <strong>dom.event.clipboardevents.enabled = false</strong><br>
            Disable that websites can get notifications if you copy, paste, or cut something from a web page, and it lets them know which part of the page had been selected.<br><br>

            <strong>media.eme.enabled = false</strong><br>
            Disables playback of DRM-controlled HTML5 content, which, if enabled, automatically downloads the Widevine Content Decryption Module provided by Google Inc. <br>
            DRM-controlled content that requires the Adobe Flash or Microsoft Silverlight NPAPI plugins will still play, if installed and enabled in Firefox.<br><br>

            <strong>media.gmp-widevinecdm.enabled = false</strong><br>
            Disables the Widevine Content Decryption Module provided by Google Inc., used for the playback of DRM-controlled HTML5 content.<br><br>

            <strong>media.navigator.enabled = false</strong><br>
            Websites can track the microphone and camera status of your device.<br><br>

            <strong>network.cookie.cookieBehavior = 1</strong><br>
                Disable cookies<br>
                    <code class="list">0 = Accept all cookies by default</code><br>
                    <code class="list">1 = Only accept from the originating site (block third-party cookies)</code><br>
                    <code class="list">2 = Block all cookies by default</code><br><br>
            
            <strong>network.http.referer.XOriginPolicy = 2</strong><br>
                Only send Referer header when the full hostnames match. <br>

                    <code class="list">0 = Send Referer in all cases</code><br>
                    <code class="list">1 = Send Referer to same eTLD sites</code><br>
                    <code class="list">2 = Send Referer only when the full hostnames match</code><br><br>

            <strong>network.http.referer.XOriginTrimmingPolicy = 2</strong><br>
                When sending Referer across origins, only send scheme, host, and port in the Referer header of cross-origin requests. <br>

                    <code class="list">0 = Send full url in Referer</code><br>
                    <code class="list">1 = Send url without query string in Referer</code><br>
                    <code class="list">2 = Only send scheme, host, and port in Referer</code><br><br>

            <strong>webgl.disabled = true</strong><br>
            WebGL is a potential security risk. <br><br>

            <strong>browser.sessionstore.privacy_level = 2</strong><br>
            This preference controls when to store extra information about a session: contents of forms, scrollbar positions, cookies, and POST data.<br>

            <code class="list">0 = Store extra session data for any site. (Default starting with Firefox 4.)</code><br>
            <code class="list">1 = Store extra session data for unencrypted (non-HTTPS) sites only. (Default before Firefox 4.)</code><br>
            <code class="list">2 = Never store extra session data.</code><br><br>

            <strong>beacon.enabled = false</strong><br>
            Disables sending additional analytics to web servers.<br><br>

            <strong>browser.safebrowsing.downloads.remote.enabled = false</strong><br>
            Prevents Firefox from sending information about downloaded executable files to Google Safe Browsing to determine whether it should be blocked for safety reasons.<br><br>

            <strong>Disable Firefox prefetching pages it thinks you will visit next:</strong><br>
            Prefetching causes cookies from the prefetched site to be loaded and other potentially unwanted behavior.<br>

                <code class="list">network.dns.disablePrefetch = true</code><br>
                <code class="list">network.dns.disablePrefetchFromHTTPS = true</code><br>
                <code class="list">network.predictor.enabled = false</code><br>
                <code class="list">network.predictor.enable-prefetch = false</code><br>
                <code class="list">network.prefetch-next = false</code><br><br>

            <strong>network.IDN_show_punycode = true</strong><br>
            Not rendering IDNs as their Punycode equivalent leaves you open to phishing attacks that can be very difficult to notice.<br><br>
        </p>
        <h3 class="title_desc">8 - Disable WebRTC</h3>
        <p class="desc_article">WebRTC is a communication protocol that works with JavaScript that can leak your IP address from behind your VPN.<br><br>
        
        Here are two different ways to disable WebRTC :<br><br>
        - Firstly, the simplest one, you will just have to install this extension named <a href="https://addons.mozilla.org/en-US/firefox/addon/happy-bonobo-disable-webrtc/" target="_blank">Disable WebRTC</a><br><br>
        
        - Another method that requires a little more effort, you need to go to <code>about:config</code> and press "Accept the Risk and Continue".<br>
        Then you have to search for <code>media.peerconnection.enabled</code> and set it to <code>false</code><br>
        
        <br><small class="note">Note: This disables browser-based call functionality that is used for webapps like Discord, etc.</small>
        </p>

        <h3><strong>More Resources :</strong></h3>
        <ul>
            <li><a href="https://www.mozilla.org/en-US/privacy/">Mozilla's Privacy Policy</a> - We always recommend reading through the privacy statement of any organization you deal with, and Mozilla is no exception.</li>
            <li><a href="https://addons.mozilla.org/en-US/firefox/addon/privacy-settings/">Privacy Settings</a> - A Firefox add-on to alter built-in privacy settings easily with a toolbar panel</li>
            <li><a href="https://ffprofile.com/">ffprofile</a> - Helps you to create a Firefox profile with the defaults you like.</li>
            <li><a href="https://github.com/ghacksuserjs/ghacks-user.js">ghacks user.js</a> - The ghacks user.js is a template which aims to provide as much privacy and enhanced security as possible, and to reduce tracking and fingerprinting as much as possible - while minimizing any loss of functionality and breakage.</li>
        </ul>

        <?php require('../inc/contact.php'); ?>
        <?php require('../inc/footer.php'); ?>

        <script src="../js/main.js"></script>
</body>

</html>