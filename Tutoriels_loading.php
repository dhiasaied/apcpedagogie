<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/Tutoriels.css" rel="stylesheet" />
    <title>Tutoriels</title>
    <style>
    .timer {
        position: fixed;
        top: 20px;
        right: 20px;
        font-size: 24px;
        opacity: 0; 
    }
</style>
</head>
<body>
<div class="timer" id="timer">0</div>
<div class="text">
  <p>Apcpedagogie</p>
  <p>
    <span class="word wisteria">Tutoriels</span>
    <span class="word belize">Guides</span>
    <span class="word pomegranate">Lessons</span>
    <span class="word green">Classes</span>
    <span class="word midnight">Workshops</span>
  </p>
</div>

<script>
var words = document.getElementsByClassName('word');
var wordArray = [];
var currentWord = 0;

words[currentWord].style.opacity = 1;
for (var i = 0; i < words.length; i++) {
  splitLetters(words[i]);
}

function changeWord() {
  var cw = wordArray[currentWord];
  var nw = currentWord == words.length-1 ? wordArray[0] : wordArray[currentWord+1];
  for (var i = 0; i < cw.length; i++) {
    animateLetterOut(cw, i);
  }
  
  for (var i = 0; i < nw.length; i++) {
    nw[i].className = 'letter behind';
    nw[0].parentElement.style.opacity = 1;
    animateLetterIn(nw, i);
  }
  
  currentWord = (currentWord == wordArray.length-1) ? 0 : currentWord+1;
}

function animateLetterOut(cw, i) {
  setTimeout(function() {
		cw[i].className = 'letter out';
  }, i*80);
}

function animateLetterIn(nw, i) {
  setTimeout(function() {
		nw[i].className = 'letter in';
  }, 340+(i*80));
}

function splitLetters(word) {
  var content = word.innerHTML;
  word.innerHTML = '';
  var letters = [];
  for (var i = 0; i < content.length; i++) {
    var letter = document.createElement('span');
    letter.className = 'letter';
    letter.innerHTML = content.charAt(i);
    word.appendChild(letter);
    letters.push(letter);
  }
  
  wordArray.push(letters);
}

changeWord();
setInterval(changeWord, 2000);
</script>
<script>
    function startTimer() {
        let counter = 0;
        const timerElement = document.getElementById('timer');
        const intervalId = setInterval(() => {
            counter++;
            if (counter > 100) {
                clearInterval(intervalId);
                window.location.href = 'Tutoriels.php';
            } else {
                timerElement.textContent = counter;
            }
        }, 70); 
    }
    window.onload = startTimer;
</script>
</body>
</html>