document.addEventListener( 'DOMContentLoaded', function () {
var deviceWidth = $(window).width();
new Splide( '.splide', {
			perPage: 8
			}).mount();

if(deviceWidth < 780){
new Splide( '.splide', {
			perPage: 4
			}).mount();
		}
	});

$('.day').click(function() {
	$('.day').css('background-color', '#fff').css('color','#000');;
	$(this).css('background-color', '#ff780b').css('color','#fff');
})