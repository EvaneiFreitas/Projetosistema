<?php

session_start();

function setarMessagemErro(string $mensagem) : void
{
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

function obterMensagemErro() : ?string
{
    if(isset($_SESSION['mensagem-de-erro']))
        return $_SESSION['mensagem-de-erro'];
    
        return null;
}
