<?php

//var_dump($pacote);

$album = [];
$pacotesComprados = 0;


    while (count($album) < 1000) {

        $pacote = [];
        //Gera o pacote
        for ($i = 1; $i <= 10; $i++) {
            $num = mt_rand(1, 1000);
            $pacote[] = $num;
        }
        // cola figurinhas sem repetir
        foreach($pacote as $num) {
            if (!array_key_exists($num, $album)) {
            $album[$num] = true;
            }
    }
$pacotesComprados++;

}



//var_dump($album);

echo "Pacotes comprados: " . $pacotesComprados . PHP_EOL;
echo "Total no álbum: " . count($album) . PHP_EOL;


