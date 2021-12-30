<?php
include ('curso.php');
require_once('cursoDAO.php');

session_start();

$curso = new Curso();
$curso->setTituloCurso($_GET['tituloCurso']);
$curso->setDescricaoCurso($_GET['descricaoCurso']);
$curso->setNivelCurso($_GET['nivelCurso']);
$curso->setLinkCurso($_GET['videoCurso']);
$curso->setProfessorCurso($_SESSION['email']);

$cursoDao = new CursoDao();
$cursoDao->createCurso($curso);

header('location:verCursos.php');

?>