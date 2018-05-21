<?php
require_once 'Conecta.php';
class familiaTO extends conecta{
 private $id;
 private $nome;
 private $quantidade_membros;
 
 public function getId() {
     return $this->id;
 }

 public function getNome() {
     return $this->nome;
 }

 public function getQuantidade_membros() {
     return $this->quantidade_membros;
 }

 public function setNome($nome) {
     $this->nome = $nome;
     return $this;
 }

 public function setQuantidade_membros($quantidade_membros) {
     $this->quantidade_membros = $quantidade_membros;
     return $this;
 }


 
}