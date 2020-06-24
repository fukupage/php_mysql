<?php
session_start();

$_SESSION = array();
if(ini_set('session.use_cookies')){
  $params = session_get_cookie_param();
  setcookie(session_name(), '', time() - 4200,
  $params['path'], $params['domain'], $params['secure'], $param['httponly']);
}

session_destroy();
setcookie('email', '', time()-3600);

header('Location: login.php');
exit();
?>
