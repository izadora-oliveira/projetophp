<?php
session_start();
#echo $_SESSION ['usuario_logado'];
if (!isset($_SESSION ['authenticated'] ) )  {
  echo ("<script>
  window.alert('você não esta logado!')
  window.location.href='entrar.php?login=erro2';
</script>");
  //header('Location:login.php?login=erro2');

}

?>