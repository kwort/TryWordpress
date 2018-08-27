.DEFAULT_GOAL := help
ARGS = $(filter-out $@,$(MAKECMDGOALS))

up: ## Start the stack
	docker-compose up -d

down: ## Stop the stack
	docker-compose down

bash: ## start a term from container
	docker-compose exec wordpress bash

help: ## show help
	@grep -P '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'

%:
	@:
