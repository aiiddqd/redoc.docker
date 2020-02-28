# Redoc App for render HTML Docs from OpenAPI

- off site https://redocly.github.io/redoc/
- url: http://redoc.local/
- chg /etc/hosts: 
```
127.0.0.1 redoc.local
```

# Generate zero-dependency HTML file

1. Заходим в контейнер и генерим HTML 
```
docker exec -ti npm-app /bin/bash
npx redoc-cli bundle openapi.yaml
```
2. проверяем файл в app/redoc-static.html

# Example 

![Example](https://raw.githubusercontent.com/uptimizt/redoc.docker/master/example.png?token=AAOELYN2IBRN6ZXFZGOILJC6MHYDE "Example")


# Makefile commands
- `make up` - start app
- `make log` - display log from docker
- `make stop`
- `make restart`


# Snippets

## php composer setup
```
docker-compose run php-app composer install
```

## php app shell
```
docker exec -ti php-app /bin/sh
docker exec -ti php-app /bin/bash

docker exec -ti npm-app /bin/bash
```
