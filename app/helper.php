<?php

if (!function_exists("dosyasil")){
    function dosyasil($string){
        if(file_exists($string)){
            if (!empty($string)){
                unlink($string);
            }
        }
    }
}

if (!function_exists("resimyukle")){
    function resimyukle($name,$yol,$image){

    }
}
