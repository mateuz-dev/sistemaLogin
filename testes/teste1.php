<?php

    // INICIANDO UMA SESSÃO

    session_start();

    // VERIFICANDO O ID DA SESSÃO
    echo session_id();

    // VARIÁVEL DE SESSÃO
    $_SESSION["nome"] = "MATEUS BISPO RAMOS";
    // EXIBIXINDO UMA VARIÁVEL DE SESSÃO
    echo $_SESSION["nome"];