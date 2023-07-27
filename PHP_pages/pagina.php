<?php
    echo"<h1>Olá Mundo!</h1>"; #da pra usar tags tbm
    $nome = "Pedru";   #apresentar a variavel
    echo "$nome<br>";   #mostrar a variavel
    $idade = 17;
    echo "$idade<br>";
    $nome .= $idade;  #juntar as variaveis
    echo "$nome<br>";
    $valor1 = 33;
    $valor2 = 11;
    echo $valor2 + $valor1; #calculos com variaveis
    echo"<br>"; 
    if($valor2<$valor1)  #condicoes de escolha
        echo"verdade";
    else
        echo"falso";
    echo"<br>"; #espaxar as variaveis
?>