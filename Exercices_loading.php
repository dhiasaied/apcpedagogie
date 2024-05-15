<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/Exercices.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Exercices</title>
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
<div class="page-wrapper">
  <div class="circle-wrapper">
    <div class="success circle"></div>
    <div class="icon">
      <i class="fas fa-check"></i>
    </div>
  </div>

  <div class="circle-wrapper">
    <div class="warning circle"></div>
    <div class="icon">
      <i class="fas fa-exclamation"></i>
    </div>
  </div>

  <div class="circle-wrapper">
    <div class="error circle"></div>
    <div class="icon">
      <i class="fas fa-times"></i>
    </div>
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
                window.location.href = 'Exercices.php';
            } else {
                timerElement.textContent = counter;
            }
        }, 70); 
    }
    window.onload = startTimer;
</script>
</body>
</html>
