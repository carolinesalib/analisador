<?php

require_once 'token.php';

class Tokens
{

	function getTokens() {

		$token = new Token();
		$token->name = 'PROGRAM';
		$token->codigo = '1';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'LABEL';
		$token->codigo = '2';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'CONST';
		$token->codigo = '3';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'VAR';
		$token->codigo = '4';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'PROCEDURE';
		$token->codigo = '5';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'BEGIN';
		$token->codigo = '6';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'END';
		$token->codigo = '7';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'INT';
		$token->codigo = '8';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'ARRAY';
		$token->codigo = '9';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'OF';
		$token->codigo = '10';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'CALL';
		$token->codigo = '11';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'GOTO';
		$token->codigo = '12';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'IF';
		$token->codigo = '13';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'THEN';
		$token->codigo = '14';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'ELSE';
		$token->codigo = '15';
		$arrayTokens[] = $token;


		$token = new Token();
		$token->name = 'WHILE';
		$token->codigo = '16';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'DO';
		$token->codigo = '17';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'REPEAT';
		$token->codigo = '18';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'UNTIL';
		$token->codigo = '19';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'READLN';
		$token->codigo = '20';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'WRITELN';
		$token->codigo = '21';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'OR';
		$token->codigo = '22';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'AND';
		$token->codigo = '23';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'NOT';
		$token->codigo = '24';
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'IDENTIFICADOR';
		$token->codigo = '25';
		$arrayTokens[] = $token;

		return $arrayTokens;
	}
}

?>