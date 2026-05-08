//FUNCAO ABRIR E FECHAR BARRA DE PESQUISA.
function mostrarSearch(){
  let btn = document.getElementById("busca");
  if(btn.style.display == "none" || btn.style.display == ""){
    btn.style.display = "block";
  }else {
    btn.style.display = "none";
  }
}

