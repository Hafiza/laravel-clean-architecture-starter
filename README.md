# Laravel Clean Architecture Starter

🚧 Project under active development (Day 6 of a 10-day Laravel clean architecture plan)

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
- SQLite (local testing)
- PHPUnit / Pest (planned)
- Docker (planned)

---

## Architecture Philosophy

This project follows a layered structure inspired by Clean Architecture, while staying
pragmatic and aligned with Laravel conventions.

### Layers Overview

- **Domain**  
  Core business rules, entities, policies, and contracts.  
  This layer is framework-agnostic and contains no HTTP or database logic.

- **Application**  
  Use cases and application-level workflows.  
  Coordinates domain logic and enforces business rules.

- **Infrastructure**  
  Framework-specific concerns such as database persistence, queues, and external services.

- **HTTP Layer**  
  Controllers and requests act strictly as input/output boundaries.

The goal is **explicit design over magic** and **clarity over cleverness**.

---

## Architecture Structure

```text
app/
├── Domain/
│   └── User/
│       ├── Data/
│       ├── Policies/
│       │   └── UserPolicy.php
│       └── Repositories/
│           └── UserRepositoryInterface.php
├── Application/
│   └── User/
│       ├── DTOs/
│       │   └── CreateUserDTO.php
│       └── Handlers/
│           └── CreateUserHandler.php
├── Infrastructure/
│   └── User/
│       └── Persistence/
│           └── EloquentUserRepository.php
├── Http/
│   ├── Controllers/
│   │   └── Api/
│   │       └── UserController.php
│   └── Requests/
│       └── User/
│           └── StoreUserRequest.php
└── Providers/
    └── DomainServiceProvider.php



## Getting Started
```bash
composer install
php artisan key:generate
php artisan serve
