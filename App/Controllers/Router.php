<?php
namespace App\Controller;
// class Router{
//     private $pages = array();

//     function addRoute($url, $path){
//         $this->pages[$url] = $path;
//     }
//     function route($url){
//         $path = $this->pages[$url];
//         $fileDir = "pages/".$path;

//         if($path == ""){
//             require "404.php";
//             die;
//         }

//         if(file_exists($fileDir)){
//             require $fileDir;
//         } else {
//             require "404.php";
//             die;
//         }
//     }
// }
class Router{
    public static function lol(){
        echo 'Router';
    }
}