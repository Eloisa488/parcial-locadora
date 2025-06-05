<?php
//chama a sessão já existente
   include_once "session.php";
// Se livra de todas as sessões existentes
    session_unset()
    // Destruir os registros da sessões existentes atualmente
    session_destroy();
    header(header: 'Location: ../index.php');
?>