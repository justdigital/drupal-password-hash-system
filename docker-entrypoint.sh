#!/bin/bash

# Copie o arquivo de inicialização SQL para o diretório de inicialização do MySQL
cp /docker-entrypoint-initdb.d/init.sql /docker-entrypoint-initdb.d/

# Inicie o contêiner do MySQL
/docker-entrypoint.sh "$@"
