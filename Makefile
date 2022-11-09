install: #install composer
	composer install

brain-games: #start rain-games
	./bin/brain-games

validate: #composer validate
	composer validate

lint: #run linter check
	composer exec --verbose phpcs -- --standard=PSR12 src bin



