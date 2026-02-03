<?php
$pacote = [];
//Gera o pacote
for ($i = 1; $i <= 10; $i++) {
    $num = mt_rand(1, 1000);
    $pacote[] = $num;
}

//var_dump($pacote);

$album = [];

//Cola as figurinhas sem repetir
foreach($pacote as $num) {

    if (!array_key_exists($num, $album)) {
        $album[$num] = true;
    }

}

//var_dump($album);

echo "Total no pacote: " . count($pacote) . PHP_EOL;
echo "Total no álbum: " . count($album) . PHP_EOL;


