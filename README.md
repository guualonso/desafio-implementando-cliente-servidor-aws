# Formulário de Cadastro - AWS Cloud Sandbox

Este projeto é um **formulário de cadastro** desenvolvido em **HTML + Bootstrap**, integrado ao **PHP** com **MariaDB** para persistência de dados.  
Ele foi configurado e testado em um ambiente **AWS Cloud Sandbox** utilizando **Apache, PHP e MariaDB**.

---

## 🚀 Tecnologias Utilizadas
- **HTML5** + **CSS3**  
- **Bootstrap 5** (CDN)  
- **PHP 8**  
- **MariaDB**  
- **Apache HTTP Server**  

---

## 📂 Estrutura de Arquivos
```
.
├── index.html        # Página principal com o formulário
├── styles.css        # Estilização adicional do formulário
├── processa.php      # Script PHP que processa e insere os dados no banco
└── README.md         # Documentação do projeto
```

---

## ⚙️ Configuração do Banco de Dados
1. Acesse o MariaDB no sandbox:
   ```bash
   mysql -u root -p
   ```

2. Crie o banco e a tabela:
   ```sql
   CREATE DATABASE meu_site;
   USE meu_site;

   CREATE TABLE cadastro (
       id INT AUTO_INCREMENT PRIMARY KEY,
       nome VARCHAR(100) NOT NULL,
       idade INT NOT NULL,
       endereco VARCHAR(150) NOT NULL,
       isento TINYINT(1) DEFAULT 0,
       periodo VARCHAR(20) NOT NULL,
       observacoes TEXT
   );
   ```

---

## ▶️ Como Executar
1. Clone este repositório no servidor AWS (ou local):
   ```bash
   git clone <url-do-repositorio>
   ```

2. Coloque os arquivos na pasta pública do Apache (geralmente `/var/www/html`).

3. Ajuste as credenciais do banco em `processa.php`:
   ```php
   $host = "localhost";
   $usuario = "root";
   $senha = "sua_senha";
   $banco = "meu_site";
   ```

4. Acesse pelo navegador:
   ```
   http://localhost/index.html
   ```

---

## 📝 Fluxo de Funcionamento
1. O usuário preenche o formulário em `index.html`.  
2. Ao enviar, os dados são enviados via `POST` para `processa.php`.  
3. O PHP insere os dados na tabela `cadastro` no MariaDB.  
4. Uma mensagem de confirmação é exibida na tela.  

---

## 📌 Observação
Este projeto faz parte de um desafio prático para a **AWS Cloud**, demonstrando integração entre **frontend (HTML/Bootstrap)** e **backend (PHP/MariaDB)** no ambiente **LAMP**.
