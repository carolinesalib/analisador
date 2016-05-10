<?php

include 'token.php';
include 'tipoSimbolo.php';

class Tokens
{
	function getTokens() {

		$token = new Token();
		$token->name = 'PROGRAM';
		$token->codigo = '1';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'LABEL';
		$token->codigo = '2';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'CONST';
		$token->codigo = '3';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'VAR';
		$token->codigo = '4';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'PROCEDURE';
		$token->codigo = '5';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'BEGIN';
		$token->codigo = '6';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'END';
		$token->codigo = '7';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'INT';
		$token->codigo = '8';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'ARRAY';
		$token->codigo = '9';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'OF';
		$token->codigo = '10';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'CALL';
		$token->codigo = '11';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'GOTO';
		$token->codigo = '12';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'IF';
		$token->codigo = '13';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'THEN';
		$token->codigo = '14';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'ELSE';
		$token->codigo = '15';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'WHILE';
		$token->codigo = '16';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'DO';
		$token->codigo = '17';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'REPEAT';
		$token->codigo = '18';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'UNTIL';
		$token->codigo = '19';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'READLN';
		$token->codigo = '20';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'WRITELN';
		$token->codigo = '21';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'OR';
		$token->codigo = '22';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'AND';
		$token->codigo = '23';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'NOT';
		$token->codigo = '24';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'IDENTIFICADOR';
		$token->codigo = '25';
		$token->tipoSimbolo = TipoSimbolo::IDENTIFICADOR;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'INTEGER';
		$token->codigo = '26';
		$token->tipoSimbolo = TipoSimbolo::NUMEROINTEIRO;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'FOR';
		$token->codigo = '27';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'TO';
		$token->codigo = '28';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'CASE';
		$token->codigo = '29';
		$token->tipoSimbolo = TipoSimbolo::PALAVRARESERVADA;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = '+';
		$token->codigo = '30';
		$token->tipoSimbolo = TipoSimbolo::SIMBOLOSIMPLES;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = '-';
		$token->codigo = '31';
		$token->tipoSimbolo = TipoSimbolo::SIMBOLOSIMPLES;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = '*';
		$token->codigo = '32';
		$token->tipoSimbolo = TipoSimbolo::SIMBOLOSIMPLES;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = '/';
		$token->codigo = '33';
		$token->tipoSimbolo = TipoSimbolo::SIMBOLOSIMPLES;
		$arrayTokens[] = $token;
		$token = new Token();

		$token->name = '[';
		$token->codigo = '34';
		$token->tipoSimbolo = TipoSimbolo::SIMBOLOSIMPLES;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = ']';
		$token->codigo = '35';
		$token->tipoSimbolo = TipoSimbolo::SIMBOLOSIMPLES;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = '(';
		$token->codigo = '36';
		$token->tipoSimbolo = TipoSimbolo::SIMBOLOSIMPLES;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = ')';
		$token->codigo = '37';
		$token->tipoSimbolo = TipoSimbolo::SIMBOLOSIMPLES;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = ':=';
		$token->codigo = '38';
		$token->tipoSimbolo = TipoSimbolo::SIMBOLODUPLO;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = ':';
		$token->codigo = '39';
		$token->tipoSimbolo = TipoSimbolo::SIMBOLOSIMPLES;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = '=';
		$token->codigo = '40';
		$token->tipoSimbolo = TipoSimbolo::SIMBOLOSIMPLES;
		$arrayTokens[] = $token;


		$token = new Token();
		$token->name = '>';
		$token->codigo = '41';
		$token->tipoSimbolo = TipoSimbolo::SIMBOLOSIMPLES;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = '>=';
		$token->codigo = '42';
		$token->tipoSimbolo = TipoSimbolo::SIMBOLODUPLO;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = '<';
		$token->codigo = '43';
		$token->tipoSimbolo = TipoSimbolo::SIMBOLOSIMPLES;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = '<=';
		$token->codigo = '44';
		$token->tipoSimbolo = TipoSimbolo::SIMBOLODUPLO;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = '<>';
		$token->codigo = '45';
		$token->tipoSimbolo = TipoSimbolo::SIMBOLODUPLO;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = ',';
		$token->codigo = '46';
		$token->tipoSimbolo = TipoSimbolo::SIMBOLOSIMPLES;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = ';';
		$token->codigo = '47';
		$token->tipoSimbolo = TipoSimbolo::SIMBOLOSIMPLES;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = 'LITERAL';
		$token->codigo = '48';
		$token->tipoSimbolo = TipoSimbolo::LITERAL;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = '.';
		$token->codigo = '49';
		$token->tipoSimbolo = TipoSimbolo::SIMBOLOSIMPLES;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = '..';
		$token->codigo = '50';
		$token->tipoSimbolo = TipoSimbolo::SIMBOLODUPLO;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = '$';
		$token->codigo = '51';
		$token->tipoSimbolo = TipoSimbolo::FIMARQUIVO;
		$arrayTokens[] = $token;

		$token = new Token();
		$token->name = '';
		$token->codigo = '52';
		$token->tipoSimbolo = TipoSimbolo::VAZIO;
		$arrayTokens[] = $token;

		return $arrayTokens;
	}

