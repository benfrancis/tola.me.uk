window.addEventListener('load', function() {
  var video = document.getElementById('video');
  video.addEventListener('play', function() {
    video.classList.add('opaque');
    shade.classList.add('opaque');
  });
  video.addEventListener('pause', function() {
    video.classList.remove('opaque');
    shade.classList.remove('opaque');
  });
});