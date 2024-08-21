<?php

use PHPUnit\Framework\Attributes\AfterClass;
use PHPUnit\Framework\Attributes\BeforeClass;

trait DatabaseTrait {

    protected $cart;
    protected static $db_connection = false;

    #[BeforeClass]
    public static function createDatabase(): void {
        if (self::$db_connection) return;
        self::$db_connection = new \PDO('sqlite::database.db');
    }

    #[AfterClass]
    public static function deleteDatabase(): void {
        self::$db_connection = null;
        unlink(':database.db');
    }

}
