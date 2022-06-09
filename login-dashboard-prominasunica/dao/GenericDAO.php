<?php

require_once 'DB.php';

abstract class GenericDAO extends DB
{
    private static $instance;

    public static function getInstance()
    {

        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    protected $table;

    abstract public function insert($objeto);

    abstract public function update($objeto);

    public function findById($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id = ?";
            $stmt = DB::prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt;
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }


    public function findAll()
    {
        try {
            $sql = "SELECT * FROM $this->table";
            $stmt = DB::prepare($sql);
            $stmt->execute();
            return $stmt;
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }


    public function delete($id)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE id = :id";
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt;
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }


}
