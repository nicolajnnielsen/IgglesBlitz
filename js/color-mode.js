// Function for changing the color theme
const colorToggle = document.getElementById('btnColorToggle');
const metaTheme = document.querySelector("meta[name=theme-color]");
const bodyClass = document.body.classList;
const cookieName = 'colorMode';
const cookiePath = 'path=/;';

const enableKellyGreen = () => {
	bodyClass.remove('midnight-green');
	metaTheme.setAttribute("content", "#046A38");
	document.cookie = cookieName + "= kelly;" + cookiePath + "expires=Thu, 01 Jan 1970 00:00:00 GMT;samesite=strict";
}

const enableMidnightGreen = () => {
	bodyClass.add('midnight-green');
	metaTheme.setAttribute("content", "#004C54");
	document.cookie = cookieName + "= midnight;" + cookiePath + "max-age=31536000;samesite=strict";
}

colorToggle.addEventListener('click', () => {
	if (!document.body.classList.contains('midnight-green')) {
		enableMidnightGreen();
	} else {
		enableKellyGreen();
	}
});