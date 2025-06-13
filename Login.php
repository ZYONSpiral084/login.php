name: CI/CD PHP Login  # Nome da automação que vai aparecer no GitHub Actions

on:  # Define quando a automação vai ser executada
  push:  # Sempre que fizer um "git push"...
    branches:
      - master  # ... na branch "master"
  pull_request:  # Também roda quando fizer um pull request (PR)

jobs:  # Aqui definimos os "trabalhos" que serão feitos
  build:  # Nome do trabalho (pode ser qualquer nome)
    runs-on: ubuntu-latest  # Sistema operacional onde vai rodar (Linux Ubuntu)

    steps:  # Cada "step" é uma etapa da automação
    - name: Checkout código  # Nome da etapa
      uses: actions/checkout@v4  # Ação oficial do GitHub para copiar seu código para a máquina virtual

    - name: Configurar PHP  # Etapa para configurar o PHP
      uses: shivammathur/setup-php@v2  # Ação pronta para instalar o PHP
      with:  # Parâmetro da ação
        php-version: '8.2'  # Define a versão do PHP que será usada

    - name: Instalar dependências  # Etapa para instalar dependências do PHP
      run: |  # Executa comandos no terminal
        sudo apt-get install -y php-cli php-mbstring  # Instala o PHP na linha de comando e uma extensão útil
        echo "Dependências instaladas."  # Mensagem para o log

    - name: Rodar testes  # Etapa para rodar os testes
      run: |  # Executa comandos no terminal
        echo "Simulando testes..."  # Apenas uma mensagem no log
        php -l index.php  # Comando PHP para verificar se o arquivo index.php não tem erros de sintaxe

    - name: Build do projeto  # Etapa de "build" (montar o projeto)
      run: |  # Executa comandos no terminal
        echo "Build realizado com sucesso!"  # Aqui só estamos simulando, com uma mensagem

    - name: Deploy (simulado)  # Etapa de deploy (envio para produção)
      run: |  # Executa comandos no terminal
        echo "Realizando deploy..."  # Só simula o deploy com uma mensagem        