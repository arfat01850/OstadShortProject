const C_KEY = document.getElementById('key-C');
const D_KEY = document.getElementById('key-D');
const E_KEY = document.getElementById('key-E');
const F_KEY = document.getElementById('key-F');
const G_KEY = document.getElementById('key-G');
const A_KEY = document.getElementById('key-A');
const B_KEY = document.getElementById('key-B');

function playSound(key) {
  const audio = new Audio(`sounds/${key}.mp3`);
  audio.play();
}

C_KEY.addEventListener('mousedown', function() {
  playSound('C');
});

D_KEY.addEventListener('mousedown', function() {
  playSound('D');
});

E_KEY.addEventListener('mousedown', function() {
  playSound('E');
});

F_KEY.addEventListener('mousedown', function() {
  playSound('F');
});

G_KEY.addEventListener('mousedown', function() {
  playSound('G');
});

A_KEY.addEventListener('mousedown', function() {
  playSound('A');
});

B_KEY.addEventListener('mousedown', function() {
  playSound('B');
});

document.addEventListener('keydown', function(event) {
  if (event.key === 'c') {
    playSound('C');
  } else if (event.key === 'd') {
    playSound('D');
  } else if (event.key === 'e') {
    playSound('E');
  } else if (event.key === 'f') {
    playSound('F');
  } else if (event.key === 'g') {
    playSound('G');
  } else if (event.key === 'a') {
    playSound('A');
  } else if (event.key === 'b') {
    playSound('B');
  }
});
