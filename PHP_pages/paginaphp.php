<?php
    echo "<h1>Ola Mundo!</h1>";     #da pra usar tags tbm
    $nome = "Pedru";    #apresentar a variavel
    echo $nome."<br>";       #mostrar a variavel
    $idade = 17;
    echo $idade."<br>";
    $nome .= $idade;    #juntar as variaveis
    echo $nome."<br>";

    $valor1 = 33;
    $valor2 = 11;
    echo $valor2 + $valor1."<br>";    #calculos com variaveis  

    if($valor2<$valor1)     #condicoes de escolha
        echo"verdade";
    else
        echo"falso";
    echo "<br>";        #espacar as variaveis

    $nome2 = "Pedro Bn";
    var_dump($nome2,$valor2);       #mostra informacoes da variavel(1 ou +), usar par teste APENAS

    $valor3 = [6,8.7,True,"pao"];       #criar lista, por so [] ela fica vazia
    echo "<br>";   
    $valor3[] = 0;      #joga o valor no proximo indice 
    $valor3[1] = 13.9;      #adciona ou substitui na lista o valor no indice 1
    var_dump($valor3);
    echo $valor3[1]."<br>";     #mostra o valor do indice
    echo "<br>";

    $valor4 = ['nome'=>"Chico",'fone'=>76990542355,'nascimento'=>"15/02/2001"];     #outro tipo de lista, como uma agenda
    var_dump($valor4);
    echo "<br>";
    echo $valor4['nascimento']."<br>"; 
    echo "O referente ".$valor4['nome']." de contato ".$valor4['fone']." nasceu em ".$valor4['nascimento'];     #o (.) serve com f formatado do python

    echo "<h3>Recebendo POST</h3>";
    var_dump($_POST);       #chamando o metodo usado no formulario html
    echo "<br>";
    echo $_POST['cpf']."<br>";      #mostra o valor do indice
    $genero = $_POST['sexo'];       #salvando os valores em variaveis
    $lazer = $_POST['lazer'];
    $fone = $_POST['telefone'];
    $login = $_POST['email'];
    echo" <table border = '1px' callpadding = '5px'> 
             <thead>
                <tr>
                    <th>Login</th>
                    <th>Genero</th>
                    <th>Lazer</th>
                    <th>Fone</th>
                </tr>
             </thead>
             <tbody>
                <tr>
                    <td>$login</td>
                    <td>$genero</td>
                    <td>$lazer</td>
                    <td>$fone</td>
                </tr>
             </body>
          </table>"   #criando uma tabela
?>
 <table border = '1px' callpadding = '5px'> 
    <thead>
        <tr>
            <th>Login</th>
            <th>Genero</th>
            <th>Lazer</th>
            <th>Fone</th>
        </tr>
     </thead>
    <tbody>
        <tr>
            <td><?php echo $login ?></td>
            <td><?php echo $genero ?></td>
            <td><?php echo $lazer ?></td>
            <td><?php echo $fone ?></td>
        </tr>
    </tbody>
</table>   <!-- outra forma de criar uma tabela -->