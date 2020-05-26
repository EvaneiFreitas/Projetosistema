<?php

function validaNome(string $nome) : bool
{

if(empty($nome)){
    $_SESSION['mensagem-de-erro'] = 'O nome não pode estar vazio!!! Favor preencha o campo nome.';
    return false;
  }
  
  else if(strlen($nome) <= 2 ){
    $_SESSION['mensagem-de-erro'] = 'O Nome tem que ter mais de duas letras';
    return false;
  }
  
  else if(strlen($nome)  > 40){
     $_SESSION['mensagem-de-erro'] = 'nome muito grande!';
     return false;
  }
  return true;
  
}

function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade)){
        $_SESSION['mensagem-de-erro'] = 'Você deve digitar numeros para idade!';
        return false;
     }
     return true;
     
}


?>