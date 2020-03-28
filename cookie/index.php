<?php
if(isset($_COOKIE['user']) && isset($_GET['deletecookie'])){
    unset($_COOKIE['user']);
     
} if(isset($_POST['caract'])){
    setcookie('user', $_POST['caract']);
    header("location: index.php");
}else{ 
    if(isset($_COOKIE['user'])){
        echo  $_COOKIE ['user']; 
    echo "<a href='?deletecookie=true'> <br> <button>voltar ao formulario</button></a>"; 
    }else{ 
?>
<form method="POST" action="index.php">
    <input type="text"  name="caract" placeholder="digite seu nome">
    <button type="submit" value="Enviar">ver</button>
</form>
<?php } } ?>