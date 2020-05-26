<?php

namespace App\Core;

class Helper
{
      public static function view($name, $data = [])
      {
            extract($data);
            

            return require "app/views/{$name}.view.php";
      }
      
      public static function redirect($path = '/')
      {
            return header("Location: {$path}");
      }

      public static function locateFile($track)
      {
            $inputDir = '\\';
            $rootDir = new \RecursiveDirectoryIterator($inputDir);
            $extensions = array("mp3", "m4a", "wav", "flac", "oog", "aiff", "wma");
            
            foreach (new \RecursiveIteratorIterator($rootDir) as $filename) {
                  $path_parts = pathinfo($filename);
            
                  if (
                        stripos($filename, $track->artist) !== false && 
                        stripos($filename, $track->title) !== false && 
                        in_array($path_parts['extension'], $extensions)
                  ) {
                        return $fileLocated = "Yes";
                  }
            }
            return $fileLocated = "No";
      }
}