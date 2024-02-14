<?php
    require "app.php";
    require "config.php";
    require "controller.php";
    require "database.php";
    require "model.php";

    spl_autoload_register(function($classe_nome){
        require "../private/core/models/" . ucfirst($classe_nome). ".php";
    });
    


