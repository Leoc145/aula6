<?php
class Usuario{
    // Atributos da classe 
    public     $nome;
    protected  $cpf;
    private    $endereço;

    //construtor da classe
    function Usuario(){
        $this->preparaUsuario();
    }
    //Métodos
    private function preparaUsuario(){
        $this->nome = "Leonardo";
        $this->cpf = "99999999999";
        $this->endereço = "Rua Fulando de Tal";
    } 
    public function getCpf (){
        return $this->cpf;
    }
    public function geteNome(){
        return $this->nome;
    }
    public function geteEndereço(){
        return $this->endereço;
    }

    
}
//Instanciando o objeto e acessando seus respectivos métodos 
$uso = new Usuario();

$uso->getCpf();

$udo->getNome();
?>