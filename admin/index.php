<?php

include 'config/function.php';

include 'class/Users.php';

include '../config/config.php';

$routes = require 'config/route.php';


if(isset($url[1]) && $url[1] == 'admin') {

        if(isset($url[2]) && $url[2] == $routes[$url[2]]['url']) {


            if(isset($routes[$url[2]]['action'])) {

                foreach ($routes[$url[2]]['action'] as $action) {

                    if(isset($url[3]) && $url[3] == $action['url']) {

                        checkIfFileExistsAndInclude($action['file']);
                        exit;

                    }

                }

            }

            else {

                checkIfFileExistsAndInclude($routes[$url[2]]['file']);
                exit;

            }

        } else {

            die('no Url');
        }


} else {
    die('no Url');
}