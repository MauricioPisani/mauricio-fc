<?php
require_once 'guerraTO.php';

class guerraADO extends guerraTO {

    protected $sqlInsert = "insert into guerra(nome,inicio,fim)
                            values('%s','%s','%s')";

    protected $sqlSelect = "select * from guerra %s";

    protected $sqlUpdate = "update guerra set nome= '%s',inicio='%s',fim='%s' where id = %s";
    
    protected $sqlDelete = "delete from guerra where id = %s";
    
    public function insert() {
        $sql = sprintf($this->sqlInsert, 
                $this->getNome(), 
                $this->getInicio(), 
                $this->getFim());
        return $this->runExec($sql);
    }

    public function select($options = "") {
        $sql = sprintf($this->sqlSelect, $options);
        return $this->runQuery($sql);
    }

    public function update() {
        $sql = sprintf($this->sqlUpdate, 
                $this->getNome(), 
                $this->getInicio(), 
                $this->getFim());
        return $this->runExec($sql);
    }
    
    public function delete() {
        $sql = sprintf($this->sqlDelete, $this->getId());
        return $this->runExec($sql);
    }
    
    public function load() {
  	$reg = $this->select("where id=".$this->getId());
        $this->setNome($reg[0]['nome']);
        $this->setInicio($reg[0]['inicio']);
        $this->setFim($reg[0]['fim']);
       return $this;
    }
    
}