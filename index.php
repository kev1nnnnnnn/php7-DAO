<?php

require_once("config.php");

/*Carrega um usuario
$root = new Usuario();
$root->loadById(5);
echo $root;*/

/*carrega uma lista de usuarios
$lista = Usuario::getList();
echo json_encode($lista);*/

/*carrega uma lista de usuarios buscando pelo login
$search = Usuario::search("jo");
echo json_encode($search);*/

/*carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("jose","1234567");
echo $usuario;*/

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

/*criando um novo usuario
$aluno = new Usuario("aluno2", "@aluno");
$aluno->insert();
echo $aluno;*/

/*Alterando dados da tabela
$usuario = new Usuario();
$usuario->loadById(9);
$usuario->update("professor", "54321");
echo $usuario;*/

?>