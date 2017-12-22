.DEFAULT_GOAL := help

singleton: ## Design Patterns Creational
	./php.sh DesignPatterns/Singleton/index.php


help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-16s\033[0m %s\n", $$1, $$2}'
