<?php
use \GUMP as GUMP;
require_once './vendor/autoload.php';


$dadosForm = [
	'nome' 	=> 'Ca Ferreira'
];

$regras = [
	'nome' 	=>	'required|max_len,100|min_len,3',
	'email' => 	'required|max_len,150|valid_email'
];

$is_valid = GUMP::is_valid($dadosForm, $regras);

if($is_valid === true) {
	echo 'Cadastrar os dados, correto!';
} else {
	print_r($is_valid);
}