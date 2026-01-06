# Laravel Clean Architecture Starter

This project demonstrates how I structure Laravel applications for long-term
maintainability, scalability, and team collaboration.

## Purpose
- Showcase clean architecture principles in Laravel
- Keep controllers thin and business logic isolated
- Make the codebase easy to test and extend

## Tech Stack
- PHP 8.3+
- Laravel 12
- PostgreSQL
- PHPUnit / Pest (planned)

## Architecture Philosophy
This project follows a layered approach inspired by Clean Architecture:

- Domain: business rules
- Application: use cases
- Infrastructure: framework & persistence
- HTTP layer: request/response only

The goal is clarity over cleverness and explicit design over magic.

## Getting Started and clean
```bash
composer install
php artisan key:generate
php artisan serve

