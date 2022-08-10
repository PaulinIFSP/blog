<?php

require_once '../includes/funcoes.php';
require_once '../core/conexao_mysql.php';
require_once '../core/sql.php';
require_once '../core/mysql.php';

//Usuário
insert_usuario('João', 'joao@ifsp.edu.br','123456');
buscar_usuario();
update_usuario(38, 'murilo','silva@gmail.com');

//Post
insert_post('Urubu jantou a Galinha', 'Flamengo massacrou e Corinthians', '2022-05-08');
buscar_post();
update_post(29, 'Honda Civic Type r','2022-08-19');

//Avaliação
insert_avaliacao('8', 'SAI DAI CLUBISTA', '2022-05-10');
buscar_avaliacao();
update_post(9, 'GOW melhor game','2020-12-01');

//Insert
function insert_usuario($nome, $email, $senha) : void
{
    $dados = ['nome' => $nome, 'email' => $email, 'senha' => $senha];
    insere('usuario',$dados);
}

function insert_post($titulo, $texto, $data) : void
{
    $dados = ['titulo' => $titulo, 'texto' => $texto, 'data' => $data];
    insere('post',$dados);
}

function insert_avaliacao($nota, $comentario, $data) : void
{
    $dados = ['nota' => $nota, 'comentario' => $comentario, 'data' => $data];
    insere('avaliacao',$dados);
}

//select banco de dados
function buscar_usuario() : void
{
    $usuarios = buscar('usuario', ['id','nome','email'],[],'');
    print_r($usuarios);
}

function buscar_post() : void
{
    $posts = buscar('post', ['id','titulo','texto'],[],'');
    print_r($posts);
}

function buscar_avaliacao() : void
{
    $avaliacoes = buscar('avaliacao', ['id','nota','comentario'],[],'');
    print_r($avaliacoes);
}

//Teste update banco de dados
function update_usuario($id, $nome, $email) : void
{
    $dados = ['nome' => $nome,'email' => $email];
    $criterio = [['id', '=', $id]];
    atualiza('usuario', $dados,$criterio);
}

function update_post($id, $titulo, $texto) : void
{
    $dados = ['titulo' => $titulo,'texto' => $texto];
    $criterio = [['id', '=', $id]];
    atualiza('post', $dados,$criterio);
}

function update_avaliacao($id, $nota, $comentario) : void
{
    $dados = ['nota' => $nota,'comentario' => $comentario];
    $criterio = [['id', '=', $id]];
    atualiza('avaliacao', $dados,$criterio);
}
?>