	//Retorna um array com a informação do código e token de cada caracter da linha
	function getArrayCodigoToken($linha) {
		$palavra = "";

		for ($i=0; $i < strlen($linha); $i++) {

			$caracter = $linha{$i};

			//Enquanto for letra ou numero, monta uma palavra
			if (preg_match("/[a-zA-Z0-9]/ ", $caracter)) {
				$palavra .= $caracter;
				continue;
			}

			if ($palavra) {
				//Se a palavra for inteiramente numérica, retorna o token de número inteiro
				if (is_numeric($palavra)) {
					$arrayCodigoToken[] = $this->findTokenNumeroInteiro($palavra);
				} else {

					//Procura token de palavra reservada
					$tokenPalavraReservada = $this->findTokenPalavraReservada($palavra);

					if ($tokenPalavraReservada) {
						$arrayCodigoToken[] = $tokenPalavraReservada;
					}  else {
						$arrayCodigoToken[] = $this->findTokenIdentificador($palavra);
					}
				}

				$palavra = "";
			}

			$tokenLiteral = $this->findTokenLiteral($caracter);

			if ($tokenLiteral) {
				$arrayCodigoToken[] = $tokenLiteral;
				continue;
			}

			
			//Vefifica se é um simbolo duplo
			$tokenSimboloDuplo = $this->findTokenSimboloDuplo(substr($linha,$i,2));

			if ($tokenSimboloDuplo) {
				$arrayCodigoToken[] = $tokenSimboloDuplo;
				$i++;
				continue;
			}

			//Verifica se é um simbolo simples
			$tokenSimboloSimples = $this->findTokenSimboloSimples($caracter);

            if ($tokenSimboloSimples) {
				$arrayCodigoToken[] = $tokenSimboloSimples;
				continue;
			}
		}
		//Verifica se é um simbolo final de arquivo
		$arrayCodigoToken[] = $this->findTokenFimArquivo();

		return $arrayCodigoToken;
	}

	function findTokenPalavraReservada($token) {
		$tokens = $this->getTokens();

		foreach ($tokens as $key => $value) {
			if ($value->tipoSimbolo == TipoSimbolo::PALAVRARESERVADA && $value->name == strtoupper($token)) {
				$value->texto = $token;
				return $value;
			}
		}

		return false;
	}

	function findTokenIdentificador($token) {
		$tokens = $this->getTokens();

		foreach ($tokens as $key => $value) {
			if ($value->tipoSimbolo == TipoSimbolo::IDENTIFICADOR) {
				$value->qtdeCaracter = strlen($token);
				$value->texto = $token;
				return $value;
			}
		}

		return false;
	}

	function findTokenLiteral($token) {
		$tokens = $this->getTokens();

		//Verifica se é token literal, chegando se inicia e termina com aspas, sejam elas simples ou duplas
		$inicioAspasSimples = (substr($token, 0, 1) == "'");
		$inicioAspasDuplas = (substr($token, 0, 1) == '"');

		$stringDepoisAspa = substr($token, 1);

		if ($inicioAspasSimples) {
			$posicaoSegundaAspa = strpos($stringDepoisAspa, "'")+1;
			$stringToken = substr($token, 0, $posicaoSegundaAspa);
		} else if ($inicioAspasDuplas) {
			$posicaoSegundaAspa = strpos($stringDepoisAspa, '"')+1;
			$stringToken = substr($token, 0, $posicaoSegundaAspa);
		} else {
			return false;
		}

		foreach ($tokens as $key => $value) {
			if ($value->tipoSimbolo == TipoSimbolo::LITERAL) {
				$value->qtdeCaracter = strlen($stringToken);

				$value->texto = $token;
				return $value;
			}
		}
	}

	function findTokenNumeroInteiro($token) {
		$tokens = $this->getTokens();

	 	foreach ($tokens as $key => $value) {
	 		if ($value->tipoSimbolo == TipoSimbolo::NUMEROINTEIRO) {

				$value->texto = $token;
	 			return $value;
	 		}
	 	}
		return false;
	}

	function findTokenFimArquivo() {
		$tokens = $this->getTokens();

		foreach ($tokens as $key => $value) {
			if ($value->tipoSimbolo == TipoSimbolo::FIMARQUIVO) {return $value;
			}
		}

		return false;
	}

	function findTokenSimboloDuplo($token) {
		$tokens = $this->getTokens();

		foreach ($tokens as $key => $value) {
			if ($value->tipoSimbolo == TipoSimbolo::SIMBOLODUPLO && $value->name == $token) {
				$value->texto = $token;
				return $value;
			}
		}

		return false;
	}

	function findTokenSimboloSimples($token) {
		$tokens = $this->getTokens();

		foreach ($tokens as $key => $value) {
			if ($value->tipoSimbolo == TipoSimbolo::SIMBOLOSIMPLES && $value->name == $token) {
				$value->texto = $token;
				return $value;
			}
		}

		return false;
	}
}

?>
