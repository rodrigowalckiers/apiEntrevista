<?php

	$host = "localhost:3308"; //Host para conexão com o banco de dados, ex: localhost
	$db  = "db_veiculos"; //Nome do banco de dados
	$porta = "3308"; //Porta de acesso, caso não exista deixe o campo vazio
	$user = "root"; //Usuário do banco
	$pass = "TBS@5555"; //Senha do banco


	//Conexão com o banco
	$con = new PDO('mysql: host='.$host.'; port='.$porta.'; dbname='.$db.';',$user,$pass);

?>