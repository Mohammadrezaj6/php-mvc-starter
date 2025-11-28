<?php


namespace App\Models;


class User
{
    public $id;
    public $name;
    public $email;


    public function __construct($id = null, $name = null, $email = null)
    {
    $this->id = $id;
    $this->name = $name;
    $this->email = $email;
    }


    // نمونه متد CRUD ساده (اینجا فقط نمونه است)
    public static function all()
    {
    return [
    new self(1, 'Alice', 'alice@example.com'),
    new self(2, 'Bob', 'bob@example.com')
    ];
    }
}