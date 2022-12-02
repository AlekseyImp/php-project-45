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

brain-calc: #run brain-calc game
	./bin/brain-calc

brain-gcd: #run barin-gcd game
	./bin/brain-gcd

brain-progression: #run brain-progression game
	./bin/brain-progression




