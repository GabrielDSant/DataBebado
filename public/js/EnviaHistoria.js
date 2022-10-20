function PostHistoria(url, body) {
    let request = new XMLHttpRequest()
    request.open("POST", url, true)
    request.setRequestHeader("Content-type","application/json", "Access-Control-Allow-Origin", "*", "Accept", "application/json")
    request.send(JSON.stringify(body));
    request.onload = function() {
        console.log(this.responseText)
    }
}

function ColetaInputs() {
    const url= "http://databebado.test/Historia/Enviar"
    let NomeValue = document.getElementById('NomeInput').value
    let TituloValue = document.getElementById('TituloInput').value
    let HistoriaValue = document.getElementById('HistoriaInput').value
    let CidadeValue = document.getElementById('CidadeInput').value
    
    body2 = {
        "Nome": NomeValue,
        "Titulo": TituloValue,
        "TextoHistoria": HistoriaValue,
        "Cidade": CidadeValue
    }

    PostHistoria(url, body2)
}