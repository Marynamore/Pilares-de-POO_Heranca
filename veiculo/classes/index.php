<?php

    echo "<meta charset='utf-8'>";

    require_once "classes/Veiculos.php";
    require_once "classes/Carro.php";
    require_once "classes/Moto.php";
    require_once "classes/Bicicleta.php";

    $carro = new Carro('Carro', 'Gol', 5);
    $moto = new Moto('Moto', 'Café Racer', 2);
    $bicicleta = new Bicicleta('Bicicleta', 'Eletrica', 1);

    echo "O veiculo {$carro->getNome()} / {$carro->getModelo()}<br>";
    echo "Suporta {$carro->getPassageiros()} passageiros.<br>";
    $carro->acelerar();
    echo "<br>";
    echo "O veiculo {$moto->getNome()} / {$moto->getModelo()}<br>";
    echo "Suporta {$moto->getPassageiros()} passageiros.<br>";
    $moto->empinar();
    echo "<br>";
    echo "O veiculo {$bicicleta->getNome()} / {$bicicleta->getModelo()}<br>";
    echo "Suporta {$bicicleta->getPassageiros()} passageiros.<br>";
    $bicicleta->pedalar();

?>