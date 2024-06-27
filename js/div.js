//chiamo la funzione solo quando il DOM è inizializzato
document.addEventListener("DOMContentLoaded", manager);

function manager(){
	//aggancio le funzioni alla pressione dei pulsanti
	document.getElementById("btnRosso").addEventListener("click", aggiungiRosso);
	document.getElementById("btnVerde").addEventListener("click", aggiungiVerde);
	document.getElementById("btnBlu").addEventListener("click", aggiungiBlu);

	let miei_div = document.getElementsByClassName("da-colorare");

	function aggiungiRosso(){
		rimuoviClassi();
		for (i = 0; i < miei_div.length; i++){
			miei_div[i].classList.add("bg-rosso");
		}
	}

	function aggiungiVerde(){
		rimuoviClassi();
		for (i = 0; i < miei_div.length; i++){
			miei_div[i].classList.add("bg-verde");
		}
	}

	function aggiungiBlu(){
		rimuoviClassi();
		for (i = 0; i < miei_div.length; i++){
			miei_div[i].classList.add("bg-blu");
		}
	}

	function rimuoviClassi(){
		for (i = 0; i < miei_div.length; i++){
			miei_div[i].classList.remove("bg-rosso");
			miei_div[i].classList.remove("bg-verde");
			miei_div[i].classList.remove("bg-blu");
		}
	}
}

