<?php
class cliente {
    // propriedades da classe objeto
    private $nome;
    private $endereco;
    private $rg;
    private $telefone;
    private $niver;
 
    // setters e getters
    public function setNome ($nome) {
        $this->nome = $nome;
    }
    public function getNome () {
        return $this->nome;
    }
 
    public function setEndereco ($endereco) {
        $this->endereco = $endereco;
    }
    public function getEndereco () {
        return $this->endereco;
    }
 
    public function setRg ($rg) {
        $this->rg = $rg;
    }
    public function getRg () {
        return $this->rg;
    }
 
    public function setTelefone ($telefone) {
        $this->telefone = $telefone;
    }
    public function getTelefone () {
        return $this->telefone;
    }
    public function setNiver ($niver) {
        $this->niver = $niver;
    }
    public function getTelefone () {
        return $this->niver;
    }
    public function salvar(){
   // lógica necessária para salvar
    }
    public function excluir(){
      // lógica necessária para excluir
    }
     
    public function selecionar(){
      // lógica necessária para selecionar
    }
    }
?>