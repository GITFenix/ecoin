up:
	docker-compose up -d

bash:
	docker-compose exec app bash


install:
	docker-compose build
	docker-compose up -d
