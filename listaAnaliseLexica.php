<?php

require_once 'tokens.php';

$tokens = new Tokens();

$codigoFonte = $_GET["codigo-fonte"];
$linhasCodigoFonte = explode("\n", $codigoFonte);

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
		</tr>
	</thead>
	<tbody>
		<?php
		for ($i=0; $i < sizeof($linhasCodigoFonte); $i++) {

			//Se não existir código-fonte não monta tabela
			// if ($codigoFonte == "") continue;

			$arrayTokensLinha = $tokens->getArrayCodigoToken($linhasCodigoFonte[$i]);

			// for ($y=0; $y < sizeof($arrayTokensLinha); $y++) {
			foreach ($arrayTokensLinha as $key => $token) {
				# code...


				echo "<tr>";
					echo "<td> " . ($i+1) . " </td>"; //
					echo "<td> " . $token->codigo . " </td>";
					echo "<td> " . $token->name . " </td>";
				echo "</tr>";
			// }
			}
		}
		?>
	</tbody>
</table>
</div>