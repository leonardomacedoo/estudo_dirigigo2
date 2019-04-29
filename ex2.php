<?php

echo "Informe um número: ";
$numero = (int) fgets(STDIN);

if ($numero > 0) {

    echo "O valor informado é positivo. \n";

}

if ($numero == 0) {

    print "O valor informado é neutro. \n";

}

if ($numero < 0) {

    print "O valor informado é negativo. \n";

}
