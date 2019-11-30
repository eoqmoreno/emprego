<?php
    setcookie("email", '', time()+3600*24*30, '/');
    setcookie("tipo", '', time() + 3600 * 24 * 30, '/');
    header('Location: ../index.php');
