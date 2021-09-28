<?php
    $language = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);

    if ($language == "es") {
        header("Location: es/index.php?action=Home");
    }
    else if ($language == "en") {
        header("Location: en/index.php?action=Home");
    }
    else {
        header("Location: en/index.php?action=Home");
    }
?>