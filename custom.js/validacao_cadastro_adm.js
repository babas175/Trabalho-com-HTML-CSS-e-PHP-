var form = document.getElementById("form-cadastro");

if (form.addEventListener) {                   
    form.addEventListener("submit", validaCadastro);
} else if (form.attachEvent) {                  
    form.attachEvent("onsubmit", validaCadastro);
}

function validaCadastro(evt){
	var id = document.getElementById('id');
	var email = document.getElementById('email');
	var bloco = document.getElementById('bloco');
	var apartamento = document.getElementById('apartamento');
	var nome = document.getElementById('nome');
    var celular = document.getElementById('celular');
	var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	var contErro = 0;



	caixa_id = document.querySelector('.msg-id');
	if(id.value == ""){
		caixa_id.innerHTML = "Favor preencher o seu Id morador";
		caixa_id.style.display = 'block';
		contErro += 1;
	}else{
		caixa_id.style.display = 'none';
	}

	caixa_celular = document.querySelector('.msg-celular');
	if(celular.value == ""){
		caixa_celular.innerHTML = "Favor preencher o seu celular";
		caixa_celular.style.display = 'block';
		contErro += 1;
	}else{
		caixa_ceular.style.display = 'none';
	}

	
	caixa_bloco = document.querySelector('.msg-bloco');
	if(bloco.value == ""){
		caixa_bloco.innerHTML = "Favor preencher o bloco";
		caixa_bloco.style.display = 'block';
		contErro += 1;
	}else{
		caixa_bloco.style.display = 'none';
	}

	caixa_apartamento = document.querySelector('.msg-apartamento');
	if(apartamento.value == ""){
		caixa_apartamento.innerHTML = "Favor preencher o apartamento";
		caixa_apartamento.style.display = 'block';
		contErro += 1;
	}else{
		caixa_apartamento.style.display = 'none';
	}

	caixa_nome = document.querySelector('.msg-nome');
	if(nome.value == ""){
		caixa_nome.innerHTML = "Favor preencher o seu nome";
		caixa_nome.style.display = 'block';
		contErro += 1;
	}else{
		caixa_nome.style.display = 'none';
	}




	/* Validação do campo email */
	caixa_email = document.querySelector('.msg-email');
	if(email.value == ""){
		caixa_email.innerHTML = "Favor preencher o seu email";
		caixa_email.style.display = 'block';
		contErro += 1;
	}else if(filtro.test(email.value)){
		caixa_email.style.display = 'none';
	}else{
		caixa_email.innerHTML = "Formato do E-mail inválido";
		caixa_email.style.display = 'block';
		contErro += 1;
	}	

    if(contErro > 0){
		evt.preventDefault();
	}
}