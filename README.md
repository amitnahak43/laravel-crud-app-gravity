# 🚀 Laravel Product CRUD App (Dockerized)

This Laravel application is a fully Dockerized CRUD system for managing products. It includes authentication, product listing with search & pagination, and uses Laravel Breeze for auth scaffolding.

---

## ✅ Features

- 🔐 User Authentication (Register, Login, Logout)
- 📦 Product CRUD (Create, Read, Update, Delete)
- 🔎 Search by Product Name or Description
- 📄 Pagination (10 items per page)
- 🐳 Docker + Docker Compose setup
- ✨ Clean UI using Laravel Breeze and Tailwind CSS

---

## 🛠️ Tech Stack

- Laravel (latest)
- MySQL 8
- Laravel Breeze (Auth)
- Docker & Docker Compose
- Nginx (as webserver)

---

## 🐳 Docker Setup Instructions

### 🔁 1. Clone the Repository
- git clone https://github.com/amitnahak43/laravel-crud-app-gravity
- cd laravel-crud-app-gravity

## Create DataBase 
- Database Name :  laravel-crud-gravity
    You can set up as per the env file

## Install Dependencies & Migrate DB
- docker-compose up --build -d
- docker-compose exec app composer install
- docker-compose exec app php artisan key:generate
- docker-compose exec app php artisan migrate
- docker-compose exec app npm install
- docker-compose exec app npm run build

## Open in browser:

- http://localhost:8080/
- Credentials 
    Email : admin@example.com
    Password : 12345678

