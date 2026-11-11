<?php
require_once 'funcionarioRepository.php';

class FuncionarioPJ extends FuncionarioRepository {

    # Atributos
    protected int $horas;
    protected float $descontos;

    # Métodos
    public function __construct(string $nome, float $salario, int $horas, float $descontos){
        parent::__construct($nome, $salario);
        $this->horas = $horas;
        $this->descontos = $descontos;
    }

    public function valorTotal(){
        return ($this->salario * $this->horas) - $this->descontos;
    }
}
?>