<?php
    if (isset($_POST['iptBtn'])) {
        $nome = $_POST['iptNome'];
        $cpf = $_POST['iptCPF'];
        $rg = $_POST['iptRG'];
        $genero = $_POST['iptGenero'];
        $est_civil = $_POST['iptEstCivil'];
        $data_nasc = $_POST['iptDataNasc'];
        $cep = $_POST['iptCEP'];
        $endereco = $_POST['iptEndereco'];
        $bairro = $_POST['iptBairro'];
        $estado = $_POST['iptEstado'];
        $cidade = $_POST['iptCidade'];
        $numero = $_POST['iptNumero'];

        echo "Eu $nome, $genero, portador(a) do RG nº $rg e CFP nº $cpf, estado civil $est_civil, residente no endereço $endereco, número $numero - $cidade/$estado.";
   }
    
?>