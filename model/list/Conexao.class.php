<?php

    class Conexao{

        public static $instance;

        public static function getInstance()
        {
            if(!isset(self::$instance))
            {
                self::$instance =
                new PDO("mysql:host=localhost;dbname=sapudb",
                        "root","",
                        array(PDO::MYSQL_ATTR_INIT_COMMAND 
                        => "SET NAMES utf8")                );

                       /*new PDO("mysql:host=web.sbs.ifc.edu.br;dbname=sapudb",
                        "ecoprog","Eco2022@IFC",
                        array(PDO::MYSQL_ATTR_INIT_COMMAND 
                        => "SET NAMES utf8")                );*/

                self::$instance->setAttribute
                (PDO::ATTR_ERRMODE, 
                PDO::ERRMODE_EXCEPTION);

                return self::$instance;
            }
        }

    }


?>