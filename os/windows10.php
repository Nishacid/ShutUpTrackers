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
        <h1 class="title_pres">Windows 10 - A privacy nightmare</h1>
        <p class="desc_article">
        Microsoft just can't seem to shake the image that Windows 10 is spying on you. And Microsoft's lack of transparency about Windows 10's privacy isn't doing much to dispel the notion.<br>
        At Windows 10's release, there have been numerous reports about how much personal information Microsoft collects.<br> 
        </p>
        <h3 class="title_desc">1 - Shares your personal information with Microsoft by default</h3>
        <p class="desc_article">
        By default, Windows 10 shares a lot of information about you with Microsoft. 
        According to the company's <a href="https://privacy.microsoft.com/en-us/privacystatement">privacy policy</a>, Windows sends Microsoft everything you say to Cortana, Windows 10's Siri-like virtual assistant. 
        It also collects lot of information.
        <h4>Cortana can collect :</h4>
            <ul class="list_article">
                <li>- Your keystrokes, searches and mic input</li>
                <li>- Calendar data</li>
                <li>- Music you listen to</li>
                <li>- Purchases</li>
                <li>- Credit Card information</li>
                <li>...</li>
            </ul>

            <h4>Microsoft can collect :</h4>
            <ul class="list_article">
                <li>- Your identity</li>
                <li>- Passwords</li>
                <li>- Interests and habits</li>
                <li>- Purchases</li>
                <li>- Contacts and relationships</li>
                <li>- Location data</li>
                <li>- Usage data</li>
                <li>- Demographics</li>
                <li>- Content like emails, instant messages, caller list, audio and video recordings</li>
                <li>...</li>
            </ul>
        </p>
        <h3 class="title_desc">2 - Uses the bandwidth of your Internet connection</h3>
        <p class="desc_article">
        Windows 10 will use your Internet connection to help other people download apps or update their computers.<br><br>
        If someone is having trouble connecting to Microsoft's servers, He might instead download that update or app from you, a complete stranger and It all happens in the background, without either of you ever knowing it.<br>
        It's a feature called <a href="https://support.microsoft.com/en-us/help/4468254/windows-update-delivery-optimization-faq">Windows Update Delivery Optimization</a>.<br><br>

        To stop downloading updates and apps from or sending updates and apps to other Windows 10 devices on the Internet:

        <ul class="list_article">
            <li>1 - Select the <strong>Start</strong> button, then select <strong>Settings > Update & Security > Windows Update > Advanced options</strong>.</li>
            <li>2 - Select <strong>Delivery Optimization</strong> (or <strong>Choose how updates are delivered</strong> in earlier versions of Windows 10).</li>
            <li>3 - Select <strong>PCs on my local network</strong>.</li>
        </ul>

        <p class="desc_article">To stop downloading from or uploading to other PCs on the local network:</p>

        <ul class="list_article">
            <li>1 - Select the <strong>Start</strong> button, then select <strong>Settings > Update & Security > Windows Update > Advanced options</strong>.</li>
            <li>2 - Select <strong>Delivery Optimization</strong>.</li>
            <li>3 - Make sure <strong>Allow downloads from other PCs</strong> is turned <strong>Off</strong>. You'll get updates and apps directly from Windows Update and from Microsoft Store with Delivery Optimization; however, you won’t download from or upload to other PCs.</li>
        </ul>
        </p>
        <h3 class="title_desc">3 - Your data can be shared</h3>
        <p class="desc_article">When downloading Windows 10, you are authorizing Microsoft to share any of above-mentioned data with any third-party, with or without your consent.<br>
        Your system automatically syncs setting, services and data to Microsoft server, the data which is synced contains your browser history, the websites you are currently on, the saved apps, mobile and hotspot passwords along with Wifi SSID and passwords
        </p>

        <h3 class="title_desc">4 - Will continue to send information to Microsoft after you disable data-sharing settings</h3>
        <p class="desc_article">
        If you went to all privacy pages and shut off all data sharing, you'll still share information with Microsoft. <br><br>
        For example, even with Cortana and searching the Web from the Start menu disabled, opening Start and typing will send a request to www.bing.com to request a file called threshold.appcache which appears to contain some Cortana information, even though Cortana is disabled. 
        The request for this file appears to contain a random machine ID that persists across reboots.
        </p>
        <h3 class="title_desc">5 - Search for illegal games</h3>
        <p class="desc_article">The Windows 10 license agreement everyone agrees to (without reading) includes language that seems to allow the company to scan your computer for pirated games and disable them at will.<br>
        <br>"We may automatically check your version of the software and download software updates or configuration changes, including those that prevent you from accessing the Services, playing counterfeit games, or using unauthorized hardware peripheral devices." </p>
        
        <h3 class="title_desc">6 -  How to protect yourself ?</h3>
        <p class="desc_article">
        You can use as many tools and disable as many options as you want Windows 10 will always spy on you. The best way to avoid this is not to use Windows 10.<br>
        But there are some tools you can use to limit that tracking and telemetry.
        </p>
        <h4 style="font-weight:bold;">- <a href="https://github.com/10se1ucgo/DisableWinTracking/releases">DisableWinTracking</a></h4>
        <p class="desc_article">
        DisableWinTracking is a helpful tool for privacy-concerned users to disable a part of the native tracking within Windows 10, exemple :<br><br>
        If you leave your machine for 8 hours, inactive Windows 10 will send more than <code>5,500 connections to 93 different IP addresses</code>, including nearly <code> 4,000 to 51 different IP addresses </code> belonging to Microsoft.<br>

        If you leave the machine for 30 hours, Windows 10 has extended this connection to <code>113 non-private IP addresses</code>, potentially allowing hackers to intercept this data.<br>
        <a href="../img/OS/disablewintracking.png"><img src="../img/OS/disablewintracking.png" alt="disablewintracking" class="img_tweaks"></a><br>
        <small class="subtitle_os">check the options of your choice based on your preferences</small>
        After this, the number was reduced to <code>2758 connections to 30 different IP addresses</code> in the period of 30 hours.
        </p>
        <h4><strong>Overview of Windows 10 Privacy Tools :</strong></h4>
        <br>
        <table class="table_os">
            <tbody>
            <tr>
                <td witdh="100">
                    <strong>Name</strong>
                </td>
                <td witdh="60">
                    <strong>Backup or Restore</strong>
                </td>
                <td witdh="200">
                    <strong>Privacy Tweaks</strong>
                </td>
                <td>
                    <strong>Open Source</strong>
                </td>
            </tr>
            <tr>
                <td><a href="https://www.oo-software.com/en/shutup10" target="_blank">Shut Up 10</a></td>
                <td>Yes / No</td>
                <td>Disable Services, Telemetry, Access</td>
                <td>No</td>
            </tr>
            <tr>
                <td><a href="https://www.w10privacy.de/" target="_blank">Win10Privacy</a></td>
                <td>Yes / Yes</td>
                <td>Disable Services and Tasks, Apps Access,Telemetry, Disable Ads</td>
                <td>No</td>
            </tr>
            <tr>
                <td><a href="https://github.com/mirinsoft/debotnet/releases" target="_blank">Debotnet</a></td>
                <td>No / Yes</td>
                <td>Remove Apps, Privacy Tweaks, Telemetry, Other Tweaks.</td>
                <td>Yes</td>
            </tr>
            <tr>
                <td><a href="https://pxc-coding.com/donotspy10/" target="_blank">DoNotSpy 10</a></td>
                <td>Yes / No</td>
                <td>Disable services, Apps Access, Telemetry</td>
                <td>No</td>
            </tr>
            <tr>
                <td><a href="https://wpd.app/" target="_blank">WPD</a></td>
                <td>No / No</td>
                <td>Disable Services, Group Policy, Telemetry, Block IPs, Tweaks</td>
                <td>No</td>
            </tr>
            <tr>
                <td><a href="https://github.com/Sycnex/Windows10Debloater" target="_blank">Windows10Debloater</a></td>
                <td>No / No</td>
                <td>Apps, Tasks, Privacy</td>
                <td>Yes</td>
            </tr>
            <tr>
                <td><a href="https://github.com/DavidXanatos/priv10/releases" target="_blank">Private Winten</a></td>
                <td>No / No</td>
                <td>Disable Services, Apps Access, Telemetry</td>
                <td>Yes</td>
            </tr>
            <tr>
                <td><a href="https://github.com/10se1ucgo/DisableWinTracking" target="_blank">DisableWinTracking</a></td>
                <td>No / No</td>
                <td>Limit Tracking, Source</td>
                <td>Yes</td>
            </tr>
            <tr>
                <td><a href="https://github.com/W4RH4WK/Debloat-Windows-10" target="_blank">Debloat Windows 10</a></td>
                <td>No / No</td>
                <td>Disable Services, Remove Apps, Telemetry, Privacy</td>
                <td>Yes</td>
            </tr>
            <tr>
                <td><a href="https://www.getblackbird.net/" target="_blank">Blackbird</a></td>
                <td>No / Yes</td>
                <td>Disable Services, Telemetry, Apps, Hosts</td>
                <td>No</td>
            </tr>
            <tr>
                <td><a href="https://www.safer-networking.org/products/spybot-anti-beacon/" target="_blank">Spybot Anti-Beacon</a></td>
                <td>No / No</td>
                <td>Disable Services, Telemetry, Access, Hosts</td>
                <td>No </td>
            </tr>
            </tbody>
        </table>
        <?php require('../inc/contact.php'); ?>
        <?php require('../inc/footer.php'); ?>

        <script src="../js/main.js"></script>
</body>

</html>