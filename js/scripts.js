// Side nav bar for mobile
function openNav() {
	document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
}
// Initialise slick
$(document).ready(function() {
	$('.single-item').slick({
		dots: true,
		infinite: true,
		speed: 500,
		slidesToShow: 1,
		fade: true,
		cssEase: 'linear',
		adaptiveHeight: true
	});
});
