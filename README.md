# React Articles API

## Getting Started

### Installation

1. Clone this repository:

```
git clone https://github.com/frahad/react-articles-api
```

2. Open the project folder:

```
cd react-articles-api
```

3. Install all required dependencies:

```
composer install
```

4. Create the database:

```
create database articles;
```

5. Configure the database connection at `.env` file:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=articles
DB_USERNAME=root
DB_PASSWORD=root
```

6. Run the migrations:

```
php artisan migrate:seed
```

7. Run the PHP development server:

```
php -S localhost:8000 -t ./public
```

### Endpoints

| Method | Route                  | Description                               |
| ------ | ---------------------- | ----------------------------------------- |
| GET    | `/api/articles`        | Display a paginated list of articles.     |
| GET    | `/api/articles/{id}`   | Display a specific article.               |
| POST   | `/articles`            | Store a newly created article in storage. |

### Third-party libraries

- `barryvdh/laravel-cors` to add CORS (Cross-Origin Resource Sharing) headers support to the application.
