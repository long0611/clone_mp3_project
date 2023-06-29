<style>
    .audio-player-info{display:flex;align-items:center;justify-content:center;width:100px}.audio-player-progressbar{background-color:#ebebeb;width:200px;height:10px;border-radius:25px}.audio-player-progressmeter{border-radius:25px;background-color:#007bff;height:100%}.audio-player{display:flex;flex-direction:row;align-items:center}
</style>

<script>
    var currAudioPlayer = null;
    var currPlayButton = null;
    var currProgressMeter = null;
    
    $.each($(".audio-player"), function() {
        console.log("test");
        createAudioPlayer($(this).data("src")).init(this);
    });

    function pauseTrack(){
        if (currAudioPlayer != null) {
            currAudioPlayer.pause();
            currAudioPlayer.src = "";
            currProgressMeter.style.width = '0px';
            currPlayButton.innerHTML = '<i class="fa fa-play"></i>';
        }
    }
    
    function createAudioPlayer(src){
        var audioPlayer;
        var informationDiv;
        var progressbar;
        var progressbarWidth;
        var progressmeter;
        var playButton = document.createElement('button');
        playButton.innerHTML = '<i class="fa fa-play"></i>';
        playButton.className = "btn btn-primary";
        playButton.onclick = play;
    
        return {
            init: init,
        };
    
        function play() {
            if (currAudioPlayer != null && currAudioPlayer != audioPlayer && !currAudioPlayer.paused){
                currAudioPlayer.pause();
                currAudioPlayer.src = "";
                currProgressMeter.style.width = '0px';
                currPlayButton.innerHTML = '<i class="fa fa-play"></i>';
            }
            if (!audioPlayer.paused) {
                playButton.innerHTML = '<i class="fa fa-play"></i>';
                audioPlayer.pause();
            }
            else {
                audioPlayer.src = src;
                currAudioPlayer = audioPlayer;
                currPlayButton = playButton;
                currProgressMeter = progressmeter;
                playButton.innerHTML = '<i class="fa fa-pause"></i>';
                audioPlayer.play();
            }
        }
    
        function pause() {
            audioPlayer.pause();
        }
    
        function stop() {
            audioPlayer.pause();
            audioPlayer.currentTime = 0;
        }
    
        function seeking(e) {
            var percent = e.offsetX / progressbarWidth;
            audioPlayer.currentTime = percent * audioPlayer.duration;
        }
    
        function displayTime(seconds) {
            var minutes = parseInt(seconds / 60);
            seconds = parseInt(seconds - minutes * 60);
            if (Number.isNaN(minutes)) {return 0 + ":" + 0;}
            return minutes + ":" + seconds;
        }
    
        function updateTime() {
            informationDiv.innerHTML = displayTime(audioPlayer.currentTime) + ' / ' + displayTime(audioPlayer.duration);
            var percent = audioPlayer.currentTime / audioPlayer.duration;
            progressmeter.style.width = (percent * progressbarWidth) + 'px';
        }
    
        function init(playerElement) {
            audioPlayer = new Audio();
            audioPlayer.preload = "metadata";
            audioPlayer.src = src;
            audioPlayer.addEventListener('timeupdate', function () {
                updateTime();
            });
            audioPlayer.addEventListener('loadedmetadata', function () {
                updateTime();
            });
    
            var stopButton = document.createElement('button');
            stopButton.innerHTML = '<i class="fa fa-stop"></i>';
            stopButton.onclick = stop;
    
            var pauseButton = document.createElement('button');
            pauseButton.innerHTML = '<i class="fa fa-pause"></i>';
            pauseButton.onclick = pause;
    
            informationDiv = document.createElement('div');
            informationDiv.className = 'audio-player-info';
    
            progressbar = document.createElement('div');
            progressbar.className = 'audio-player-progressbar';
            progressbar.addEventListener('click', seeking);
            progressmeter = document.createElement('div');
            progressmeter.className = 'audio-player-progressmeter';
            progressbar.append(progressmeter);
    
            playerElement.innerHTML = '';
            playerElement.append(playButton);
            playerElement.append(informationDiv);
            playerElement.append(progressbar);
    
            progressbarWidth = progressbar.offsetWidth;
        }
    }
</script>