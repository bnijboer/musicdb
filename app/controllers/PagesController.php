<?php

namespace App\Controllers;

use App\Core\Helper;

class PagesController {

      public function home() {
            
            $user = 'Brendan';
            return Helper::view('index', compact('user'));
      }

      public function overview() {
            return Helper::view('overview');
      }
}