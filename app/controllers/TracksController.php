<?php

namespace App\Controllers;

use App\Core\{App, Helper};

class TracksController
{
      public function index()
      {
            $searchQuery = null;

            $tracks = App::get('database')->selectAll('tracks');

            foreach($tracks as $track) {
                  $track->fileLocated = Helper::locateFile($track);
            }

            return Helper::view('tracks', compact('tracks', 'searchQuery'));
      }

      public function store()
      {
            App::get('database')->insert('tracks', [
                  'artist'    => $_POST['artist'],
                  'title'     => $_POST['title'],
                  'record'    => $_POST['release'],
                  'style'     => $_POST['style'],
                  'genre'     => $_POST['genre'],
                  'notes'     => $_POST['notes']
            ]);

            return Helper::redirect('/tracks');
      }

      public function filter() {
            if(isset($_REQUEST['query']) && $_REQUEST['query'] !== "") {
                  $searchQuery = $_REQUEST['query'];
                  $searchQuery = preg_replace("#[^0-9a-z]#i", "", $searchQuery);

                  $tracks = App::get('database')->search('tracks', $searchQuery);
                  
                  foreach($tracks as $track) {
                        $track->fileLocated = Helper::locateFile($track);
                  }

                  return Helper::view('tracks', compact('tracks', 'searchQuery'));

            } else {
                  return Helper::redirect('/tracks');
            }
      }
}