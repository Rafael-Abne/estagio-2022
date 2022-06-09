<?php

include_once ('GenericDAO.php');

class LeadsDao extends GenericDAO {

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

    protected $table = 'leads';

    public function insert($lead) {
         try {
            $sql = "INSERT INTO $this->table (nome, .....)";
            $stmt = DB::prepare($sql);
            $stmt->bindValue(':nome', $lead['nome']);
            // ....
            $stmt->execute();
        	
        	return true;
        
        } catch (Exception $ex) {
            $ex->getMessage();
            return false;
           
        }
    }

    public function update($lead) {
      // .......
    }

   
}
