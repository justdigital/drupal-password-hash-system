# Drupal Password Hash System

This project can be used to validate Plain Text Passwords against Drupal Hashes.


## Instalation

```
docker-compose up
```

## Access

http://localhost:42000/

Code: `public/index.php`


# How to implement in another system

1. Instantiate the Password Checker:
    ```php
    require './PhpassHashedPassword.php';
    $hasher = new PhpassHashedPassword(16);
    ```
2. Use the user email to find the hash in database
    ```php
    $pass = '$$$'; // Password informed by user
    $hash = '$$$'; // Hash saved on database
    ```
3. Pass informed passowrd and hash to the check function
    ```php
    $result = $hasher->check($pass, $hash);
    ```

# optional

## if you want to import the database through the docker admin you can use the adminer

1. go to url localhost:8080

2. select the system, in this case use MySQL

3. add your MySQL server information as per service in docker-composer
    1. Servidor: db
    2. Usuário: admin
    3. Senha: admin
    4. Banco de dados: hash_system

4. click enter

5. click on the import option

6. uncheck the "stop on error" checkbox

7. select the database backup file (<fileBackUp.sql.gz>) you want to import

8. select table users_field_data and click select data.
