<?php

class Comentarios
{
	//	Comentário linha: //
	//	Comentário bloco: /* texto comentario */

	static function Remove($codigoFonte)
	{
		//Varre todos os caracteres procurando por tag de comentário
		for ($i=0; $i < strlen($codigoFonte); $i++) {

			//Se for comentário de linha, elimina a linha
			if (substr($codigoFonte, $i, 2) == "//") {
				$posicaoTag = strpos($codigoFonte, "//");
				$stringDepoisTag = substr($codigoFonte, $posicaoTag);
     			$posicaoQuebraLinha = stripos($stringDepoisTag, "\n");
     			$stringComentarioLinha = substr($stringDepoisTag, 0, $posicaoQuebraLinha);

				$codigoFonte = str_replace($stringComentarioLinha, "", $codigoFonte);

				Comentarios::Remove($codigoFonte);
			} else
			//Se for comentário de bloco, elimina o bloco
			if (substr($codigoFonte, $i, 2) == "/*") {
				$posicaoTag = strpos($codigoFonte, "/*");
				$posicaoFinalTag = strpos($codigoFonte, "*/")+2;
     			$stringComentarioLinha = substr($codigoFonte, $posicaoTag, $posicaoFinalTag);

				$codigoFonte = str_replace($stringComentarioLinha, "", $codigoFonte);

				Comentarios::Remove($codigoFonte);
			}
		}
		return $codigoFonte;
	}
}
?>