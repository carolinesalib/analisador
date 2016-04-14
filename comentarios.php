<?php

class Comentarios
{
	//	Comentário linha: //
	//	Comentário bloco: /* texto comentario */

	static function Remove($codigoFonte)
	{
		$codigoFonte = Comentarios::RemoveLinha($codigoFonte);
		$codigoFonte = Comentarios::RemoveBloco($codigoFonte);

		return $codigoFonte;
	}

	static function RemoveLinha($codigoFonte) {

		for ($i=0; $i < strlen($codigoFonte); $i++) {
			if (($i+2)> strlen($codigoFonte)) break;

			if (substr($codigoFonte, $i, 2) == "//") {
				$posicaoTag = strpos($codigoFonte, "//");
				$stringDepoisTag = substr($codigoFonte, $posicaoTag);
     			$posicaoQuebraLinha = stripos($stringDepoisTag, "\n");

     			if($posicaoQuebraLinha == 0) $posicaoQuebraLinha = strlen($codigoFonte);

     			$stringComentarioLinha = substr($stringDepoisTag, 0, $posicaoQuebraLinha);

				$codigoFonte = str_replace($stringComentarioLinha, "", $codigoFonte);

				return Comentarios::RemoveLinha($codigoFonte);
			}
		}
		return $codigoFonte;
	}

	function RemoveBloco($codigoFonte) {

		for ($i=0; $i < strlen($codigoFonte); $i++) {
			if (substr($codigoFonte, $i, 2) == "/*") {
				$posicaoTag = strpos($codigoFonte, "/*");
				$stringDepoisTag = substr($codigoFonte, $posicaoTag);
				$posicaoFinalTag = strpos($stringDepoisTag, "*/")+2;
     			$stringComentarioLinha = substr($stringDepoisTag, 0, $posicaoFinalTag);

				$codigoFonte = str_replace($stringComentarioLinha, "", $codigoFonte);

				return Comentarios::RemoveBloco($codigoFonte);
			}
		}

		return $codigoFonte;
	}
}
?>