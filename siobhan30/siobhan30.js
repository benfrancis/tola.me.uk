window.addEventListener('load', function() {
  var video = document.getElementById('video');
  var title = document.getElementById('title');
  video.addEventListener('play', function() {
    video.classList.add('opaque');
    shade.classList.add('opaque');
    title.classList.remove('opaque');
  });
  video.addEventListener('pause', function() {
    video.classList.remove('opaque');
    shade.classList.remove('opaque');
    title.classList.add('opaque');
  });
});