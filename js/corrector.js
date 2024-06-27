$(function () {
	$("#submit").on("click", CheckResponse);
	
	$.ajax({
		url:"ajax.php",
		type:"POST",
	});
	
});

function CheckResponse() {
	var questions = document.getElementsByName('question1');

	if(questions[0].checked){
		alert(questions[0].value)
	}


	// var para = document.createElement("p");
	// var node = document.createTextNode(questions[0].value);
	// para.appendChild(node);

	// var element = document.getElementById("output");
	// element.appendChild(para);

}
