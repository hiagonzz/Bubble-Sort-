<<?php
$arr = [1, 5, 3, 0];

$qtd = count($arr);

for ($i = 0; $i < $qtd - 1; $i++) {
    for ($posicaoAtual = 0; $posicaoAtual < $qtd - $i - 1; $posicaoAtual++) {

        $proximaPosicao = $posicaoAtual + 1;

        if ($arr[$proximaPosicao] < $arr[$posicaoAtual]) {
            $auxiliar = $arr[$posicaoAtual];
            $arr[$posicaoAtual] = $arr[$proximaPosicao];
            $arr[$proximaPosicao] = $auxiliar;
        }
    }
}
print_r($arr) . "\n";

?>>