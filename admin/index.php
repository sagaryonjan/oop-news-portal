<?php

include 'config/function.php';

include 'class/Users.php';

include '../config/config.php';

$routes = require 'config/route.php';

if(isset($url[1]) && $url[1] == 'admin') {

    foreach ($routes as $route) {

        if(isset($url[2]) && $url[2] == $route['url']) {

            if(isset($route['action'])) {

                foreach ($route['action'] as $action) {

                    if(isset($url[3]) && $url[3] == $action['url']) {

                        checkIfFileExistsAndInclude($action['file']);

                    }

                }

            }
            else {

                checkIfFileExistsAndInclude($route['file']);

            }

        }
    }

  die('no Url');

} else {

}