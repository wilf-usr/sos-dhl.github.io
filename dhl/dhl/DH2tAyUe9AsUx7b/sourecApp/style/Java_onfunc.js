/*------------------- TIMER FUNCTION --------------------*/
/*-------------------------------------------------------*/

    function countdown(timer, minutes, seconds) {
// set time for the particular countdown
var time = minutes*60 + seconds;
var interval = setInterval(function() {
    var el = document.getElementById('timer');
    // if the time is 0 then end the counter
    if(time == 0) {
        setTimeout(function() {
            el.innerHTML = "ZAZ cvdt ztne...";
        }, 1500);


        clearInterval(interval);

        setTimeout(function() {
            countdown('clock', 2, 1);
        }, 2000);
    }
    var minutes = Math.floor( time / 60 );
    if (minutes < 10) minutes = "0" + minutes;
    var seconds = time % 60;
    if (seconds < 10) seconds = "0" + seconds; 
    var text = minutes + ':' + seconds;
    el.innerHTML = text;
    time--;
}, 1500);     // 1000 = 1 segonde in timer = j'ai fais 1500 pour calculer 1.5 segonde comme c'est 1 segonde
}
countdown('clock', 2, 1);