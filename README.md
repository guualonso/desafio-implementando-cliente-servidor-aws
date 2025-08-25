# Desafio - Implementando Cliente Servidor na AWS

Este projeto faz parte do desafio proposto para a disciplina de **AWS Cloud**, com o objetivo de implementar uma aplicação cliente-servidor simples utilizando **Apache**, **PHP** e **MariaDB**, hospedados em uma instância EC2.

---

## 🚀 Tecnologias Utilizadas
- **AWS EC2** (Amazon Linux)
- **Apache HTTP Server**
- **PHP**
- **MariaDB**
- **Git & GitHub**
- **phpMyAdmin** (para gerenciamento do banco de dados via interface web)

---

## 📂 Estrutura do Projeto

```
├── index.html       # Página inicial com formulário
├── style.css        # Estilização da página
├── processa.php     # Script PHP que processa os dados do formulário e salva no banco
├── listar.php       # Script PHP para listar registros cadastrados
└── README.md        # Documentação do projeto
```

---

## 🗄️ Banco de Dados

O banco de dados utilizado é o **MariaDB**, com a seguinte configuração:

- **Database**: `meu_site`
- **Tabela**: `cadastro`

### Estrutura da Tabela `cadastro`
```sql
CREATE TABLE cadastro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    mensagem TEXT NOT NULL,
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## ⚙️ Passo a Passo de Instalação

### 1. Atualizar pacotes
```bash
sudo yum update -y
```

### 2. Instalar Apache, PHP e MariaDB
```bash
sudo yum install -y httpd mariadb105-server php php-mysqlnd git
```

### 3. Iniciar serviços
```bash
sudo systemctl enable httpd
sudo systemctl start httpd
sudo systemctl enable mariadb
sudo systemctl start mariadb
```

### 4. Clonar o repositório
```bash
cd /var/www/html
git clone https://github.com/guualonso/desafio-implementando-cliente-servidor-aws.git
```

### 5. Configurar permissões
```bash
sudo chown -R apache:apache /var/www/html/desafio-implementando-cliente-servidor-aws
sudo chmod -R 755 /var/www/html/desafio-implementando-cliente-servidor-aws
```

### 6. Criar o banco de dados
```bash
mysql -u root -p
```

```sql
CREATE DATABASE meu_site;
USE meu_site;

CREATE TABLE cadastro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    mensagem TEXT NOT NULL,
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## ▶️ Executando o Projeto

1. Acesse o navegador no endereço público da instância EC2:  
   ```
   http://SEU-IP-PUBLICO/index.html
   ```

2. Preencha o formulário e clique em **Enviar**.

3. Para listar os cadastros feitos, acesse:
   ```
   http://SEU-IP-PUBLICO/listar.php
   ```

---

## 📌 Observações
- Certifique-se de abrir a **porta 80 (HTTP)** no Security Group da instância EC2.  
- O `phpMyAdmin` pode ser instalado em `/var/www/html/phpMyAdmin` para gerenciar o banco graficamente.  

---

## 📎 Links Importantes
- **Repositório do Projeto no GitHub**: [Desafio Cliente Servidor AWS](https://github.com/guualonso/desafio-implementando-cliente-servidor-aws)

---
