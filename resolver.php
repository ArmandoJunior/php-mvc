<?php

$resolver = new \JRN\Resolver();

$resolver['PDO'] = function ($r) {
    return new \PDO('mysql:host=localhost;dbname=mysql', 'phpmyadmin', 'some_pass', [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
};

return $resolver;
