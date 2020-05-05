<?php
    session_start();
    session_destroy();
    header('Location:Mantra/index.php');
    exit();
    ?>