function playSound(element,soundfile) {
    if (element.mp3) {
        if(element.mp3.paused) element.mp3.play();
        else element.mp3.pause();
    } else {
        element.mp3 = new Audio(soundfile);
        element.mp3.play();
    }
}
