<?php
require_once 'guerraADO.php';

class guerra extends guerraADO {	
    
    protected $sqlguerra = "SELECT * FROM guerra ORDER BY id;";

    public function selectGuerra($options = "") {
        $sql = sprintf($this->sqlguerra, $options);
        return $this->runQuery($sql);
    }
}
