<?php
/*
* Vídeo Aula - FrameWork MVC com PHP e AngularJS
* Palestrante: Felipe Campos
* Canal: Dicas do Programador
*/



//Rota principal
$route->get("/","Index@Index");

//tela de cadastro
$route->get("/cadastro","Index@cadContact");

$route->get("/erroCadastro","Index@erroCadastro");


$route->get("/editContact/[i:id]","Index@editContact");
$route->post("/cadastro","Index@cadContactPost");


//tela de Edição
//$route->get("/edit","Index@editContact");


//Rota de Login
$route->get("/login","Login@telaInicial");