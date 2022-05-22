<?php
session_start();
if (!isset($_SESSION ['authenticated'] ) )  {
  echo ("<script>
  window.alert('você não esta logado!')
  window.location.href='index.php';
</script>");
}
?>