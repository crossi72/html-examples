document.addEventListener("DOMContentLoaded", test);

function test(){
	document.getElementById("test").addEventListener("click", change_me);

	function change_me(event){
		event.target.classList.add("test");
	}
}