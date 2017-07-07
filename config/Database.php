<?php

/**
 * Created by PhpStorm.
 * User: Sagar
 * Date: 7/3/2017
 * Time: 2:41 AM
 */
class Database
{

   function login() {
       echo 'Looggein';
   }

    protected function sanitizing($data) {

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);



        return $data;
    }

}