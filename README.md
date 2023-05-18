# Os-quatro-pilares-de-POO
Continuamos com a Programação Orientada a Objeto (POO), agora informando os 4 pilares desta programação

A programação orientada a objetos pode ser definida por quatro pilares principais, sendo eles herança, encapsulamento, abstração e polimorfismo.

* **Herança:** Reaproveitar o código, para trazer características de um objeto pai para um filho

Herança é um conceito importante na programação orientada a objetos que permite criar novas classes com base em classes já existentes. Quando uma nova classe é criada a partir de uma classe já existente (a classe-pai), ela herda automaticamente todos os atributos, comportamentos e implementações da classe-pai, economizando tempo e evitando duplicação de código.

Por exemplo, imagine que precisamos criar uma classe para representar um funcionário de uma empresa. Em vez de criar do zero, podemos criar uma nova classe Funcionario que herda todas as características da classe Pessoa, que representa os atributos e comportamentos básicos de uma pessoa. Isso nos permite reutilizar todo o código já escrito na classe Pessoa e adicionar apenas os atributos e métodos específicos de um funcionário na classe Funcionario.

Quando criamos uma subclasse, podemos executar todos os métodos pertencentes à classe-pai e é possível sobrescrever seus métodos e propriedades para criar novos com outras características. Se na subclasse é escrito um método com o mesmo nome do método existente na classe pai, passa a vigorar o método da classe filha (subclasse). Para acessar os métodos sobrescritos ou membros estáticos da classe pai, utilizamos a palavra reservada "parent".

É importante destacar que somente os métodos protect e public podem ser reescritos e é possível criar novos métodos e propriedades específicos da subclasse. Ao utilizar a herança, podemos economizar tempo e tornar o desenvolvimento mais ágil, reutilizando partes de código já definidas.
