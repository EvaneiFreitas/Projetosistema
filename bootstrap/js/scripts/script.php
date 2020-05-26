
<?php
$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);
//return 0;


if(empty($nome)){
 echo "Você deve digitar um Nome!!!";
 return;
}

if(strlen($nome) <= 2 ){
  echo "O Nome tem que ter mais de duas letras";
  return;
}

if(strlen($nome)  > 40){
   echo " nome muito grande!";
   return;
}
if(!is_numeric($idade)){
   echo "Você deve digitar numeros para idade!";
   return;
}



if($idade <= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'Infantil')
        
          echo "O Nadador   " .$nome. "    Compete na categoria Infantil";
        
    }
}
else if($idade >= 13 && $idade <= 20)
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'Adolescente')
            
              echo "O Nadador ".$nome. "Compete na categoria Adolescente ";
            
        }
    }

    else if($idade >= 21 && $idade <= 49)
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'Adulto')
            
              echo "O Nadador ".$nome. "Compete na categoria Adulto ";
            
        }
    }

    else
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'Idoso')
            
              echo "O Nadador ".$nome. "Compete na categoria Idoso";
            
        }
    }
?>