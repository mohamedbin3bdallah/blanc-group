<?php
unset($_COOKIE['userid']); setcookie('userid'); setcookie('userid',"");
echo header('location: index.php');
?>