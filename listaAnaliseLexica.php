<?php

require_once 'tokens.php';

$tokens = new Tokens();

echo "<pre>"; print_r($tokens->getTokens());

?>

<div class="panel panel-default">
<div class="panel-heading">Analise léxica</div>
<table class="table">
	<thead>
		<tr>
			<th>Linha</th>
			<th>Código</th>
			<th>Token</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				1
			</td>
			<td>
				2
			</td>
			<td>
				a
			</td>
		</tr>
	</tbody>
</table>
</div>