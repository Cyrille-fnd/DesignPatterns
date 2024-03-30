ifneq ("$(wildcard /.dockerenv)","") # if in docker
	EXEC_WWW=
else
	EXEC_WWW=docker compose -p singleton exec php_fpm
endif

start:
	docker compose up -d

stop:
	docker compose stop

down:
	docker compose down

build:
	docker compose build --no-cache

restart: stop start

reload: down build start

ps:
	docker compose ps

sh:
	$(EXEC_WWW) /bin/sh
