composer require brightmilk/laravel-owm
или
composer require brightmilk/laravel-owm --prefer-source

php artisan vendor:publish --provider="BrightMilk\LaravelOWM\LaravelOWMServiceProvider"

в конфиг src/config/laravel-owm.php вставить API-ключ, полученный на http://openweathermap.org.

example.com/api/weather?city=krasnodar
example.com/api/weather?city=542415