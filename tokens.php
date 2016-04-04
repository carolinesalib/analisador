<?php

require_once 'token.php';

class Tokens
{

	function getTokens() {

		$token = new Token();
		$token->name = 'a';
		$token->codigo = '1';

		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'b';
		$token->codigo = '2';

		$arrayTokens[] = $token;

		return $arrayTokens;
	}
}

?>