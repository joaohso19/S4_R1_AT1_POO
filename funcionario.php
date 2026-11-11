<?php
abstract class Funcionario {

    # Atributos
    protected string $nome;
    protected float $salario;
    protected bool $contratado = true;

    # Métodos
    public function __construct(string $nome, float $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getSalario(){
        return $this->salario;
    }
}
?>  