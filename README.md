## JobBoard – Laravel 12 Project

A fully functional job listing web application built with Laravel 12 and Blade components.
This project demonstrates full-stack Laravel development with focus on clean backend structure, reusable front-end components, and strong attention to maintainability.
It’s intended as a portfolio project to showcase your Laravel skills to potential employers.

## Features

- Create, view, edit, and delete job posts

- Search and filter jobs by title or category

- Blade Components for reusable UI

 - Custom validation using Form Requests

 - User authentication and ownership (each job belongs to a user)

 - Pagination and responsive layout

 - Optional soft deletes for data retention

## Tech Stack

Backend: Laravel 12

Frontend: Blade templates + Blade components

Styling: Tailwind CSS

Database: MySQL or SQLite

Auth: Laravel Breeze

Testing: PHPUnit or Pest

Dev Tools: Artisan CLI, Laravel Sail (optional)

## Project Structure

app/

├── Http/

│ ├── Controllers/

│ ├── Requests/

│ └── Middleware/

├── Models/

resources/

├── views/

│ ├── components/ (Blade components)

│ └── jobs/ (CRUD views)

routes/

├── web.php

tests/

├── Feature/

└── Unit/

## Installation & Setup

Clone the repository:
git clone https://github.com/Pantelija96/jobboard.git

cd jobboard

Install dependencies:
composer install
npm install

Copy environment file:
cp .env.example .env

Generate app key and run migrations:
php artisan key:generate
php artisan migrate --seed

Run the development server:
php artisan serve

Open the app in your browser:
http://localhost:8000

## Future Improvements

Add company profiles and dashboards

Implement job categories and tagging

Integrate search filters with Livewire or Vue

Add admin panel for managing users and jobs

Improve UI design with advanced Blade layouts

Expand test coverage for controllers and policies

## About the Developer

Pantelija Stošić
Full-Stack Laravel Developer

📧 pantelijastosic@gmail.com

## This project showcases modern Laravel practices and clean code structure. Built to demonstrate strong backend fundamentals, Blade component architecture, and scalable project organization.

## License

This project is open-source under the MIT License.
