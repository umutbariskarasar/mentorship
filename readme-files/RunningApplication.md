## How to run containers

```docker-compose build```

```docker-compose up```

## Bash containers

```docker exec -it mentorship_web_1 /bin/bash```

```docker exec -it mentorship_php_1 /bin/bash```

## Running composer

* Bash into the php container

```docker exec -it mentorship_php_1 /bin/bash```

* Update composer

```composer update```

## Show results
```http://localhost:8080/```

## Run tests and Create Coverage Report
```./vendor/bin/phpunit```

## Coverage Report Url
```http://localhost:8080/tests/_reports/coverage/QuicksortTest.php.html```
