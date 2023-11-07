function indice(){

    var peso = parseInt(document.getElementById('peso').value);
    var altura = parseInt(document.getElementById('altura').value);
    imc = peso*altura;
    document.getElementById("resultado").value = imc;

}