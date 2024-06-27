$(function () {
	$("#rosso").on("click", addRed);
	$("#giallo").on("click", addYellow);
	$("#alterna").on("click", alternate);
});

function addRed() {
	var myElements = document.getElementsByClassName('testClass');

	for ($i = 0; $i < myElements.length; $i++){
		$(myElements[$i]).removeClass('giallo');
		$(myElements[$i]).addClass('rosso');
	}
}

function addYellow() {
	var myElements = document.getElementsByClassName('testClass');

	for ($i = 0; $i < myElements.length; $i++){
		$(myElements[$i]).removeClass('rosso');
		$(myElements[$i]).addClass('giallo');
	}
}

function alternate() {
	var myElements = document.getElementsByClassName('testClass');

	for ($i = 0; $i < myElements.length; $i+=2){
		$(myElements[$i]).removeClass('rosso');
		$(myElements[$i]).addClass('giallo');
	}
	for ($i = 1; $i < myElements.length; $i+=2){
		$(myElements[$i]).addClass('rosso');
		$(myElements[$i]).removeClass('giallo');
	}
}