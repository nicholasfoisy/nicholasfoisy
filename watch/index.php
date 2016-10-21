<html>
<head>
<title>DoodTube - Watch</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../resources\bootstrap-3.3.7-dist\css\bootstrap.min.css">

<!-- jQuery library -->
<script type="text/javascript" src="../resources/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="../resources/"></script>
<!-- Latest compiled JavaScript -->
<script src="..\resources\jPlayer-2.9.2\src\javascript\jplayer\jquery.jplayer.js"></script>
</head>
<body>
<div id="jp_container_1" class="jp-video">
    <div class="jp-title">
      <h1>Shitty Robot</h1>
    </div>
    <div class="jp-type-single">
      <div id="jquery_jplayer_1" class="jp-jplayer"></div>
      <div class="jp-gui">
        <div class="jp-video-play">
          <a href="javascript:;" class="jp-video-play-icon" tabindex="1">&#61515;</a>
        </div>
        <div class="jp-interface">
          <div class="jp-controls-holder">
            <ul class="jp-controls">
              <li><a href="javascript:;" class="jp-play" tabindex="1">&#61515;</a></li>
              <li><a href="javascript:;" class="jp-pause" tabindex="1">&#61516;</a></li>
              <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">&#61480;</a></li>
              <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">&#61478;</a></li>
            </ul>
            <div class="jp-volume-bar">
              <div class="jp-volume-bar-value"></div>
            </div>
            <ul class="jp-toggles">
              <li><a href="javascript:;" class="jp-full-screen" tabindex="1" title="full screen">&#61541;</a></li>
              <li><a href="javascript:;" class="jp-restore-screen" tabindex="1" title="restore screen">&#61542;</a></li>
          </div>
          <div class="jp-progress">
            <div class="jp-seek-bar">
              <div class="jp-play-bar"></div>
            </div>
          </div>
          <div class="jp-current-time"></div>
        </div>
      </div>
      <div class="jp-no-solution">
        <span>Update Required</span>
        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
      </div>
    </div>
</div>
<script>
  $(document).ready(function(){
      $("#jquery_jplayer_1").jPlayer({
        ready: function () {
          $(this).jPlayer("setMedia", {
            mp4: "../resources/test.mp4",
            poster: "../resources/icons/fire-512.png"
          });
        },
        swfPath: "/js",
        supplied: "mp4"
      });
    });
</script>
<style>
font-face {
  font-family: "FontAwesome";
  src: url('fonts/fontawesome-webfont.eot');
  src: url('fonts/fontawesome-webfont.eot?#iefix') format('eot'),
       url('fonts/fontawesome-webfont.woff') format('woff'), 
       url('fonts/fontawesome-webfont.ttf') format('truetype'), 
       url('fonts/fontawesome-webfont.svg#FontAwesome') format('svg');
  font-weight: normal;
  font-style: normal;
}
a {
  text-decoration: none;
}
.jp-video {
  margin: 0 auto;
  position: relative;
  font-family: Arial, sans-serif;
}
.jp-video-270p {
  width: 480px;
}
.jp-title h1 {
	font-size: 1em;
	text-align: center;
	color: #555;
}
.jp-video-play {
  font-family: "FontAwesome";
  position: absolute;
  top: 45%;
  left: 46%;
}
.jp-video-play a {
  font-size: 2em;
  color: rgba(255,255,255,.7);
  display: inline-block;
  width: 50px;
  height: 50px;
  line-height: 55px;
  text-align: center;
  background-color: rgba(0,0,0,.8);
  border-radius: 5px;
}
.jp-interface {
  width:100%;
  bottom: 0;
  position: relative;
  background: #f34927;
  background: -moz-linear-gradient(top,  #f34927 0%, #dd3311 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f34927), color-stop(100%,#dd3311));
  background: -webkit-linear-gradient(top,  #f34927 0%,#dd3311 100%);
  background: -o-linear-gradient(top,  #f34927 0%,#dd3311 100%);
  background: -ms-linear-gradient(top,  #f34927 0%,#dd3311 100%);
  background: linear-gradient(to bottom,  #f34927 0%,#dd3311 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f34927', endColorstr='#dd3311',GradientType=0 );
  overflow: hidden;
  -webkit-box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.1);
  box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.1); 
}
 
.jp-interface a {
  color: #fff;
  text-shadow: 1px 1px 0 rgba(0,0,0,0.3);
}
.jp-controls, .jp-toggles {
  padding: 0;
  margin: 0; 
  font-family: "FontAwesome"
}
.jp-toggles {
  position: absolute;
  top: 14px;
  right: 14px;
}
.jp-controls li, .jp-toggles li {
  display: inline;
}
.jp-play,.jp-pause {
    width: 55px;
    height: 40px;
    display: inline-block;
    text-align: center;
    line-height: 43px;
}
.jp-mute,.jp-unmute {
    position: absolute;
    right: 85px;
    top: 0;
    width: 20px;
    height: 40px;
    display: inline-block;
    line-height: 43px;
}
.jp-progress {
    background-color: #992E18;
    border-radius: 20px 20px 20px 20px;
    overflow: hidden;
    position: absolute;
    left: 55px;
    top: 14px;
    width: 55%;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,0.2) inset;
    box-shadow: 0 1px 1px 0 rgba(0,0,0,0.2) inset;
}
.jp-play-bar {
    height: 12px;
    background-color: #fff;
    border-radius: 20px 20px 20px 20px;
}
.jp-volume-bar {
    position: absolute;
    right: 40px;
    top: 16px;
    width: 45px;
    height: 8px;
    border-radius: 20px 20px 20px 20px;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,0.1) inset;
    box-shadow: 0 1px 1px 0 rgba(0,0,0,0.1) inset;
    background-color: #992E18;
    overflow: hidden;
}
.jp-volume-bar-value {
    background-color: #fff;
    height: 8px;
    border-radius: 20px 20px 20px 20px;
}
.jp-current-time {
    color: #FFF;
    font-size: 12px;
    line-height: 14px;
    position: absolute;
    right: 115px;
    top: 13px;
    text-shadow: 1px 1px 0 rgba(0,0,0,0.3);
}
.jp-video-full {
  /* Rules for IE6 (full-screen) */
  width:480px;
  height:270px;
  /* Rules for IE7 (full-screen) - Otherwise the relative container causes other page items that are not position:static (default) to appear over the video/gui. */
  position:static !important; 
  position:relative;
}
/* The z-index rule is defined in this manner to enable Popcorn plugins that add overlays to video area. EG. Subtitles. */
.jp-video-full div div {
  z-index:1000;
}
.jp-video-full .jp-jplayer {
  top: 0;
  left: 0;
  position: fixed !important; 
  position: relative; /* Rules for IE6 (full-screen) */
  overflow: hidden;
}
.jp-video-full .jp-interface {
  position: absolute !important;
  position: relative; /* Rules for IE6 (full-screen) */
  bottom: 0;
  left: 0;
}
.jp-video-full .jp-gui {
  position: fixed !important; 
  position: static; /* Rules for IE6 (full-screen) */
  top: 0;
  left: 0;
  width:100%;
  height:100%;
  z-index:1001; /* 1 layer above the others. */
}
 
.jp-video-full .jp-video-play a {
  font-size: 3em;
  height: 80px;
  width: 80px;
  line-height: 95px;
}
.jp-video-full .jp-progress {
  width: 83%;
}
.jp-video-270p .jp-type-single {
  -webkit-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
  -moz-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
  box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
}
</style>
</body>
</html>