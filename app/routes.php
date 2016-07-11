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
$route->get("/erroUpdate","Index@erroUpdate");
$route->get("/erroDelete","Index@erroDelete");



$route->get("/editContact/[i:id]","Index@editContact");
$route->post("/editContact/[i:id]","Index@editContactPost");

$route->get("/deleteContact/[i:id]","Index@deleteContact");

$route->post("/cadastro","Index@cadContactPost");


//tela de Edição
//$route->get("/edit","Index@editContact");


//Rota de Login
$route->get("/login","Login@telaInicial");