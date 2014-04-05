function playSound(element,soundfile)
{
    if (element.mp3) 
    {
    	console.log(element.mp3.paused);
        if(element.mp3.paused)
        {
        	element.mp3.play();
        	console.log("play")
        }
        else 
        {
        	element.mp3.pause();
        	console.log("pause")
        }
    } 
    else
    {
        element.mp3 = new Audio(soundfile);
        element.mp3.play();
    }
}
