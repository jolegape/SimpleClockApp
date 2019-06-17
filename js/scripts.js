function digitalClock(militaryTime = false) {
	var d = new Date();

	if (militaryTime == false) {
		t = d.toLocaleString("en-US", {hour12: true, hour: '2-digit', minute: '2-digit'});
	} else {
		t = d.toLocaleString("en-US", {hour12: false, hour: '2-digit', minute: '2-digit'});
	}
	document.getElementById('clockDisplay').innerHTML = t;
	setTimeout(digitalClock, 1000, militaryTime);
}

function toggleFullscreen() {
	if (document.fullscreenElement || document.webkitFullscreenElement || document.mozFullScreenElement || document.msFullscreenElement) { /* In Full Screen, let's exit */
		if (document.exitFullscreen) {
			document.exitFullscreen();
		} else if (document.mozCancelFullScreen) { /* Firefox */
			document.mozCancelFullScreen();
		} else if (document.webkitExitFullscreen) { /* Chrome, Safari & Opera */ 
			document.webkitExitFullscreen();
		} else if (document.msExitFullscreen) { /* IE & Edge */
			document.msExitFullscreen();
		}
	} else { /* Not in full screen, lets make it so! */
		if (document.documentElement.requestFullscreen) {
			document.documentElement.requestFullscreen();
		} else if (document.documentElement.mozRequestFullScreen) { /* Firefox */
			document.documentElement.mozRequestFullScreen();
		} else if (document.documentElement.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
			document.documentElement.webkitRequestFullscreen();
		} else if (document.documentElement.msRequestFullscreen) { /* IE & Edge */
			document.documentElement.msRequestFullscreen();
		}
	}
}

function updateFormTime() {
	finishTime = document.getElementById("finishTime").value;
	warn45 = moment(finishTime, 'HH:mm').subtract(45, 'm').format('HH:mm');
	warn30 = moment(finishTime, 'HH:mm').subtract(30, 'm').format('HH:mm');
	warn10 = moment(finishTime, 'HH:mm').subtract(10, 'm').format('HH:mm');

	document.getElementById("45minWarning").value = warn45;
	document.getElementById("30minWarning").value = warn30;
	document.getElementById("10minWarning").value = warn10;
}