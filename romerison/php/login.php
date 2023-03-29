<?php
    if (isset($_POST['iptBtn'])) {

        $email = $_POST['iptEmail'];
        $senha = $_POST['iptSenha'];

        #echo "O email é: ".$email." e a senha é: ".$senha;

        if ($email == "romerison@email.com" && $senha == "1234") { 
            Header("Location: ../html/cadastro.html");

        }else {
            Header("Location: ../index.html");
        }
    }
?>