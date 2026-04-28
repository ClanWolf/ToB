var sound_key = new Howl({ src: ['audio/key.mp3', 'audio/key.ogg'] });

var sound = getCookie("tob_sound");
if (sound === null || typeof sound === 'undefined') {
	sound = "on";
	setCookie("tob_sound", "on", 365);
}

function setSoundOn() {
	sound = "on";
	setCookie("tob_sound", "on", 365);
	document.getElementById("soundswitch").innerHTML =
		"<a href='#' onclick='setSoundOff();'><i class='fa fa-volume-up fa-lg' aria-hidden='true'></i></a>";
}

function setSoundOff() {
	sound = "off";
	setCookie("tob_sound", "off", 365);
	document.getElementById("soundswitch").innerHTML =
		"<a href='#' onclick='setSoundOn();'><i class='fa fa-volume-off fa-lg' aria-hidden='true'></i></a>";
}

function playKeySound() {
	if (sound === "on") {
		sound_key.play();
	}
}
