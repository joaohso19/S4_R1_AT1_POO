<?php
require_once 'funcionarioInterface.php';
require_once 'funcionario.php';

abstract class FuncionarioRepository extends Funcionario implements FuncionarioInterface {

    #[Override]
        public function contratar(){
            if($this->contratado){
                return "{$this->nome} já está contratado(a).\n";
            } else{
                $this->contratado = true;
                return "{$this->nome} foi contratado(a).\n";
            }
        }

    #[Override]
    public function demitir(){
        if($this->contratado){
            $this->contratado = false;
            return "{$this->nome} foi demitido(a).\n";
        } else {
            return "{$this->nome} não está contratado(a).\n";
        }
    }
}
?>