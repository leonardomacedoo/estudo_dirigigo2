<?php

echo "Digite a primeira nota do aluno: \n";
$nota1 = (int) fgets(STDIN);

echo "Digite a segunda nota do aluno: \n";
$nota2 = (int) fgets(STDIN);

$media = ($nota1 + $nota2) / 2;

if ($media == 10) {
    echo "O aluno foi aprovado com distinção. ";
}

elseif ($media >= 7) {
    echo "O aluno foi aprovado. ";
}

else  {
    echo "O aluno foi reprovado. ";
}

