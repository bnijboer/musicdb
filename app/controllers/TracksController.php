<?php

namespace App\Controllers;

use App\Core\{App, Helper};

class TracksController {

      public function index() {
            
            $tracks = App::get('database')->selectAll('tracks');

            return Helper::view('tracks', compact('tracks'));
      }

      public function store() {
            App::get('database')->insert('tracks', [
                  'artist'    => $_POST['artist'],
                  'title'      => $_POST['title'],
                  'genre'      => $_POST['genre']
            ]);

            return Helper::redirect('/tracks');
      }
}