<?php

/**
 * Created by PhpStorm.
 * User: Stefa
 * Date: 6-4-2018
 * Time: 12:09
 */
class Database  extends PDO
{

    /**
     * Database constructor.
     */
    public function __construct()
    {
        parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
    }
}