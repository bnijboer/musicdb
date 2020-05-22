<?php

class QueryBuilder
{
      protected $pdo;

      public function __construct($pdo)
      {
            $this->pdo = $pdo;
      }

      public function selectAll($table)
      {
            $statement = $this->pdo->prepare("SELECT * FROM {$table}");
            $statement -> execute();
      
            return $statement->fetchAll(PDO::FETCH_CLASS);
      }

      public function search($table, $searchQuery)
      {
            $statement = $this->pdo->prepare(
                  "SELECT * FROM {$table}
                  WHERE artist LIKE '%$searchQuery%'
                  OR title LIKE '%$searchQuery%'
                  OR genre LIKE '%$searchQuery%'"
            );

            $statement -> execute();
      
            return $statement->fetchAll(PDO::FETCH_CLASS);
      }

      public function insert($table, $params)
      {
            $sql = sprintf(
                  'INSERT INTO %s (%s) VALUES (%s)',
                  $table,
                  implode(', ', array_keys($params)),
                  ':' . implode(', :', array_keys($params))
            );

            try {
                  $statement = $this->pdo->prepare($sql);

                  $statement->execute($params);
            } catch (Exception $e) {
                  die('Something went wrong.');
            }
      }
}