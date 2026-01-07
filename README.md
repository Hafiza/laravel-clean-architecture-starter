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

This project is structured using a # Laravel Clean Architecture Starter

🚧 Project under active development (Day 2 of a 10-day Laravel clean architecture plan)

This repository demonstrates how I structure Laravel applications for long-term
maintainability, scalability, and team collaboration, following clean architecture
principles adapted for real-world Laravel projects.

---

## Purpose

The goal of this project is to showcase **senior-level Laravel backend engineering** by:

- Applying clean architecture principles in Laravel
- Keeping controllers thin and business logic isolated
- Designing codebases that scale with growing complexity
- Writing code that is easy to test, maintain, and review by teams

This is not a CRUD demo. It is a **reference architecture**.

---

## Tech Stack

- PHP 8.3+
- Laravel 12
- MySQL / PostgreSQL
- PHPUnit / Pest (planned)
- Docker (planned)

---

## Architecture Philosophy

This project follows a layered structure inspired by Clean Architecture, while staying
pragmatic and aligned with Lara
layered approach inspired by Clean Architecture:

- **Domain**: Core business rules and entities
- **Application**: Use cases and application services
- **Infrastructure**: Framework and external concerns (DB, queues, etc.)

The HTTP layer is treated as an input/output boundary only.

## Domain Design

The first domain introduced in this project is the **User domain**.
It owns all user-related business rules, policies, and data contracts.

This approach keeps responsibilities clear as the codebase grows.

## Getting Started
```bash
composer install
php artisan key:generate
php artisan serve
