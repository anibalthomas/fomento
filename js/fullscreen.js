function fun(element)
{
			currentvalue = document.getElementById('onoff').value;
			if(currentvalue == "Off")
				{
					if(document.cancelFullScreen) {
					document.cancelFullScreen();
					} else if(document.mozCancelFullScreen) {
					document.mozCancelFullScreen();
					} else if(document.webkitCancelFullScreen) {
					document.webkitCancelFullScreen();
					}
								document.getElementById("onoff").value="On";
				}
			else
						{
							if(element.requestFullScreen) {
							element.requestFullScreen();
							} else if(element.mozRequestFullScreen) {
							element.mozRequestFullScreen();
							} else if(element.webkitRequestFullScreen) {
							element.webkitRequestFullScreen();
							}
								document.getElementById("onoff").value="Off";

						}
}
