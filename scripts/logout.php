<?php
session_start();
session_destroy();
header("Location: http://localhost/Propa/index.php");
exit();
?>