# 🧾 Laravel To-Do List App (Dockerized)

This is a simple Laravel To-Do List application running in a Docker environment with Apache, MySQL.

## 🚀 Features:

-   Laravel 12
-   Apache server (via Docker)
-   MySQL 8.0.40 database
-   Dockerized development setup

## 🧱 Requirements:

-   [Docker](https://www.docker.com/)
-   [Docker Compose](https://docs.docker.com/compose/)
-   Laravel installed (already included in this project)

## ⚙️ Installation & Setup:

**Clone the project**

```bash
git clone https://github.com/smritipoudel98/new-laravel.git
cd new-laravel
```

## ⚙️ Docker Setup:

-Create Dockerfile and docker-compose.yml
--Dockerfile::-dockerimage used(baseimage:PHP 8.2.12 + Apache)
-php extensions installed(extensions:`pdo`, `pdo_mysql`, `mbstring`, `gd`)
-Apache `mod_rewrite` enabled(Required for Laravel’s routing)
[It’s an Apache module used for URL rewriting.]
-Laravel handles routing via public/index.php

     --docker-compose.yml::- 🔧 1. app (Laravel + Apache)
     Builds from the custom Dockerfile in your project root.

                            Exposes port 8000 on your machine → Laravel app available at http://   localhost:8000.

                            Mounts the current project directory into the container (/var/www/html).

                            Depends on the MySQL service to ensure it starts after the database is ready.

                            Environment Variable:
                            DB_HOST=mysql — tells Laravel to connect to the mysql service defined below.

                      🐬 2. mysql (Database)
                           Uses the official MySQL 5.7 image.
                           Exposes port 3306 to the host (so you can connect using tools like phpMyAdmin or DBeaver).

                          Environment Variables:
                          MYSQL_DATABASE=new_laravel — creates this database at startup.
                          MYSQL_ROOT_PASSWORD=root — sets the root password to root.

                          Volumes:
                          Persists database data in a Docker volume (mysql_data) even when the container is stopped or rebuilt.

---

🧪 Running the Project with Docker:

Step 1: Build and start the containers:-
docker-compose up --build

       -This command builds your Docker images (from the Dockerfile) and starts the containers defined in docker-compose.yml.

       -The app service runs your Laravel application.

       -The mysql service runs the MySQL database.

Step 2: Access the Laravel container shell:-
docker exec -it todo-lists bash

       -This opens an interactive shell inside your Laravel app container (todo-lists is the container name).

       -You can run Laravel Artisan and Composer commands here.(php artisan migrate)

Step 3: Set up Laravel inside the container:-
composer install
php artisan key:generate
php artisan migrate

    -composer install: installs PHP dependencies.
    -php artisan key:generate: generates the application key.
    -php artisan migrate: creates the database tables.

Step 4: Access your application and database:-
Laravel app: http://localhost:8000

🧯 Troubleshooting & Docker Commands:

docker-compose down :Stop and remove all running containers
docker-compose down -v :Stop and remove containers and delete all volumes (⚠️ deletes MySQL data)
docker ps :List all currently running containers
docker-compose logs :View logs from all services (helpful for debugging issues)

After fixing errors in your Dockerfile or .env, it's a good idea to:
docker-compose down -v
docker-compose up --build
