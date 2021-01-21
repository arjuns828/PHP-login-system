<?php
    // if there is not __CONSTANT__ defined, dont run this file then
    if(!defined('__CONFIG__')){
        exit('you do not have the config file');
    }


    // include the DataBase file
    include_once "classess/DataBase.php";

    $con=DataBase::getConnection();
?>