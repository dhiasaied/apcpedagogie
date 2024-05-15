<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/Cours.css" rel="stylesheet" />
    <title>Cours</title>
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
<div class="book">
    <div class="book__pg-shadow"></div>
    <div class="book__pg"></div>
    <div class="book__pg book__pg--2"></div>
    <div class="book__pg book__pg--3"></div>
    <div class="book__pg book__pg--4"></div>
    <div class="book__pg book__pg--5"></div>
</div>

<script>
    function startTimer() {
        let counter = 0;
        const timerElement = document.getElementById('timer');
        const intervalId = setInterval(() => {
            counter++;
            if (counter > 100) {
                clearInterval(intervalId);
                window.location.href = 'cours.php';
            } else {
                timerElement.textContent = counter;
            }
        }, 70); 
    }
    window.onload = startTimer;
</script>

</body>
</html>
