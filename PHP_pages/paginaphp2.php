<?php
echo"<h1>Percorrendo Arrays</h1>";
$fruits = ["melancia","uva","morango","manga","pera","banana"];
foreach($fruits as $nfruits){       #percorrer os dados da lista
    echo"na banca tem $nfruits<br>";
};
echo"<br>";

$list = ['nome'=>"Pedro",'contato'=>86994561327,'email'=>"pbn4321@gmail.com",'idade'=>19];
foreach($list as $nlist){       #funciona com lista assim tbm
    echo"informacao -> $nlist<br>";
};
echo"<br>";

foreach($list as $indice => $nlist){      #percorrer mostrando posicao
    echo"$indice $nlist<br>";
};
echo"<br>";

foreach($fruits as $indice => $nfruits){
    if('banana' == $nfruits)      #encontrar item na lista I
    echo"$nfruits se encontra na posicao $indice da lista"; 
};
echo"<br>";

$achei = -99;
foreach($fruits as $indice => $nfruits){
    if('mamao' == $nfruits)       #encontrar item na lista II
    $achei == $indice;
};
if($achei != -99)
echo"foi encontrada na posicao $achei";
else
echo"nao foi encontrado nada";
?>