<?php
    
    function lerArquivo($nomeArquivo){
        $arquivo = file_get_contents($nomeArquivo);
        $arquivoArr = json_decode($arquivo);
        return $arquivoArr;
    }


    function realizarLogin($usuario, $senha, $dados){
        foreach($dados as $dado){
            if($dado->usuario == $usuario && $dado->senha == $senha){
                $_SESSION["usuario"] = $dado->usuario;           
                $_SESSION["id"] = session_id();
                $_SESSION["data_hora"] = date("d/m/Y - h:i:s");
                header("location: araea_restrita.php");
                exit;
            }
        }
        header("location: index.php");

    }


    function verificarLogin(){
        if($_SESSION["id"] != session_id() || (empty($_SESSION["id"]))){
            header("location: index.php");
        }
    }


    function finalizarLogin(){
        session_unset();
        session_destroy();
        header("location: index.php");
    }