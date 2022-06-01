<?php
    //season start while login
    session_start();

    //season destroy while logout
    session_destroy();

    require("index.html");
?>