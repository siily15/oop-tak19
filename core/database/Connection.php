<?php

class Connection {

    public static function make ( $config ) {

        try {
            return new PDO(
                "mysql:host={$config['host']};dbname={$config['database']}",
                $config['user'],
                $config['password'],
                $config['options']
            );
        } catch ( PDOException $e ) {
            var_dump($e->message());
            die('Viga: ei saa andmebaasiga ühendust!');
        }

    }

}