<!--
Início
	X recebe o topo da pilha
	“a”  recebe o símbolo da entrada
Repita
    Se X=î então
		Retire o elemento do topo da pilha
		X recebe o topo da pilha
	Senão
	Se X é terminal então
		Se X=a então
		   Retire o elemento do topo da pilha
		   Sai do Repita
		Senão
               Erro
		   Encerra o programa
       Fim Se
	Senão (* X é não-terminal*)
		Se M(X,a) <>   então (existe uma regra | simbolo estranho é null)
			 Retire o elemento do topo da pilha
                        Coloque o conteúdo da regra na pilha
			 X recebe o topo da pilha
		Senão
			Erro
			Encerra o programa
		Fim Se
	Fim Se
Até X=$ (*pilha vazia, análise concluída*)
Fim
-->

<?php

$listaTokens = $_SESSION["array_tokens"];

?>

<div class="panel panel-default">
<div class="panel-heading"><b>Erros</b></div>
<table class="table">
	<thead>
		<tr>
			<th>
				Linha
			</th>
			<th>
				Erro
			</th>
		</tr>
	</thead>
	<tbody>
		<tr class="danger">
			<td>
				1
			</td>
			<td>
				erros
			</td>
		</tr>
	</tbody>
</table>
</div>