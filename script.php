
<?php
session_start();

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
  $_SESSION['mensagem-de-erro'] = 'O nome não pode estar vazio!!! Favor preencha o campo nome.';
  header('location:login.php');
  return;
}

else if(strlen($nome) <= 2 ){
  $_SESSION['mensagem-de-erro'] = 'O Nome tem que ter mais de duas letras';
  header('location:login.php');
  return;
}

else if(strlen($nome)  > 40){
   $_SESSION['mensagem-de-erro'] = 'nome muito grande!';
   header('location:login.php');
   return;
}
if(!is_numeric($idade)){
   $_SESSION['mensagem-de-erro'] = 'Você deve digitar numeros para idade!';
   header('location:login.php');
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