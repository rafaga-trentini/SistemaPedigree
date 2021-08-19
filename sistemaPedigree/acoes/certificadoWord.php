<?php

$arquivoWord = 'Certificado.doc';

$arquivoXls = 'Certificado.xls';

//incluindo o arquivo do fpdf
require_once "../connect/Conexao.php";


$nome = $_GET["nome"];
$raca = $_GET["raca"];
$cor = $_GET["cor"];
$sexo = $_GET["sexo"];
$pais = $_GET["pais"];
$dataNascimento = $_GET["dataNascimento"];
$tipo = $_GET["tipo"];

$pdo = Conexao::getInstance();
$html = '';

if ($tipo == 'word') {
	certificado($pdo, $arquivoWord, $html, $nome, $sexo, $raca, $cor, $dataNascimento, $pais, $tipo);
} else {
	certificado($pdo, $arquivoXls, $html, $nome, $sexo, $raca, $cor, $dataNascimento, $pais, $tipo);
}

function certificado($pdo, $arquivo, $html, $nome, $sexo, $raca, $cor, $dataNascimento, $pais, $tipo) {
	$html .= '<table style="width: 100%; height: 100%;">';
    $html .= '<tr><td colspan="2"><h1 style="text-align: center; position: relative; left: 50px;">Certificado Pedigree</h1></td></tr>';
    $html .= "<tr><td>Nome: $nome</td><td>Sexo: $sexo</td></tr>";
    $html .= "<tr><td>Raca: $raca</td><td>Cor: $cor</td></tr>";
    $html .= "<tr><td>Data Nascimento: $dataNascimento</td><td>Pais Origem: $pais</td></tr>";
    $html .= '</table>';

	if ($tipo == 'word') {
		finalizaWord($arquivo, $html);
	} else {
		finalizaXls($arquivo, $html);
	}
	
}

function finalizaWord($arquivoWord, $html){
	header ("Expires: Sat, 25 Dec 2021 23:00:00 GMT");
	header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
	header ("Cache-Control: no-cache, must-revalidate");
	header ("Pragma: no-cache");
	header("Content-type: application/vnd.ms-word");
	header ("Content-Disposition: attachment; filename=\"{$arquivoWord}\"" );
	header ("Content-Description: PHP Generated Data" );
	echo $html;
	exit;
}

function finalizaXls($arquivoXls, $html){
	header ("Expires: Sat, 25 Dec 2021 23:00:00 GMT");
	header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
	header ("Cache-Control: no-cache, must-revalidate");
	header ("Pragma: no-cache");
	header("Content-type: application/x-msexcel");
	header ("Content-Disposition: attachment; filename=\"{$arquivoXls}\"" );
	header ("Content-Description: PHP Generated Data" );
	echo $html;
	exit;
}

?>