<?php


setcookie('userData', $arrData,time()-86400,'/');

header('location:form.php');

?>