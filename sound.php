
 <audio style="top: -9" id="player" controls autoplay>
<source src="sound/Expurgar.mp3" >
</audio>
<script type="text/javascript">
var audio = $("#player")
audio.addEventListener('ended',function(){
        audio.src = "sound/eyana.mp3, sound/Expurgar.mp3";
        audio.pause();
        audio.load();
        audio.play();
    });</script>