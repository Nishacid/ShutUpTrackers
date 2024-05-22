<?php

$ip = $_SERVER["REMOTE_ADDR"];
$user_agent = $_SERVER["HTTP_USER_AGENT"];
$host = gethostbyaddr($ip);
$http_accept = $_SERVER["HTTP_ACCEPT"];
$referer = !empty($_SERVER["HTTP_REFERER"])
    ? $_SERVER["HTTP_REFERER"]
    : "Unspecified";
$http_accept_encoding = $_SERVER["HTTP_ACCEPT_ENCODING"];
$http_accept_language = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
$http_host = $_SERVER["HTTP_HOST"];
if (strlen(strstr($user_agent, "Firefox")) > 0) {
    $http_donottrack = $_SERVER["HTTP_DNT"];
}
$http_upgrade_insecure_requests = $_SERVER["HTTP_UPGRADE_INSECURE_REQUESTS"];
$http_request_method = $_SERVER["REQUEST_METHOD"];
$http_request_scheme = $_SERVER["REQUEST_SCHEME"];
$http_request_uri = $_SERVER["REQUEST_URI"];
$https = !empty($_SERVER["HTTPS"]) ? $_SERVER["HTTPS"] : "OFF";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Nishacid">
    <meta name="description" content="Protection against mass surveillance and spying">
    <title>ShutUpTrackers</title>
    <!-- extern imports -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <!-- general imports -->
    <link rel="stylesheet" href="/assets/css/body-style.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="icon" href="/assets/img/favicon.png">
