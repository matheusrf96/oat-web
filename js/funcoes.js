function alterarCor(){
	var elemCor = document.getElementById("corTexto");
	var elemBody = document.getElementById("corpo");
	elemBody.setAttribute("style","color: "+elemCor.value+";");	
}