<?php
require_once 'familiaADO.php';

class familia extends familiaADO {	
    
    protected $sqlfamilia = "SELECT * FROM familia ORDER BY id;";

    public function selectFamilia($options = "") {
        $sql = sprintf($this->sqlfamilia, $options);
        return $this->runQuery($sql);
    }
}
