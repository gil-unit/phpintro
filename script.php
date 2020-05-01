<?php 
 

 $categorias = [];
 $categorias[] = 'Infantil';
 $categorias[] = 'Adolescente';
 $categorias[] = 'Adulto';
 $categorias[] = 'Idoso';
 //print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo 'O Nome Não Pode Ser Vazio';
    return;
}
if(strlen($nome) < 3)
{
    echo 'O Nome Deve Conter Mais de 3 Caracteres';
    return;
}
if(strlen($nome) > 40)
{
    echo 'O nome é muito extenso';
    return;
}
if(!is_numeric($idade))
{
    echo 'Informe um número para idade';
    return;
}

if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'Infantil')
            echo "O nadador " .$nome. " compete na categoria infantil";
    }
    
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'Adolescente')
            echo "O nadador " .$nome. " compete na categoria adolescente";
    }
}
else if($idade >= 19 && $idade <=60)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'Adulto')
            echo "O nadador " .$nome. " compete na categoria adulto";
    }
}
else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'Idoso')
            echo "O nadador " .$nome. " compete na categoria idoso";
    }
}
