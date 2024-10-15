install:
	test -f .env || (cp .env.example .env && sed -i 's/.env.example/.env/g' .env)
	composer install
	npm install --no-package-lock
	./vendor/bin/sail up -d
	./vendor/bin/sail php artisan migrate
	./vendor/bin/sail php artisan db:seed
	./vendor/bin/sail npm run build
up:
	./vendor/bin/sail up -d
