var form = document.getElementById("form_login_adm");

if (form.addEventListener) {                   
    form.addEventListener("submit", validaCadastro);
} else if (form.attachEvent) {                  
    form.attachEvent("onsubmit", validaCadastro);
}

function validaCadastro(evt){
	var id = document.getElementById('id');
	var senha = document.getElementById('senha');
	
	var contErro = 0;



	caixa_id = document.querySelector('.msg-id');
	if(id.value == ""){
		caixa_id.innerHTML = "Por favor preencher o seu Id administrador";
		caixa_id.style.display = 'block';
		contErro += 1;
	}else{
		caixa_id.style.display = 'none';
	}

	caixa_senha = document.querySelector('.msg-senha');
	if(senha.value == ""){
		caixa_senha.innerHTML = "Por favor preencher a sua senha";
		caixa_senha.style.display = 'block';
		contErro += 1;
	}else{
		caixa_senha.style.display = 'none';
	}


    if(contErro > 0){
		evt.preventDefault();
	}
}