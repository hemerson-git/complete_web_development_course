<?php
  session_start();

  if($_SESSION['autenticado'] != 'SIM') {
    header('Location: index.php?no_permition=true');
  }
?>
