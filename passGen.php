<?php
    function generatePassword($length){
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ012345678!@#$%^&*()_+";
        $password = "";
        for($i = 0; $i < $length; $i++){
            $password .= $chars[rand(0, strlen($chars)-1)];
        }

        return $password;
    }

    

    $password = generatePassword(12);

    echo "Collect your 12 character password here =  $password <br> <br>";
    echo "Reload this page to generate new passwords..."


?>