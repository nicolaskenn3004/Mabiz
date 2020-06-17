<?php
define('HOST', 'localhost');
define('USUARIO', 'mabiz');
define('SENHA', 'marmilady');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');