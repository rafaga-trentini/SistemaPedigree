<?php
	date_default_timezone_set('America/Sao_Paulo');
	$url = "127.0.0.1";
	$dbname="sistemaPedigre";
	$usuario="root";
	$password="Talisma-123";
	
	$tb_usuario = "usuario";
	$tb_endereco = "endereco";
	$tb_cachorro = "cachorro";
	$tb_certificado = "certificado";

	define('HOST', 'localhost');  
    define('DBNAME', $dbname);    
    define('USER', $usuario);  
    define('PASSWORD', $password);


    
    define('DRIVER', 'mysql'); 
    define('CHARSET', 'utf8');

    define('NOME_DO_PROJETO','sistemaPedigre');
    define('DESCRICAO_DO_PROJETO','sistema que gera pedigree');
?>
