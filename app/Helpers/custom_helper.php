<?php

//Helpers will create functions to do some specific tasks and can be reused inside any of the component.

if(!function_exists("get_string_length")){
    function get_string_length($string){
        return strlen($string);
    }
}

if(!function_exists("get_square")){
    function get_square($number){
        return $number * $number;
    }
}

?>