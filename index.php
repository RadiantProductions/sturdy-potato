<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RADIANT POP - Live Pop Music Video Stream | Watch Now</title>

  <!-- SEO Meta Tags -->
  <meta name="description" content="Watch RADIANT POP's live video stream featuring the best pop music. Tune in for non-stop entertainment!">
  <meta name="keywords" content="RADIANT POP, live video, pop music, music streaming, video player">
  <meta name="author" content="RADIANT RADIOS">
  <meta name="robots" content="index, follow">

  <!-- Open Graph (Facebook) -->
  <meta property="og:title" content="RADIANT POP Live Video Stream">
  <meta property="og:description" content="Watch the best pop music live on RADIANT POP. Enjoy seamless video streaming.">
  <meta property="og:image" content="https://radiantradios.xyz/assets/radiant-pop-thumbnail.jpg">
  <meta property="og:url" content="https://radiantradios.xyz/pop-live-stream">
  <meta property="og:type" content="video.other">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="RADIANT POP - Live Video Stream">
  <meta name="twitter:description" content="Tune in to RADIANT POP's live video stream for nonstop pop music.">
  <meta name="twitter:image" content="https://radiantradios.xyz/assets/radiant-pop-thumbnail.jpg">

  <!-- Schema Markup for Video -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "VideoObject",
    "name": "RADIANT POP Live Stream",
    "description": "Watch RADIANT POP's live video stream featuring top pop music.",
    "thumbnailUrl": "https://radiantradios.xyz/assets/radiant-pop-thumbnail.jpg",
    "contentUrl": "https://azura.radiantradios.xyz/listen/radiant_radios__pop/video.ts",
    "embedUrl": "https://radiantradios.xyz/pop-live-stream",
    "publisher": {
      "@type": "Organization",
      "name": "RADIANT RADIOS",
      "logo": {
        "@type": "ImageObject",
        "url": "https://radiantradios.xyz/assets/logo.png"
      }
    }
  }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/mpegts.js@1.6.2/dist/mpegts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>


  <div class="video-container" id="videoContainer">
    <video id="video" autoplay aria-label="RADIANT POP Live Video Stream" title="RADIANT POP Live Video"></video>
    <div class="controls">
      <button id="playPause" aria-label="Play/Pause"><i class="fas fa-play"></i></button>
      <button id="mute" aria-label="Mute/Unmute"><i class="fas fa-volume-up"></i></button>
      <input type="range" id="volume" min="0" max="1" step="0.1" value="1" />
      <span id="duration" class="live-indicator">LIVE</span>
    </div>
  </div>

  <script>
    const video = document.getElementById('video');
    const playPauseBtn = document.getElementById('playPause');
    const muteBtn = document.getElementById('mute');
    const volumeSlider = document.getElementById('volume');
  
    const videoContainer = document.getElementById('videoContainer');

    let player;
    let isPlaying = false;

    function initPlayer() {
      if (!player) {
        player = mpegts.createPlayer({
          type: 'mse',
          isLive: true,
          url: 'https://azura.radiantradios.xyz/listen/radiant_radios__pop/video.ts'
        });

        player.attachMediaElement(video);
        player.load();
      }
    }

    
    function togglePlay() {
      if (!player) initPlayer();

      if (isPlaying) {
        video.pause();
        playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
        isPlaying = false;
      } else {
        playPauseBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
        player.play().then(() => {
          playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
          isPlaying = true;
        }).catch(error => {
          console.error('Playback error:', error);
          playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
          isPlaying = false;
        });
      }
    }

    playPauseBtn.addEventListener('click', togglePlay);

    muteBtn.addEventListener('click', () => {
      video.muted = !video.muted;
      muteBtn.innerHTML = video.muted ? '<i class="fas fa-volume-mute"></i>' : '<i class="fas fa-volume-up"></i>';
    });

    volumeSlider.addEventListener('input', () => {
      video.volume = volumeSlider.value;
    });


    document.addEventListener('DOMContentLoaded', () => {
      initPlayer();
      setTimeout(enterFullscreen, 1000);
    });

  </script>

  <style>
    body { font-family: Arial, sans-serif; background-color: #000; display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh; margin: 0; text-align: center; color: white; }
    .video-container { position: relative; max-width: 100%; width: 100vw; height: 100vh; }
    video { width: 100%; height: 100%; background-color: #000; }
    .controls { display: flex; position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); background-color: rgba(0, 0, 0, 0.4); padding: 10px; border-radius: 12px; backdrop-filter: blur(10px); align-items: center; }
    button { background-color: rgba(255, 255, 255, 0.1); color: white; border: none; padding: 10px; cursor: pointer; margin-right: 10px; border-radius: 8px; }
    button i { font-size: 16px; }
    button:hover { background-color: rgba(255, 255, 255, 0.2); }
    input[type='range'] { width: 100px; }
    span { color: white; }
    .live-indicator { color: red; font-weight: bold; }
  </style>
</body>
</html>
