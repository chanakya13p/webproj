<?php

session_start();
setcookie(session_name(),session_id(),time()-100);

//setcookie('username',"",time() - 3600);
session_destroy();

header('Location: http://www.cs.odu.edu/~cpallapo/CS518/proj4/index.php');
?>  