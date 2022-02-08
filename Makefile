include .env

up:
	@echo "Starting up containers for $(PROJECT_NAME)..."
	docker-compose pull
	docker-compose up -d --remove-orphans

down: stop

start:
	@echo "Starting containers for $(PROJECT_NAME) from where you left off..."
	@docker-compose start

stop:
	@echo "Stopping containers for $(PROJECT_NAME)..."
	@docker-compose stop