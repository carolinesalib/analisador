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
	var $pilhaHistorico = array();
	var $tabelaSimbolos = array();

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

		//Adiciona itens de entrada na pilha
		array_push($this->pilha, '51');
		array_push($this->pilha, '53');

		$this->montaCabecalhoAnaliseLexica();

		//Laço para percorrer cada linha do textarea
		for ($i=0; $i < sizeof($linhasCodigoFonte); $i++) {

			//Resgata objeto tokens da linha atual
			$arrayTokens = $this->tokens->getArrayCodigoToken($linhasCodigoFonte[$i]);

			//Na ultima linha adiciona token fim de arquivo
			if ($i == sizeof($linhasCodigoFonte)-1) {
				array_push($arrayTokens, $this->tokens->getTokenFimArquivo());
			}

			if (is_array($arrayTokens)){
				$linha = $i+1;
				$erro = (!$this->montaListaAnalise($arrayTokens, $linha));

				if ($erro) break;
			}
		}

		$this->montaRodapeAnaliseLexica();

		$this->montaListaAnaliseSintatica();
	}

	function montaCabecalhoAnaliseLexica() {
		echo "<br><div class=\"panel panel-default\">";
		echo "<div class=\"panel-heading\"><b>Analise léxica</b></div>";
		echo "<table class=\"table table-striped table-bordered\">";
		echo "	<thead>";
		echo "		<tr>";
		echo "			<th>Linha</th>";
		echo "			<th>Código</th>";
		echo "			<th>Token</th>";
		echo "			<th>Texto</th>";
		echo "		</tr>";
		echo "	</thead>";
		echo "	<tbody>";
	}

	function montaRodapeAnaliseLexica() {
		echo "	</tbody>";
		echo "</table>";
		echo "</div>";
	}

	function montaListaAnalise($arrayTokens, $linha) {

		foreach ($arrayTokens as $key => $token) {
    		echo "<tr>";
				echo "<td> " . $linha . " </td>"; //
				echo "<td> " . $token->codigo . " </td>";
				echo "<td> " . $token->name . " </td>";
				echo "<td> " . $token->texto . " </td>";
			echo "</tr>";

			$aSintatica = $this->analiseSintatica($token, $this->pilha);
			if ($aSintatica) {
				$this->pilha = $aSintatica;
			} else {
				$mensagemErro = "Um erro de sintaxe foi encontrado na linha ".$linha.". Código: ".$token->codigo." Token: ". $token->texto;
				echo "<script>alert('".$mensagemErro."');</script>";
				return false;
			}

			$this->analiseSemantica($token, $linha);
		}
		return true;
	}

	function analiseSemantica($token, $linha) {
		if ($token->codigo != 25) return;

		$identificadorProcedure = 64;
		$identificadorVariavel = 57;

		$identificadorPilha = end($this->pilha);

		if ($identificadorPilha == $identificadorProcedure) {
			array_push($this->tabelaSimbolos, array(
				"nome"=>$token->texto,
				"categoria" => 1,
				"tipo" => "int",
				"linha" => $linha
			));
		} elseif ($identificadorPilha == $identificadorVariavel) {
			array_push($this->tabelaSimbolos, array(
				"nome"=>$token->texto,
				"categoria" => 2,
				"tipo" => "int",
				"linha" => $linha
			));
		}
	}

	function analiseSintatica($simboloEntrada, $pilha) {

		$tokens = new Tokens();

		$x = (string)end($pilha);
		$a = (string)$simboloEntrada->codigo;

		while ($x != '51') { //pilha vazia, final arquivo{
			if ($x == '52') {
				array_push($this->pilhaHistorico, array(
					"pilha"=>join(', ', $pilha),
					"inserido" => '',
					"removido" => $x,
					"x" => $x,
					"a" => $a
				));
				array_pop($pilha);
				$x = end($pilha);
			} else if ($tokens->isSimboloTerminal($x)) {
				if ($x == $a) {
					array_push($this->pilhaHistorico, array(
						"pilha"=>join(', ', $pilha),
						"inserido" => '',
						"removido" => $x,
						"x" => $x,
						"a" => $a
					));
					array_pop($pilha);
					return $pilha;
				} else {
					array_push($this->pilhaHistorico, array(
						"pilha"=>join(', ', $pilha),
						"x" => $x,
						"a" => $a
					));
					return false;
				}
			} else {
				$valorMatriz = $this->matriz[$x][$a];
				if ($valorMatriz != null) {

					array_push($this->pilhaHistorico, array(
						"pilha"=>join(', ', $pilha),
						"inserido" => '',
						"removido" => $x,
						"x" => $x,
						"a" => $a
					));

					array_pop($pilha);

					$regra = $this->regraMatriz[$valorMatriz];
					$regra = array_reverse($regra);

					array_push($this->pilhaHistorico, array(
						"pilha"=>join(', ', $pilha),
						"inserido" => join(', ', $regra),
						"regra" => $valorMatriz,
						"x" => $x,
						"a" => $a
					));

					$pilha = array_merge($pilha, $regra);
					$x = end($pilha);
				} else {
					array_push($this->pilhaHistorico, array(
						"pilha"=>join(', ', $pilha),
						"x" => $x,
						"a" => $a
					));
					return false;
				}
			}
		}

		return $pilha;
	}

	function montaCabecalhoAnaliseSintatica() {
		echo "<br><div class=\"panel panel-default\">";
		echo "<div class=\"panel-heading\"><b>Analise sintática</b></div>";
		echo "<table class=\"table table-striped table-bordered\">";
		echo "	<thead>";
		echo "		<tr>";
		echo "			<th>Pilha</th>";
		echo "			<th>Elemento inserido</th>";
		echo "			<th>Regra</th>";
		echo "			<th>Elemento removido</th>";
		echo "			<th>x</th>";
		echo "			<th>a</th>";
		echo "		</tr>";
		echo "	</thead>";
		echo "	<tbody>";
	}

	function montaRodapeAnaliseSintatica() {
		echo "	</tbody>";
		echo "</table>";
		echo "</div>";
	}


	function montaListaAnaliseSintatica() {
		$this->montaCabecalhoAnaliseSintatica();

		foreach ($this->pilhaHistorico as $key => $h) {
    		echo "<tr>";
				echo "<td> " . $h['pilha'] . " </td>";
				echo "<td> " . $h['inserido'] . " </td>";
				echo "<td> " . $h['regra'] . " </td>";
				echo "<td> " . $h['removido'] . " </td>";
				echo "<td> " . $h['x'] . " </td>";
				echo "<td> " . $h['a'] . " </td>";
			echo "</tr>";
		}

		$this->montaRodapeAnaliseSintatica();
	}

}
