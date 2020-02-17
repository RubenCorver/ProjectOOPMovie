<?php
session_start();
session_destroy();
header('Location: gar-menuK.php');
exit;
?>