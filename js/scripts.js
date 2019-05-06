function redirecionando() {
    

    // var telefone = '5541999852493';
    // var msg = 'Olá! Passei nos requisitos para participar do programa Intertour.';

    // window.open('https://api.whatsapp.com/send?phone='+telefone+'&text='+msg);

	
}

function validar() {
		var nome = formTeste.nome.value;
		var celular = formTeste.celular.value;
		var telefone = '5541999852493';
		var msg = 'Olá, meu nome é '+nome+'! Eu Passei nos requisitos mínimos para participar do programa Intertour, como devo proceder agora?';

		

		if (nome == "") {
			document.getElementById("erro_nome").innerHTML = "<span class='textError'>Preencha com um nome!</span>";
			formTeste.nome.focus();
			return false;
		}else
			if (celular == "") {
				document.getElementById("erro_celular").innerHTML = "<span class='textError'>Preencha com um celular!</span>";
				formTeste.nome.focus();
				return false;
			}else{
				alert("Parabéns "+nome+"!!! Você atingiu os requisitos mínimos para participar do programa.");

   				window.open('https://api.whatsapp.com/send?phone='+telefone+'&text='+msg);
			}

	}