</head>
<body>
    <?php require __DIR__ . "/inc/nav.php"; ?>
    <div class="information"><br>
        <h1>HTTP information</h1><br>
        <div class="table">
            <div class="row header">
                <div class="cell">
                    Attribute
                </div>
                <div class="cell">
                    Value
                </div>
            </div>

            <div class="row">
                <div class="cell" data-title="HTTP Header">
                    IP
                </div>
                <div class="cell" data-title="Value">
                    <?= htmlspecialchars($ip) ?>
                </div>
            </div>

            <div class="row">
                <div class="cell" data-title="HTTP Header">
                    HOST
                </div>
                <div class="cell" data-title="Value">
                    <?= htmlspecialchars($host) ?>
                </div>
            </div>

            <div class="row">
                <div class="cell" data-title="HTTP Header">
                    User-Agent
                </div>
                <div class="cell" data-title="Value">
                    <?= htmlspecialchars($user_agent) ?>
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="HTTP Header">
                    Referer
                </div>
                <div class="cell" data-title="Value">
                    <?= htmlspecialchars($referer) ?>
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="HTTP Header">
                    Accept
                </div>
                <div class="cell" data-title="Value">
                    <?= htmlspecialchars($http_accept) ?>
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="HTTP Header">
                    Accept Encoding
                </div>
                <div class="cell" data-title="Value">
                    <?= htmlspecialchars($http_accept_encoding) ?>
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="HTTP Header">
                    Accept Language
                </div>
                <div class="cell" data-title="Value">
                    <?= htmlspecialchars($http_accept_language) ?>
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="HTTP Header">
                    HTTP Host
                </div>
                <div class="cell" data-title="Value">
                    <?= htmlspecialchars($http_host) ?>
                </div>
            </div>
            <?php if (strlen(strstr($user_agent, "Firefox")) > 0) {
                echo '<div class="row">
                    <div class="cell" data-title="HTTP Header">
                        DoNotTrack
                    </div>
                    <div class="cell" data-title="Value">' .
                    htmlspecialchars($http_donottrack) .
                    '
                    </div>
                </div>';
            } ?>
            <div class="row">
                <div class="cell" data-title="HTTP Header">
                    Upgrade Insecure Requests
                </div>
                <div class="cell" data-title="Value">
                    <?= htmlspecialchars($http_upgrade_insecure_requests) ?>
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="HTTP Header">
                    Request Method
                </div>
                <div class="cell" data-title="Value">
                    <?= htmlspecialchars($http_request_method) ?>
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="HTTP Header">
                    Request URI
                </div>
                <div class="cell" data-title="Value">
                    <?= htmlspecialchars($http_request_uri) ?>
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="HTTP Header">
                    HTTPS
                </div>
                <div class="cell" data-title="Value">
                    <?= htmlspecialchars($https) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="information">
        <h1>Javascript information</h1><br>
        <div class="table">

            <div class="row header">
                <div class="cell">
                    Attribute
                </div>
                <div class="cell">
                    Value
                </div>
            </div>

            <div class="row">
                <div class="cell" data-title="javascript">
                    User-Agent
                </div>
                <div class="cell" data-title="Value" id="user_agent">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                    Platform
                </div>
                <div class="cell" data-title="Value" id="platform">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                    Cookie Enable
                </div>
                <div class="cell" data-title="Value" id="cookie_enable">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                    Language
                </div>
                <div class="cell" data-title="Value" id="langue">
                    Javascript Disabled
                </div>
            </div>

            <div class="row">
                <div class="cell" data-title="javascript">
                    Product
                </div>
                <div class="cell" data-title="Value" id="product">
                    Javascript Disabled
                </div>
            </div>
            <canvas id="glcanvas" style="width: 0px; height: 0px; display: none;">

            </canvas>
            <div class="row">
                <div class="cell" data-title="javascript">
                Graphic Card
                </div>
                <div class="cell" data-title="Value" id="graphiccard">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                TimeZone
                </div>
                <div class="cell" data-title="Value" id="timezone">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                Canvas
                </div>
                <div class="cell" data-title="Value" id="canvas">
                    <p id="canvastext">Javascript Disabled</p>
                    <canvas id="myCanvas" width="200" height="100"></canvas>
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                List of fonts
                </div>
                <div class="cell" data-title="Value" id="listoffonts">
                    Javascript Disabled
                </div>
            </div>
            <?php if (strlen(strstr($user_agent, "Firefox")) > 0) {
                echo '
                    <div class="row">
                    <div class="cell" data-title="javascript">
                    Do Not Track
                    </div>
                    <div class="cell" data-title="Value" id="donottrack">
                        Javascript Disabled
                    </div>
                </div>
                    ';
            } ?>
            <div class="row">
                <div class="cell" data-title="javascript">
                Use of local storage
                </div>
                <div class="cell" data-title="Value" id="useoflocalstorage">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                Use of session storage
                </div>
                <div class="cell" data-title="Value" id="useofsessionstorage">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                Screen width
                </div>
                <div class="cell" data-title="Value" id="screenwidth">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                Screen height
                </div>
                <div class="cell" data-title="Value" id="screenheight">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                Screen depth
                </div>
                <div class="cell" data-title="Value" id="screendepth">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                Screen available top
                </div>
                <div class="cell" data-title="Value" id="screenavailabletop">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                Screen available Left
                </div>
                <div class="cell" data-title="Value" id="screenavailableleft">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                Screen available Height
                </div>
                <div class="cell" data-title="Value" id="screenavailableheight">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                Screen available width
                </div>
                <div class="cell" data-title="Value" id="screenavailablewidth">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                Screen left
                </div>
                <div class="cell" data-title="Value" id="screenleft">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                Screen top
                </div>
                <div class="cell" data-title="Value" id="screentop">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                List of plugins
                </div>
                <div class="cell" data-title="Value" id="listofplugins">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                BuildID
                </div>
                <div class="cell" data-title="Value" id="buildid">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                Audio formats
                </div>
                <div class="cell" data-title="Value" id="audioformats">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                Video formats
                </div>
                <div class="cell" data-title="Value" id="videoformats">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                WebGL Vendor
                </div>
                <div class="cell" data-title="Value" id="webglvendor">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                WebGL Renderer
                </div>
                <div class="cell" data-title="Value" id="webglrenderer">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                WebGL Data
                </div>
                <div class="cell" data-title="Value" id="webgldata">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                WebGL Parameters
                </div>
                <div class="cell" data-title="Value" id="webglparameters">
                    Javascript Disabled
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="javascript">
                Use of Adblock
                <br><small><strong>grey color if your are use it</strong></small>
                </div>
                <div class="cell" data-title="Value" id="adblock">

                </div>
            </div>

        </div>
    </div>
    <style>
                .adBanner {
                    background-color: transparent;
                    height: 1px;
                    width: 1px;
                }
                </style>
                <div id="wrapfabtest">
                    <div class="adBanner">
                    </div>
                </div>




    <?php require __DIR__ . "/inc/contact.php"; ?>
    <footer>
    Shutuptrackers is a website that provides information for protecting your data security and privacy. No Ads, No Analytics, No Affiliates, No Cross-Site Requests.
    <small><a href="/thanks.php" class="thanks">Thanks page</a> / <a href="/LICENCE.txt" class="thanks">Licence</a></small>
    </footer>
    <script src="/assets/js/main.js"></script>

</body>

</html>
