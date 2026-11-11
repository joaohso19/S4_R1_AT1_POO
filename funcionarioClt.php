<?php
require_once 'funcionarioRepository.php';

class FuncionarioCLT extends FuncionarioRepository {

    # Atributos
    protected string $cpf;
    protected float $descontos;

    # Métodos
    public function __construct(string $nome, float $salario, string $cpf, float $descontos){
        parent::__construct($nome, $salario);
        $this->cpf = $cpf;
        $this->descontos = $descontos;
    }

    public function salarioLiquido(){
        return $this->salario - $this->descontos;
    }
}
?>