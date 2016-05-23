<?php

require_once 'tokens.php';
require_once 'comentarios.php';
require_once 'matrizes.php';
require_once 'tokens.php';

class Analise {

	var $tokens = null;
	var $pilha = array();
	var $matriz = array();
	var $regraMatriz = array();

	function Analise() {

		//Cria instancias
		$this->tokens = new Tokens();
		$matrizes = new Matrizes;
		$this->matriz = $matrizes->matriz;
		$this->regraMatriz = $matrizes->regraMatriz;

		//Resgata conteúdo do textarea
		$codigoFonte = $_GET["codigo-fonte"];

		//Remove comentários de linha e de bloco
		$codigoFonte = Comentarios::Remove($codigoFonte);

		//Cria um array das linhas adicionadas no textarea (separando por quebra de linha)
		$linhasCodigoFonte = explode("\n", $codigoFonte);

		$arrayTokens = array();
		//Laço para percorrer cada linha do textarea
		for ($i=0; $i < sizeof($linhasCodigoFonte); $i++) {
			//Resgata objeto tokens da linha atual
			$arrayTokensLinha = $this->tokens->getArrayCodigoToken($linhasCodigoFonte[$i]);
			if (is_array($arrayTokensLinha)){
				$arrayTokens = array_merge($arrayTokens, $arrayTokensLinha);
			}
		}

		//Adiciona token final de arquivo no array
		array_push($arrayTokens, $this->tokens->getTokenFimArquivo());

		//Adiciona itens de entrada na pilha
		array_push($this->pilha, '51');
		array_push($this->pilha, '53');

		$this->montaListaAnalise($arrayTokens);
	}


	function analiseSintatica($simboloEntrada, $pilha) {

		$tokens = new Tokens();

		$x = (string)end($pilha);
		$a = (string)$simboloEntrada->codigo;

		do {

			echo 'analisando ' . $x . ' - ' . $a . "<br>";

			if ($x == '') {
				array_pop($pilha);
				$x = end($pilha);
			} else if ($tokens->isSimboloTerminal($x)) {

				echo 'terminal '.$x . ' - ' . $a . "<br>";
				if ($x == $a) {
					array_pop($pilha);
					return $pilha;
				} else {
					return false;
				}
			} else {
				echo 'não terminal '.$x . ' - ' . $a . "<br>";
				$valorMatriz = $this->matriz[$x][$a];
				echo "valor regra: ".$valorMatriz;
				if ($valorMatriz != null) {
					array_pop($pilha);
					$regra = $this->regraMatriz[$valorMatriz];
					echo "regra <br><pre>";print_r($regra);
					$pilha = array_merge($regra, $pilha);
					$pilha = array_reverse($pilha);
					$x = end($pilha);
				} else {
					return false;
				}	
			}

		} while ($x != '51'); //pilha vazia, final arquivo

		return $pilha;
	}

// Início
//     X recebe o topo da pilha
//     “a”  recebe o símbolo da entrada
// Repita
//     Se X=î então
//         Retire o elemento do topo da pilha
//         X recebe o topo da pilha
//     Senão
//     Se X é terminal então
//         Se X=a então
//            Retire o elemento do topo da pilha
//            Sai do Repita
//         Senão
//                Erro
//            Encerra o programa
//        Fim Se
//     Senão (* X é não-terminal*)
//         Se M(X,a) <>   então (existe uma regra | simbolo estranho é null)
//              Retire o elemento do topo da pilha
//                         Coloque o conteúdo da regra na pilha
//              X recebe o topo da pilha
//         Senão
//             Erro
//             Encerra o programa
//         Fim Se
//     Fim Se
// Até X=$ (*pilha vazia, análise concluída*)
// Fim

	function montaListaAnalise($arrayTokens) {
		echo "<div class=\"panel panel-default\">";
		echo "<div class=\"panel-heading\"><b>Analise léxica</b></div>";
		echo "<table class=\"table\">";
		echo "	<thead>";
		echo "		<tr>";
		echo "			<th>Linha</th>";
		echo "			<th>Código</th>";
		echo "			<th>Token</th>";
		echo "			<th>Texto</th>";
		echo "		</tr>";
		echo "	</thead>";
		echo "	<tbody>";
		
		foreach ($arrayTokens as $key => $token) {
    		echo "<tr>";
				echo "<td> " . ($i+1) . " </td>"; //
				echo "<td> " . $token->codigo . " </td>";
				echo "<td> " . $token->name . " </td>";
				echo "<td> " . $token->texto . " </td>";
			echo "</tr>";
			
			$aSintatica = $this->analiseSintatica($token, $this->pilha);
			if ($aSintatica) {
				$this->pilha = $aSintatica;
			} else {
				$mensagemErro = "Um erro foi encontrado na linha: ".($i+1)." Token: ". $token->name;
				echo "<script>alert('".$mensagemErro."');</script>";
				break;
			}
		}

		echo "<pre>pilha<br>";print_r($pilha);
		
		echo "	</tbody>";
		echo "</table>";
		echo "</div>";
	}

}
