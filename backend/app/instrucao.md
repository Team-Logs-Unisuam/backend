## /core: Camada mais interna com a lógica de negócio pura. Não depende de frameworks. Aqui vão as entidades e os casos de uso.


## /domain : Aqui ficam as entidades e os casos de uso da aplicação. É a camada mais interna e não depende de frameworks.

## /infrastructure: Integra a lógica de negócio com frameworks e tecnologias externas. Inclui controladores, repositórios, e serviços.




## /interfaces: Onde as interações com o mundo externo acontecem, como requisições HTTP e visualizações. Views do MVC são incluídas aqui.

## /config: Configurações de ambiente e outros detalhes globais.

### controllers

- Recebem requisições HTTP e chamam os casos de uso.
- Dependem de frameworks.

### repositories

- Implementam a interface dos repositórios definida no core.
- Dependem de frameworks.

### services

- Implementam a interface dos serviços definida no core.
- Dependem de frameworks.

### Entidades
- Representam os objetos do domínio da aplicação.
- Não possuem comportamento, apenas atributos.
- São imutáveis.
- Não dependem de frameworks.

### usecases

- Representam as ações que podem ser realizadas na aplicação.
- Não dependem de frameworks.
- Não possuem detalhes de implementação.
- São independentes de interfaces.
