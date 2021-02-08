help: ## Prints this help.
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'

current-dir := $(dir $(abspath $(lastword $(MAKEFILE_LIST))))

.PHONY:build
build: ## Build docker environment
	@docker-compose build --no-cache
start: ## Start all docker-compose
	@docker-compose up -d
stop: ## Stop all docker-compose
	@docker-compose stop
destroy: ## Down all docker compose
	@docker-compose down

composer: ## 🐘 Composer install
	@docker-compose exec base-php composer install

install: ## Execute installation
	@docker-compose build --no-cache
	@docker-compose up -d
	@docker-compose exec base-php composer install
tests: ## Run all tests
	@docker-compose exec base-php composer tests
bash: ## Run console docker
	@docker-compose exec base-php bash