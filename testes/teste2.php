<?php

    // RECUPERANDO UMA SESSÃO
    session_start();

    echo session_id();

    echo $_SESSION["nome"];