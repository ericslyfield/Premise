jQuery(document).ready(function() {

    var wavesurfer = WaveSurfer.create({
        container: '#wavesurfer',
        waveColor: '#D9DCFF',
        progressColor: '#4353FF',
        cursorColor: '#4353FF',
        barWidth: 3,
        barRadius: 3,
        cursorWidth: 1,
        height: 200,
        barGap: 3
    });

    jQuery(".play-btn").click(function(e){
	wavesurfer.playPause();
});

wavesurfer.load('audio/grybrk.mp3');

wavesurfer.zoom(75);

});