<?php

namespace App\Controllers;

use App\Core\{App, Helper};

class TracksController
{
      public function index()
      {
            $searchQuery = null;

            $tracks = App::get('database')->selectAll('tracks');

            return Helper::view('tracks', compact('tracks', 'searchQuery'));
      }

      public function store()
      {
            App::get('database')->insert('tracks', [
                  'artist'    => $_POST['artist'],
                  'title'     => $_POST['title'],
                  'genre'     => $_POST['genre']
            ]);

            return Helper::redirect('/tracks');
      }

      public function filter() {
            if(isset($_REQUEST['genre']) && $_REQUEST['genre'] !== "") {
                  $searchQuery = $_REQUEST['genre'];
                  $searchQuery = preg_replace("#[^0-9a-z]#i", "", $searchQuery);

                  $tracks = App::get('database')->search('tracks', $searchQuery);
                  
                  return Helper::view('tracks', compact('tracks', 'searchQuery'));
            } else {
                  return Helper::redirect('/tracks');
            }
      }
}