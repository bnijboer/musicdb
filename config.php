<?php

return [
      'database' => [
            'name'            => 'musicdb',
            'username'        => 'root',
            'password'        => 'root',
            'connection'      => 'mysql:host=127.0.0.1',
            'options'         => [
                  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION     //throws exception error if error occurs. For example, if non-existent tablename is inserted in selectAll method.
            ]
      ]
];