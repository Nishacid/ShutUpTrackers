var burger = document.querySelector('.burger');
var navbar = document.querySelector('.nav-bar-phone nav');
triggered = false;

burger.addEventListener('click', function () {
  if (triggered) {
    navbar.classList.toggle('on');
    $('*:not(.nav-bar-phone, .nav-bar-phone *, body, html)').show();
    $('.nav-bar').hide();
    $('head *').hide();
    $('body').css("background", "#ecf0f1");
    triggered = false;
    console.log(triggered);
  } else {
    navbar.classList.toggle('on');
    $('*:not(.nav-bar-phone, .nav-bar-phone *, body, html)').hide();
    $('body').css("background", "#fff");
    triggered = true;
    console.log(triggered);
  }
});


// function graphic

var canvas;
canvas = document.getElementById("glcanvas");
var gl = canvas.getContext("experimental-webgl");


function getUnmaskedInfo(gl) {
  var unMaskedInfo = {
    renderer: '',
    vendor: ''
  };

  var dbgRenderInfo = gl.getExtension("WEBGL_debug_renderer_info");
  if (dbgRenderInfo != null) {
    unMaskedInfo.renderer = gl.getParameter(dbgRenderInfo.UNMASKED_RENDERER_WEBGL);
    unMaskedInfo.vendor = gl.getParameter(dbgRenderInfo.UNMASKED_VENDOR_WEBGL);
  }

  return unMaskedInfo;
}

function getVendor() {
  var canvas = document.createElement("canvas");
  var gl = canvas.getContext("webgl") || canvas.getContext("experimental-webgl");
  return gl ? gl.getParameter(gl.VENDOR) : "Deprected Browser";
}

function getRenderer(){
  const gl = canvas.getContext("webgl");
  if (gl === null) {
    return "Unable to initialize WebGL. Your browser or machine may not support it.";
  }else{
    return "true";
  }
}

//Date

var date = new Date();

// list of fonts

function getFonts() {
  var nFontLen = dlgHelper.fonts.count;
  var rgFonts = new Array();
  for (var i = 1; i < nFontLen + 1; i++)
    rgFonts[i] = dlgHelper.fonts(i);

  rgFonts.sort();
  for (var j = 0; j < nFontLen; j++)
    document.write(rgFonts[j] + "<BR>");
}

// myinfo

var browser_codename = navigator.appCodeName;
var browser_name = navigator.appName;
var browser_version = navigator.appVersion;
var appCodeName = navigator.appCodeName;
var cookie_enable = navigator.cookieEnabled;
var platform = navigator.platform;
var user_agent = navigator.userAgent;
var langue = navigator.language;
var product = navigator.product;
var timezone = date.getTimezoneOffset();

document.getElementById("user_agent").innerHTML = user_agent;
document.getElementById("platform").innerHTML = platform;
document.getElementById("cookie_enable").innerHTML = cookie_enable;
document.getElementById("langue").innerHTML = langue;
document.getElementById("product").innerHTML = product;
document.getElementById("graphiccard").innerHTML = getUnmaskedInfo(gl).renderer;
document.getElementById("timezone").innerHTML = timezone;
document.getElementById('useoflocalstorage').innerHTML = window.localStorage.length;
document.getElementById('useofsessionstorage').innerHTML = window.sessionStorage.length;
document.getElementById('useofsessionstorage').innerHTML = window.sessionStorage.length;
document.getElementById('screenwidth').innerHTML = screen.width;
document.getElementById('screenheight').innerHTML = screen.height;
document.getElementById('screendepth').innerHTML = screen.depth;
document.getElementById('screenavailabletop').innerHTML = screen.availTop;
document.getElementById('screenavailableleft').innerHTML = screen.availLeft;
document.getElementById('screenavailableheight').innerHTML = screen.availHeight;
document.getElementById('screenavailablewidth').innerHTML = screen.availWidth;
document.getElementById('screenleft').innerHTML = window.screenLeft;
document.getElementById('screentop').innerHTML = window.screenTop;
//document.getElementById("listoffonts").innerHTML = getFonts();
document.getElementById("buildid").innerHTML = window.navigator.buildID;
document.getElementById("webglvendor").innerHTML = getVendor();
document.getElementById("webglrenderer").innerHTML = getRenderer();
document.getElementById("webgldata").innerHTML = getRenderer();
document.getElementById("webglparameters").innerHTML = getVendor();


//canvas

document.getElementById("canvastext").innerText = "";
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
ctx.font = "30px Arial";
ctx.fillText("Canvas !", 10, 50);

//donottrack

if (window.doNotTrack || navigator.doNotTrack || navigator.msDoNotTrack || 'msTrackingProtectionEnabled' in window.external) {



  if (window.doNotTrack == "1" || navigator.doNotTrack == "yes" || navigator.doNotTrack == "1" || navigator.msDoNotTrack == "1" || window.external.msTrackingProtectionEnabled()) {

    document.getElementById("donottrack").innerHTML = "enable";

  } else {

    document.getElementById("donottrack").innerHTML = "disable";

  }

} else {

  document.getElementById("donottrack").innerHTML = "do not track is not support";

}

//list of plugins

var pluginslist = "";

// forEach(navigator.plugins, (element, value) => {
//   if(Number.isInteger(element)){
//     pluginslist += value;
//   }
// });

var len = navigator.plugins.length;
for(var i = 0; i < len; i++){
  pluginslist += navigator.plugins[i].name+", ";
}

document.getElementById("listofplugins").innerHTML = pluginslist;

//adblock

var adblock = document.getElementById("wrapfabtest");
if(adblock.offsetHeight > 0){
  document.getElementById("adblock").innerHTML = "false";
}else{
  document.getElementById("adblock").innerHTML = "true";
}
