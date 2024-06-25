<?php

namespace App\Models;

use PDO;

class Task
{
    private static $table = 'tasks';

    private $title;
    private $id;

    public static function all(): array {
        $pdo = self::getConnection();
        $stmt = $pdo->query('SELECT * FROM ' . self::$table);
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public function save(): void {
        $pdo = self::getConnection();

        if($this->id) {
            $stmt = $pdo->prepare('UPDATE ' . self::$table . ' SET title = ? WHERE id = ?');
            $stmt->execute([$this->title, $this->id]);
        } else {
            $stmt = $pdo->prepare('INSERT INTO ' . self::$table . '(title) VALUES (?)');
            $stmt->execute([$this->title]);   
        }                   
    }

    public function destroy(): void {
        $pdo = self::getConnection();
        $stmt = $pdo->prepare('DELETE FROM ' . self::$table . ' WHERE id = ?');
        $stmt->execute([$this->id]);
    }

    public static function find(string $id): object
    {
        $pdo = self::getConnection();
        $stmt = $pdo->prepare('SELECT * FROM '. self::$table . ' WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetchObject(self::class);
    }

    public function set(string $param, mixed $value): void
    {
        $this->$param = $value;
    }

    public function get(string $param): mixed
    {
        return $this->$param;
    }

    private static function getConnection(): PDO
    {
        $config = require '../config/database.php';
        return new PDO("mysql:host={$config['host']};dbname={$config['db']}", $config["user"], $config["pass"]);
    }
}