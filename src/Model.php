<?php


namespace JRN;

use \PDO;

class Model
{
    /**
     * @var \PDO
     */
    private $pdo;

    /**
     * Model constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo = null)
    {
        var_dump($pdo);
        $this->pdo = $pdo;
    }

    public function get()
    {
        return [
            'name'      => 'Armando',
            'lastName'  => 'Nascimento',
            'email'     => 'armandojrn@hotmail.com',
            'phone'     => '(48) 99867 6887',
        ];
    }

}