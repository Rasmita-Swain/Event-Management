<?php
session_start();
session_destroy();
header("Location: /Eventa/index.php");
exit();
?>