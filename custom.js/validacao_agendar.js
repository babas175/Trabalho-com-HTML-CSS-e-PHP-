var form = document.getElementById("form-agenda");

if (form.addEventListener) {                   
    form.addEventListener("submit", validaCadastro);
} else if (form.attachEvent) {                  
    form.attachEvent("onsubmit", validaCadastro);
}

function validaCadastro(evt){
	var nome = document.getElementById('nome');
	var bloco = document.getElementById('bloco');
    var apartamento= document.getElementById('apartamento');
	var tipo_de_mudancas = document.getElementById('tipo_de_mudancas');
    var data_escolhida= document.getElementById('data_escolhida');
    var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	
	var contErro = 0;



	caixa_nome = document.querySelector('.msg-nome');
	if(nome.value == ""){
		caixa_nome.innerHTML = "Por favor preencher o seu nome";
		caixa_nome.style.display = 'block';
		contErro += 1;
	}else{
		caixa_nome.style.display = 'none';
	}

	caixa_bloco = document.querySelector('.msg-bloco');
	if(bloco.value == ""){
		caixa_bloco.innerHTML = "Por favor preencher o seu bloco";
		caixa_bloco.style.display = 'block';
		contErro += 1;
	}else{
		caixa_bloco.style.display = 'none';
	}

	caixa_apartamento = document.querySelector('.msg-apartamento');
	if(apartamento.value == ""){
		caixa_apartamento.innerHTML = "Por favor preencher o seu apartamento";
		caixa_apartamento.style.display = 'block';
		contErro += 1;
	}else{
		caixa_apartamento.style.display = 'none';
	}

    caixa_tipo_de_mudancas = document.querySelector('.msg-tipo_de_mudancas');
	if(tipo_de_mudancas.value == ""){
		caixa_tipo_de_mudancas.innerHTML = "Por favor preencher qual tipo de mudanças";
		caixa_tipo_de_mudancas.style.display = 'block';
		contErro += 1;
	}else{
		caixa_tipo_de_mudancas.style.display = 'none';
	}

    caixa_data_escolhida = document.querySelector('.msg-data_escolhida');
	if(data_escolhida.value == ""){
		caixa_data_escolhida.innerHTML = "Por favor preencher a data escolhida";
		caixa_data_escolhida.style.display = 'block';
		contErro += 1;
	}else{
		caixa_data_escolhida.style.display = 'none';
	}

    


    if(contErro > 0){
		evt.preventDefault();
	}
}