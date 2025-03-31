# TesteCrudAlphacode

Este projeto é uma aplicação CRUD desenvolvida em PHP e MySQL para gerenciar contatos.

## Como Configurar e Executar o Projeto

### **1. Pré-requisitos**
Antes de começar, certifique-se de ter os seguintes programas instalados:
- [XAMPP](https://www.apachefriends.org/pt_br/index.html) (para rodar Apache e MySQL)
- [MySQL Workbench](https://www.mysql.com/downloads/) (para gerenciar o banco de dados)

### **2. Clonar o Repositório**
Abra o terminal e execute dentro da pasta xammp/htdocs/:
```bash
git clone https://github.com/HenrickSilva04/TesteCrudAlphacode.git
```
Isso criará uma pasta chamada `TesteCrudAlphacode` dentro de `htdocs`.

### **3. Criar o Banco de Dados**
1. Abra o **MySQL Workbench** e conecte-se ao servidor MySQL.
2. Execute o script SQL localizado em:
   ```
   TesteCrudAlphacode/app/models/DatabaseScript.sql
   ```
   Isso criará o banco de dados e as tabelas necessárias.

### **4. Configurar Conexão com o Banco**
Abra o arquivo:
```
TesteCrudAlphacode/config/database_connection.php
```
E altere a variável `password` para corresponder à senha do seu ambiente MySQL:
```php
$connection = mysqli_connect('localhost', 'root', 'SUA_SENHA_AQUI', 'nome_do_banco');
```
Caso seu MySQL não tenha senha definida, deixe a string vazia `''`.

### **5. Iniciar o Servidor Apache**
1. Abra o **XAMPP Control Panel**.
2. Inicie o serviço **Apache**.

### **6. Acessar o Sistema**
Abra um navegador e digite:
```
http://localhost/TesteCrudAlphacode
```
Agora, o sistema estará pronto para uso! 

---

## 📌 Funcionalidades
- 📋 Listagem de contatos
- ✏️ Edição de contatos
- ❌ Exclusão com confirmação
- ➕ Cadastro de novos contatos
