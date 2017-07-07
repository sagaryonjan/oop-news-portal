<?php
/**
 * Created by PhpStorm.
 * User: Sagar
 * Date: 7/7/2017
 * Time: 1:50 AM
 */

function checkIfFileExistsAndInclude($file_name) {

    if(file_exists($file_name.'.php')) {

        include $file_name.'.php';

    } else {

        die($file_name.".php file doesn't exist");
    }

}

function debug($data){

    echo '<pre>';
    print_r($data);
    die;

}