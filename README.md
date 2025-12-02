### Contact API


Simple REST API for managing contacts, built with Laravel and optimized for quick local development using SQLite.

## Features
- CRUD for contacts (name, email, phone)
- Validation and migrations
- SQLite-ready (default)
- PHPUnit tests

## Tech Stack
Laravel · PHP · SQLite · Composer

## Installation
```bash
git clone https://github.com/matos-julio/contact-api.git
cd contact-api
composer install
cp .env.example .env
php artisan key:generate
````

Using SQLite

```bash
mkdir -p database
touch database/database.sqlite
```

Set in `.env`:

```
DB_CONNECTION=sqlite
```

Run migrations:

```bash
php artisan migrate
php artisan serve
```

API runs at: `http://127.0.0.1:8000`

## Endpoints

`GET /api/contacts` — list\
`GET /api/contacts/{id}` — show\
`POST /api/contacts` — create\
`PUT /api/contacts/{id}` — update\
`DELETE /api/contacts/{id}` — delete\

## Example Payload

```json
{
  "name": "John Doe",
  "email": "john@example.com",
  "phone": "21999999999"
}
```

## Author

Júlio Matos\
GitHub: [https://github.com/matos-julio](https://github.com/matos-julio)\
Email: [juliomatoscs@gmail.com](mailto:juliomatoscs@gmail.com)\
Linkedin: [https://www.linkedin.com/in/julio-matoscs/](https://www.linkedin.com/in/julio-matoscs/)
