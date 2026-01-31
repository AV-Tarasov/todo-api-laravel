# To-Do API Laravel

Простой REST API для управления списком задач (To-Do List) на Laravel.

## Описание

API поддерживает CRUD операции для задач:

- Создание задачи: `POST /api/tasks` (поля: title, description, status)
- Просмотр всех задач: `GET /api/tasks`
- Просмотр одной задачи: `GET /api/tasks/{id}`
- Обновление задачи: `PUT /api/tasks/{id}`
- Удаление задачи: `DELETE /api/tasks/{id}`

## Технологии

- PHP 8.x
- Laravel 10
- MySQL
- Composer
