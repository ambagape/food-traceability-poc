This is a POC for a proposed food traceability system for the Nigerian Goverment. This is the repository for the API and back-office. The back-office is built with Nova. So, ensure you have a valid Nova key to use before installing the dependencies.


#To run this:
1) composer install
2) cp .env.example .env
3) php artisan key:grenerate
4) php artisan migrate
5) php artisan serve
