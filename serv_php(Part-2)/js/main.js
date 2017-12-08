$( document ).ready(function() {
// $('#anchor-tag').lightGallery();
	$(".button-collapse").sideNav();


	// select
	 $('select').material_select();

	lightGallery(document.getElementById('lightgallery'));
});

function hint(){
	$('.tap-target').tapTarget('open');
};