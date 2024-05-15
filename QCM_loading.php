<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/QCM.css" rel="stylesheet" />
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
<div class="main">
  <div class="cube">
    <div class="face" style="--i:0; --j:1; --x:0"><p>?</p></div>
    <div class="face" style="--i:1; --j:1; --x:0"><p>?</p></div>
    <div class="face" style="--i:2; --j:1; --x:0"><p>?</p></div>
    <div class="face" style="--i:3; --j:1; --x:0"><p>?</p></div>
    <div class="face" id="top" style="--i:0; --j:1; --x:1"><p>?</p></div>
    <div class="face" style="--i:0; --j:-1; --x:1"></div>
    <div class="face" id="shadow" style="--i:0; --j:-1.5; --x:1"></div>
  </div>
</div>
<script>
    function startTimer() {
        let counter = 0;
        const timerElement = document.getElementById('timer');
        const intervalId = setInterval(() => {
            counter++;
            if (counter > 100) {
                clearInterval(intervalId);
                window.location.href = 'QCM.php';
            } else {
                timerElement.textContent = counter;
            }
        }, 70); 
    }
    window.onload = startTimer;
</script>
</body>
</html>