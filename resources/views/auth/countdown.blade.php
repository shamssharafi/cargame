<!DOCTYPE html>
<html>
  <head>
    <title>Random Car Game</title>
  </head>
  <body onload="startTimer();">
    <div id="countdown">
      <div id="countdown-number">59</div>
    </div>
    <div class="action-list">
      <button id="stop">
        <img src="https://img.icons8.com/ios-glyphs/30/000000/pause--v1.png" />
      </button>
      <button id="start">
        <img src="https://img.icons8.com/ios-glyphs/30/000000/play--v1.png" />
      </button>
      <button id="reset">
        <img src="https://img.icons8.com/ios-glyphs/30/000000/stop.png" />
      </button>
    </div>
    <audio id="timeout_audio"></audio>
  </body>
</html>

<script>
  // Select Countdown container
const countContainer = document.getElementById("countdown-number");
var x = document.getElementsByClassName('action-list')[0];
// Select action buttons
const startButton = document.getElementById("start");
const stopButton = document.getElementById("stop");
const resetButton = document.getElementById("reset");

// Select timeout Audio element
const timeoutAudio = document.getElementById("timeout_audio");

// variable to store count
var remainingTime = 59;

// variable to store time interval
var timer;

// Variable to track whether timer is running or not
var isStopped = true;

// Function to start Timer
const startTimer = () => {
  x.style.display = "none";
  if (isStopped) {
    isStopped = false;
    countContainer.innerHTML = remainingTime;
    timer = setInterval(renderTime, 1000);
  }
};

// Function to stop Timer
const stopTimer = () => {
  isStopped = true;
  if (timer) {
    clearInterval(timer);
  }
};

// Function to reset Timer
const resetTimer = () => {
  isStopped = true;
  clearInterval(timer);
  remainingTime = 59;
  countContainer.innerHTML = remainingTime;
};

// Initialize timeout sound
timeoutAudio.src = "http://soundbible.com/grab.php?id=1252&type=mp3";
timeoutAudio.load();

// Attach onclick event to buttons
startButton.onclick = startTimer;
resetButton.onclick = resetTimer;
stopButton.onclick = stopTimer;

// function to display time
const renderTime = () => {
  // decement time
  remainingTime -= 1;
  // render count on the screen
  countContainer.innerHTML = remainingTime;
  // timeout on zero
  if (remainingTime === 0) {
    isStopped = true;
    clearInterval(timer);
    x.style.display = "block";
    // Play audio on timeout
    timeoutAudio.play();
    remainingTime = 59;
  }
};
</script>
<style>
  body {
  font-family: sans-serif;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-image: url("https://img4.goodfon.com/wallpaper/nbig/1/2e/multfilm-shou-simpsons-personazh-20th-century-fox-art-ris-15.jpg");
}
#countdown {
  display: flex;
  justify-content: center;
  align-items: center;
  color: #0e2c4c;
  font-size: 70px;
  width: 200px;
  height: 200px;
  background-color: #e7d9fc;
  border-radius: 50%;
}
.action-list {
  display: flex;
  gap: 30px;
  margin-top: 30px;
}
button {
  border: none;
  background-color: #e7d9fc;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  cursor: pointer;
}
</style>