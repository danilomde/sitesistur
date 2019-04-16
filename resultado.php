<?php
	date_default_timezone_set('America/Sao_Paulo');
	session_start();

	@$id             =      "";
	@$nota           =      0;
	@$n_acerto       =      0;
	@$n_erro         =      0;
	@$data           =     date('Y-m-d');
	@$hora_inicio    =     $_SESSION['hora_inicio'];
	@$hora_final     =     date('H:i:s');


	@$op1      =   $_POST["pgt1"];
	@$op2      =   $_POST["pgt2"];
	@$op3      =   $_POST["pgt3"];
	@$op4      =   $_POST["pgt4"];
	@$op5      =   $_POST["pgt5"];
	@$op6      =   $_POST["pgt6"];
	@$op7      =   $_POST["pgt7"];
	@$op8      =   $_POST["pgt8"];
	@$op9      =   $_POST["pgt9"];
	@$op10     =   $_POST["pgt10"];
	
	

	if ($op1 == "option3") {
		$nota = $nota + 1;
		$n_acerto = $n_acerto + 1;
	}else{
		$n_erro = $n_erro + 1;
	}
	if ($op2 == "option3") {
		$nota = $nota + 1;
		$n_acerto = $n_acerto + 1;
	}else{
		$n_erro = $n_erro + 1;
	}
	if ($op3 == "option3") {
		$nota = $nota + 1;
		$n_acerto = $n_acerto + 1;
	}else{
		$n_erro = $n_erro + 1;
	}
	if ($op4 == "option3") {
		$nota = $nota + 1;
		$n_acerto = $n_acerto + 1;
	}else{
		$n_erro = $n_erro + 1;
	}
	if ($op5 == "option3") {
		$nota = $nota + 1;
		$n_acerto = $n_acerto + 1;
	}else{
		$n_erro = $n_erro + 1;
	}
	if ($op6 == "option3") {
		$nota = $nota + 1;
		$n_acerto = $n_acerto + 1;
	}else{
		$n_erro = $n_erro + 1;
	}
	if ($op7 == "option3") {
		$nota = $nota + 1;
		$n_acerto = $n_acerto + 1;
	}else{
		$n_erro = $n_erro + 1;
	}
	if ($op8 == "option1") {
		$nota = $nota + 1;
		$n_acerto = $n_acerto + 1;
	}else{
		$n_erro = $n_erro + 1;
	}
	if ($op9 == "option2") {
		$nota = $nota + 1;
		$n_acerto = $n_acerto + 1;
	}else{
		$n_erro = $n_erro + 1;
	}
	if ($op10 == "option3") {
		$nota = $nota + 1;
		$n_acerto = $n_acerto + 1;
	}else{
		$n_erro = $n_erro + 1;
	}

	echo "INSTRUÇÕES<br \><br \>";
	echo "a =    option1 <br \>";
	echo "b =    option2<br \>";
	echo "c =    option3<br \>";
	echo "d =    option4<br \>";
	echo "e =    option5<br \><br \><br \><br \>";


	echo "Questão 1:    ".$op1."<br \>";
	echo "Questão 2:    ".$op2."<br \>";
	echo "Questão 3:    ".$op3."<br \>";
	echo "Questão 4:    ".$op4."<br \>";
	echo "Questão 5:    ".$op5."<br \>";
	echo "Questão 6:    ".$op6."<br \>";
	echo "Questão 7:    ".$op7."<br \>";
	echo "Questão 8:    ".$op8."<br \>";
	echo "Questão 9:    ".$op9."<br \>";
	echo "Questão 10:   ".$op10."<br \><br \><br \>";


	echo "Você tirou: ".$nota."<br \>";
	echo "Acertou: ".$n_acerto."<br \>";
	echo "Errou: ".$n_erro."<br \><br \>";


	echo "Data: ".$data."<br \>";
	echo "Hora de inicio: ".$hora_inicio."<br \>";
	echo "Hora final: ".$hora_final."<br \>";


	//INSERINDO VALORES

	include "conexao.php";
	$sql = "INSERT INTO tb_nota VALUE (?, ?, ?, ?, ?, ?, ?)";
	$x = $var -> prepare($sql);
	$x -> execute(array($id, $nota, $n_acerto, $n_erro, $data, $hora_inicio, $hora_final));
	$x = null;

	
	//FINALIZANDO SESSAO DA HORA

	session_destroy();
	
?>