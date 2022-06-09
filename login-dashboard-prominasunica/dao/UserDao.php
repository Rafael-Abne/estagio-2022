<?php

include_once ('GenericDAO.php');

class UserDao extends GenericDAO {

    private static $instance;

    public static function getInstance() {

        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct() {
        ;
    }

    protected $table = 'usuario';

    public function insert($user) {

    }

    public function update($user) {

    }
    
    public function findByUser($user, $password) {
        try {
            $sql = "SELECT * FROM $this->table WHERE user = :user AND password = :password";
            $stmt = DB::prepare($sql);
            $stmt->bindValue(':user', $user);
            $stmt->bindValue(':password', $password);
            $stmt->execute();
            return $stmt;
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

}
