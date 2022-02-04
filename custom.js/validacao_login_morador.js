var form = document.getElementById("form_login_morador");

if (form.addEventListener) {                   
    form.addEventListener("submit", validaCadastro);
} else if (form.attachEvent) {                  
    form.attachEvent("onsubmit", validaCadastro);
}

function validaCadastro(evt){
	var email = document.getElementById('email');
	var bloco = document.getElementById('bloco');
    var apartamento= document.getElementById('apartamento');
    var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	
	var contErro = 0;



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



    if(contErro > 0){
		evt.preventDefault();
	}
}