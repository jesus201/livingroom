<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/myfirstwebsite/core/init.php';


 session_destroy();
 header("location:../../index.php")
?>