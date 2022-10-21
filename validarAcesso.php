<?php
session_start();
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] != 'YES') {
    echo ("<script>
      window.alert('Você não estar logado!')
      window.location.href='index.php';
      </script>");
}