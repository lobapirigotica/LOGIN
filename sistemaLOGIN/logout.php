<?php

session_start();
unset($_SESSION['sessao']);
header("Location: "."index.php");

?>