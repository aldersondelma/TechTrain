<?php

//rotas da aplicação

//a variável $uri já contém os dados da rota solicitada

switch ($uri) {
    
    case '/':

       require './app/views/index.php';
       break;
    case '/cadastro':
        require './app/views/cadastro.php';
        break;
    default:
       require('Essa rota não é valida');
       break;
}
