<?php

// Incluindo arquivo de autoload gerado pelo Composer
require 'vendor/autoload.php';

// Importando biblioteca para o arquivo
use Stringy\Stringy;

// Utilizando uma função da biblioteca para criar um slug a partir de uma string
// Retorno: uma-breve-introducao-ao-composer
echo Stringy::create('Uma breve introdução ao Composer')->slugify();
