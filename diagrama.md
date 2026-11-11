```mermaid
classDiagram
    class FuncionarioInterface {
        <<interface>>
        +contratar()
        +demitir()
    }

    class Funcionario {
        <<abstract>>
        - string nome
        - float salario
        +getNome()
        +getSalario()
    }

    class FuncionarioRepository {
        <<abstract>>
        +contratar()
        +demitir()
    }

    class FuncionarioCLT {
        - string cpf
        - float descontos
        +salarioLiquido()
    }

    class FuncionarioPJ {
        - int horas
        - float descontos
        +valorTotal()
    }

    FuncionarioInterface <|.. FuncionarioRepository : implements
    Funcionario <|-- FuncionarioRepository : extends
    FuncionarioRepository <|-- FuncionarioCLT : extends
    FuncionarioRepository <|-- FuncionarioPJ : extends