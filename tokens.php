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
		return $arrayTokens;
	}
}

?>