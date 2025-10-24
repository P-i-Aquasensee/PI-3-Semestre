<?php
session_start();
session_unset();
session_destroy();
header('Location: ../loginFuncionario.php'); // volta para a raiz
exit;
?>