.DEFAULT_GOAL := help

singleton: ## Design Patterns Creational
	./java.sh DesignPatterns/Singleton/index.java

openclose: ## Open Close SOLID
	./java.sh Solid/OpenClosePrincipe/index.java

liskovsubstitution: ## Liskov Substitution SOLID
	./java.sh Solid/LiskovSubstitution/index.java

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-16s\033[0m %s\n", $$1, $$2}'
