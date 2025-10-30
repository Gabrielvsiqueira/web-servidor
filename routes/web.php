<?php

use Bramus\Router\Router;

$router = new Router();

$router->get('/', 'App\Controllers\AuthController@showLoginForm');
$router->get('/login', 'App\Controllers\AuthController@showLoginForm');
$router->post('/login', 'App\Controllers\AuthController@login');
$router->get('/logout', 'App\Controllers\AuthController@logout');

$router->get('/home', 'App\Controllers\HomeController@index');

$router->get('/alunos', 'App\Controllers\AlunoController@index');
$router->post('/alunos/create', 'App\Controllers\AlunoController@create');
$router->post('/alunos/update/(\d+)', 'App\Controllers\AlunoController@update');
$router->get('/alunos/delete/(\d+)', 'App\Controllers\AlunoController@delete');

$router->get('/professores', 'App\Controllers\ProfessorController@index');
$router->post('/professores/create', 'App\Controllers\ProfessorController@create');
$router->post('/professores/update/(\d+)', 'App\Controllers\ProfessorController@update');
$router->get('/professores/delete/(\d+)', 'App\Controllers\ProfessorController@delete');

$router->get('/turmas', 'App\Controllers\TurmaController@index');
$router->post('/turmas/create', 'App\Controllers\TurmaController@create');
$router->post('/turmas/update/(\d+)', 'App\Controllers\TurmaController@update');
$router->get('/turmas/delete/(\d+)', 'App\Controllers\TurmaController@delete');

$router->run();