<?php

    /* 
        Global settings
    */

    define("ROOT", "http://localhost:8080/orders/api");

    /* 
        Helpers 
    */

    date_default_timezone_set("America/Sao_Paulo");

    define("DATA_LAYER_CONFIG", [
        "driver" => "mysql",
        "host" => "localhost",
        "port" => "3306",
        "dbname" => "orders_project",
        "username" => "root",
        "passwd" => "",
        "options" => [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_CASE => PDO::CASE_NATURAL
        ]
    ]);

    /*
        Email settings
    */

    define ("MAIL", [
        "host" => "ns62.prodns.com.br",
        "SMTPAuth" => true,
        "SMTPSecure" => "ssl",
        "user" => "contato@globalnetsis.com.br",
        "passwd" => "GNSc10@!",
        "port" => 465,
        "fromMail" => "contato@globalnetsis.com.br",
        "fromName" => "Globalnetsis"
    ]);