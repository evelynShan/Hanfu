<?php

class DatabaseConnection {

    static function connect() {
        return new DB\SQL(
            'mysql:host=localhost;port=3306;dbname=sedinb43_SimpleModel',
            'sedinb43_sedinb43',
            '328509776ly'
        );
    }

}
