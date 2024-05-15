<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/videos.css" rel="stylesheet" />
    <title>videos</title>
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
<main>
	<div class="camera" role="img" aria-label="White camera rotating left and right">
		<div class="camera__shadow"></div>
		<div class="camera__front"></div>
		<div class="camera__contents">
			<div class="camera__red-light"></div>
			<div class="camera__lens-shadow"></div>
			<div class="camera__lens-back"></div>
			<div class="camera__lens-ring">
				<div class="camera__lens-ring-glare1"></div>
				<div class="camera__lens-ring-glare2"></div>
				<div class="camera__lens-ring-glare3"></div>
			</div>
			<div class="camera__lens-inner">
				<div class="camera__lens-inner-glare1"></div>
				<div class="camera__lens-inner-glare2"></div>
				<div class="camera__lens-eye-shadow"></div>
				<div class="camera__lens-glare"></div>
				<div class="camera__lens-eye">
					<div class="camera__lens-eye-ring"></div>
					<div class="camera__lens-eye-inner-glare"></div>
					<div class="camera__lens-eye-center">
						<div class="camera__lens-eye-center-glare"></div>
					</div>
					<div class="camera__lens-eye-glass-color"></div>
					<div class="camera__lens-eye-glare"></div>
					<div class="camera__lens-eye-glass"></div>
				</div>
			</div>
		</div>
	</div>
</main>
<script>
    function startTimer() {
        let counter = 0;
        const timerElement = document.getElementById('timer');
        const intervalId = setInterval(() => {
            counter++;
            if (counter > 100) {
                clearInterval(intervalId);
                window.location.href = 'Videos.php';
            } else {
                timerElement.textContent = counter;
            }
        }, 70); 
    }
    window.onload = startTimer;
</script>
</body>
</html>