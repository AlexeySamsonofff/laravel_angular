var svgContainer = document.getElementById('svgContainer');
var animItem = bodymovin.loadAnimation({
  wrapper: svgContainer,
  animType: 'svg',
  loop: true,
  autoplay: true,
   path: 'loader2.json'
});

lottie.loadAnimation({
  container: svgContainer, // the dom element that will contain the animation
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: 'loader2.json' // the path to the animation json
});