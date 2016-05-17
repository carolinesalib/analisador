<?php

require_once 'tokens.php';
require_once 'comentarios.php';

$tokens = new Tokens();

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
	$arrayTokensLinha = $tokens->getArrayCodigoToken($linhasCodigoFonte[$i]);
	if (is_array($arrayTokensLinha)){
		$arrayTokens = array_merge($arrayTokens, $arrayTokensLinha);
	}
}

//Adiciona token final de arquivo no array
array_push($arrayTokens, $tokens->getTokenFimArquivo());
?>
<br>

<div class="panel panel-default">
<div class="panel-heading"><b>Analise léxica</b></div>
<table class="table">
	<thead>
		<tr>
			<th>Linha</th>
			<th>Código</th>
			<th>Token</th>
			<th>Texto</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($arrayTokens as $key => $token) {
			echo "<tr>";
				echo "<td> " . ($i+1) . " </td>"; //
				echo "<td> " . $token->codigo . " </td>";
				echo "<td> " . $token->name . " </td>";
				echo "<td> " . $token->texto . " </td>";
			echo "</tr>";
		}
		?>
	</tbody>
</table>
</div>