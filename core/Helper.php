<?php

namespace App\Core;

class Helper {
      public static function view($name, $data = []) {
            extract($data);
            return require "app/views/{$name}.view.php";
      }
      
      public static function redirect($path = '/') {
            return header("Location: {$path}");
      }
}