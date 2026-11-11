# Exercício de Apropriação

### **O que é uma interface?**  
É um contrato na programação. Ela define o que uma classe deve fazer, mas não como. A interface obriga a classe a implementar uma lista de métodos predefinidos.

---

### **Qual a diferença entre interface e classe abstrata?**  
A interface define comportamentos ("o que o objeto faz") e permite que uma classe implemente várias delas. A classe abstrata define a identidade ("o que o objeto é"), permite compartilhar código pronto, mas a classe só pode herdar de uma.

---

### **Por que interfaces ajudam no trabalho em equipe?**  
Elas desacoplam o código. Com o contrato definido, diferentes desenvolvedores podem trabalhar em partes distintas do sistema ao mesmo tempo, sem que um precise esperar a implementação do outro ficar pronta.

<br>

---
---

<br>

# Desafio Profissional

### **Como as interfaces ajudam o novo desenvolvedor a entender o sistema?**  
Funcionam como um **sumário explicativo**. Em vez de ler centenas de linhas de código interno para descobrir o que uma classe faz, ele lê apenas a interface para entender as entradas me saídas e funcionalidades principais do módulo em poucos minutos.

---

### **O que acontece se ele não seguir o contrato?**  
O código **não compila** ou lança erro no momento do build. O compilador detecta que faltam métodos obrigatórios da interface e impede que a aplicação seja executada até que a implementação esteja correta.