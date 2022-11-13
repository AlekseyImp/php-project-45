install: #install composer
	composer install

brain-games: #start brain-games
	./bin/brain-games

validate: #composer validate
	composer validate

lint: #run linter check
	composer exec --verbose phpcs -- --standard=PSR12 src bin

brain-even: #run brain-even game
	./bin/brain-even



