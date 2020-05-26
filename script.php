
<?php
session_start();

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];



if($idade <= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'Infantil')
        $_SESSION['mensagem-de-sucesso'] = "O Nadador   " .$nome. "    Compete na categoria Infantil"; 
        header('location: login.php');
        return;
    }
}
else if($idade >= 13 && $idade <= 20)
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'Adolescente')
              $_SESSION['mensagem-de-sucesso'] = "O Nadador   " .$nome. "    Compete na categoria Adolescente"; 
              header('location: login.php');
              return;
            
        }
    }

    else if($idade >= 21 && $idade <= 49)
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'Adulto')
            $_SESSION['mensagem-de-sucesso'] = "O Nadador   " .$nome. "    Compete na categoria Adulto"; 
            header('location: login.php');
            return;
            
        }
    }

    else
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'Idoso')
            $_SESSION['mensagem-de-sucesso'] = "O Nadador   " .$nome. "    Compete na categoria Idoso"; 
            header('location: login.php');
            return;
            
        }
    }


?>