<?php
session_start();

if(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['senha']) && !empty($_POST['senha'])){
$config = $_POST;
$_SESSION['session'] = $config;
$usuario = $_POST['user'];
 $senha = $_POST['senha'];
echo "SEU EMAIL:";
echo "<h4>$usuario</h4>";
}else{
 echo"<h4>DIGITE SEU EMAIL E SENHA PARA CONTINUAR</h4>";
}
?>
<a href="index.php"><button>EDITAR EMAIL</button></a>