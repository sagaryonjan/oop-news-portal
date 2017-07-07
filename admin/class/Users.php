<?php

include '../config/Database.php';

class Users extends Database
{

   function login($request) {

       $this->validate($request, [
           'email'     => [ 'required', 'valid_email' ],
           'password'  => 'required'
       ]);

   }

   public function validate($request, $rules) {

       $errors = [];
       $validate = 1;

       foreach ($rules as $field =>  $value) {

           if($rules[$field] == 'required') {

               if($request[$field] == '') {

                   $errors[$field] = $field.' field is required';
                   $validate = 0;

               }
           }

       }

       $end = [];

       if($validate == 0) {

           $end['validate'] = 0;
           $end['errors'] = $errors;

           return $end;
       }

       $end['validate'] = $validate;


       return $end;



   }

    public function loginValidation($data) {

        $errors = [];

        $validate = 1;


        if($data['email'] == '') {
            $errors['email'] = 'Please Fill You email';
            $validate = 0;
        }

        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format";
            $validate = 0;
        }

        if($data['password'] == '') {
            $errors['password'] = 'Please Fill You password';
            $validate = 0;
        }

        $end = [];

        if($validate == 0) {

            $end['validate'] = 0;
            $end['errors'] = $errors;

            return $end;
        }

        $end['validate'] = $validate;


        return $end;

    }

}