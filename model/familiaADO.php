<?php
require_once 'familiaTO.php';

class familiaADO extends familiaTO {

    protected $sqlInsert = "insert into familia(nome,quantidade_membros)
                            values('%s','%s')";

    protected $sqlSelect = "select * from familia %s";

    protected $sqlUpdate = "update familia set nome= '%s',quantidade_membros='%s' where id = %s";
    
    protected $sqlDelete = "delete from familia where id = %s";
    
    public function insert() {
        $sql = sprintf($this->sqlInsert, 
                $this->getNome(), 
                $this->getQuantidade_membros());
        return $this->runExec($sql);
    }

    public function select($options = "") {
        $sql = sprintf($this->sqlSelect, $options);
        return $this->runQuery($sql);
    }

    public function update() {
        $sql = sprintf($this->sqlUpdate, 
                $this->getNome(), 
                $this->getQuantidade_membros());
        return $this->runExec($sql);
    }
    
    public function delete() {
        $sql = sprintf($this->sqlDelete, $this->getId());
        return $this->runExec($sql);
    }
    
    public function load() {
  	$reg = $this->select("where id=".$this->getId());
        $this->setNome($reg[0]['nome']);
        $this->setQuantidade_membros($reg[0]['membros']);
       return $this;
    }
    
}