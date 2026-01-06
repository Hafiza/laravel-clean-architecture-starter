# Laravel Clean Architecture Starter

🚧 Project under active development (Day 1 of a 10-day Laravel clean architecture plan)

This project demonstrates how I structure Laravel applications for long-term
maintainability, scalability, and team collaboration.

## Purpose
- Showcase clean architecture principles in Laravel
- Keep controllers thin and business logic isolated
- Make the codebase easy to test and extend

## Tech Stack
- PHP 8.3+
- Laravel 12
- MySQL / PostgreSQL
- PHPUnit / Pest (planned)

## Architecture Philosophy
This project follows a layered approach inspired by Clean Architecture:

- Domain: business rules
- Application: use cases
- Infrastructure: framework & persistence
- HTTP layer: request/response only

The goal is clarity over cleverness and explicit design over magic.

## Architecture Structure

This project is structured using a layered approach inspired by Clean Architecture:

- **Domain**: Core business rules and entities
- **Application**: Use cases and application services
- **Infrastructure**: Framework and external concerns (DB, queues, etc.)

The HTTP layer is treated as an input/output boundary only.

## Getting Started
```bash
composer install
php artisan key:generate
php artisan serve
