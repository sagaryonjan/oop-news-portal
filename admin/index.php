<?php
function debug($data){
    echo '<pre>';
    print_r($data);
    die;
}

$dir = explode('\\', __DIR__);
debug($dir);

$request_uri = $_SERVER['REQUEST_URI'];

$url = explode('/', $request_uri);
//$url[1] = admin, $url[2] = login;

if(isset($url[1]) && $url[1] == 'admin') {

    if(isset($url[2]) && $url[2] == 'login') {

        include 'login.php';
        exit;
    }

    if(isset($url[2]) && $url[2] == 'dashboard') {

        include 'dashboard.php';
        exit;
    }

    if(isset($url[2]) && $url[2] == 'category') {

        if(isset($url[3]) && $url[3] == 'index') {

            include 'category_list.php';
            exit;
        }
        if(isset($url[3]) && $url[3] == 'create'){

            include 'category_create.php';
            exit;
        }

    }

    die('no url');

} else {

}

/*UPDATE wp_options SET option_value = replace(option_value,
 'http://rastrakhabar.onecraftdesign.com/', 'http://www.rastrakhabar.com')
 WHERE option_name = 'home' OR option_name = 'siteurl';*/