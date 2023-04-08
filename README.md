# Drupal Password Hash System

This project can be used to validate Plain Text Passwords against Drupal Hashes.


## Instalation

```
docker-compose up
```

## Access

http://localhost:42000/


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

drupal-password-hash-system
