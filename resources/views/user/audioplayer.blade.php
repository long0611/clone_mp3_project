<style>
  
    #audioPlayerBottom {
        position: fixed;
        bottom: 0;
        width: 100%;
        padding: 10px;
        background: gray;
        display: none;
    }
    .btnplay{
        
        border: 2px solid #4CAF50;
        color: white;

        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
        margin: 4px 2px;
        cursor: pointer;
        height: 50px;
        width: 50px;
        

    }
    .button1 {
        background-color: none; 
        color: black; 
        border-radius: 50%;
    }

</style>

<div id="audioPlayerBottom">
    <div class="d-flex d-inline">
        <img id="audioPlayerCover" src="/HinhNen/63bbc6532cf1c-103400208_p0.png" alt="" style="display: inline-block; width: 100px; height: 100px; object-fit: cover">
        <span id="audioPlayerTrackName"></span>
        <span id="audioPlayerArtists" class="tac-gia" style="font-size: 12px"></span>
        <button style="margin-left: 200px;" class="btnplay button1" id="play-backward-btn"><i class="fas fa-step-backward"></i></button>         
        <audio id="audioBottom" controls="controls" style="display: inline-block;">
            <source id="audioBottomSource" src="">
        </audio>
        <button class="btnplay button1 ml-2" id="play-forward-btn"><i class="fas fa-step-forward"></i></button> 
    </div>

    <div>
        
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    var isAds = true;
    var currentIndex = -1;
    var playlistTracks = [];
  $(function() {
   $('#play-backward-btn').click(function() {
       playBackward(currentIndex - 1);
   });

   $('#play-forward-btn').click(function() {
       playForward(currentIndex + 1);
   });

   var audioBottom = document.getElementById('audioBottom');
   var audioBottomSource = document.getElementById('audioSource');

  $.ajax({
          url: "{{route($entry , ['id'=>$playlist_id])}}",
          dataType: "json",
      })
      .done(function( data ) {
          $.map(data, function(value) {
              playlistTracks.push(value);
          });

      });
  });

function playTrack(index){
    
        audioBottomSource.src = "";
   audioBottom.load();
   currentIndex = index;

   console.log(playlistTracks);
   audioBottomSource.src = playlistTracks[index].LinkBaiHat;
   audioBottom.load();
   audioBottom.play();

   $("#audioPlayerCover").attr("src" , playlistTracks[index].HinhBaiHat);
   $("#audioPlayerTrackName").text(playlistTracks[index].TenBaiHat);
   $("#audioPlayerArtists").text(playlistTracks[index].Casi);
   $("#audioPlayerBottom").css("display" , "block");






}

function playAds(index) {
    if(!isAds) {
        isAds = true;
        playlistTracks = [];
        $.ajax({
            url: "{{route($entry , ['id'=>$playlist_id])}}",
          dataType: "json",
      })
      .done(function( data ) {
          $.map(data, function(value) {
              playlistTracks.push(value);
          });
          playTrack(index);
        });
    }
    else {
        playTrack(index);
    }
}



function playFav(index) {
    if(isAds) {
        isAds = false;
        playlistTracks = [];
        $.ajax({
          url: "{{route('get-fav-as-json')}}",
          dataType: "json",
      })
      .done(function( data ) {
          $.map(data, function(value) {
              playlistTracks.push(value);
          });
          playTrack(index);
        });
    }
    else {
        playTrack(index);
    }
}


function playForward(index){
  console.log("Test");
   if (index < playlistTracks.length) {
       if (playlistTracks[index].LinkBaiHat != null) {
           playTrack(index);
       }
       else {
           playForward(index + 1);
       }
       
   }
}


function playBackward(index){
   console.log(index);
   if (index > -1) {
       if (playlistTracks[index].LinkBaiHat != null) {
           playTrack(index);
       }
       else {
           playBackward(index - 1);
       } 
   }
} 
</script>

