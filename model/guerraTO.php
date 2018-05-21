<?php
require_once 'Conecta.php';
class guerraTO extends conecta{
 private $id;
 private $nome;
 private $inicio;
 private $fim;
 
 public function getId() {
     return $this->id;
 }

 public function getNome() {
     return $this->nome;
 }

 public function getInicio() {
     return $this->inicio;
 }

 public function getFim() {
     return $this->fim;
 }
 
 public function setNome($nome) {
     $this->nome = $nome;
     return $this;
 }

 public function setInicio($inicio) {
     $this->inicio = $inicio;
     return $this;
 }

 public function setFim($fim) {
     $this->fim = $fim;
     return $this;
 }


 
}