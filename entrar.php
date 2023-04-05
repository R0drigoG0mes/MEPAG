<?php

session_start();
$conta_inexistente = 0;

if(isset($_POST['submit']) && !empty($_POST['email'] && !empty($_POST['senha'])))
{
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $result = $conexao -> query($sql);

    if(mysqli_num_rows($result) < 1){
        session_unset();
        $conta_inexistente = 1;
    }
    else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: index.php');
    }
}

?>