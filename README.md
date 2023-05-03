## Установка проекта
1. cp .env.example .env
2. docker compose build
3. docker compose up -d
4. docker exec -it modul_app composer install
5. docker exec -it modul_app npm install
6. docker exec -it modul_app php artisan key:generate
7. docker exec -it modul_app php artisan migrate:fresh

## [Информация по таблицам БД](docs/table.md)
