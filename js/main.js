$( document ).ready(function(){
//animation scroll  si sticky menu ajouter -110
$(".scroll").click(function(event){
	event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top-110},900
		);

});


      $('.parallax').parallax();


$(".button-collapse").sideNav();

	// Instantiate MixItUp:

	$('#Container').mixItUp();

	    $('.modal-trigger').leanModal();

});