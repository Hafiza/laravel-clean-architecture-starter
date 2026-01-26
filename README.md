# Laravel Clean Architecture Starter

🚧 Project under active development (Day 8 of a 10-day Laravel clean architecture plan)

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
- MySQL / PostgreSQL (production-ready)
- SQLite (isolated testing)
- PHPUnit / Pest
- Docker (planned)

---

## Architecture Philosophy

This project follows a layered structure inspired by Clean Architecture, while staying
pragmatic and aligned with Laravel conventions.

### Layers Overview

- **Domain**  
  Core business rules, policies, and contracts.  
  Framework-agnostic and independent from HTTP or persistence concerns.

- **Application**  
  Use cases and application workflows.  
  Orchestrates domain logic and enforces business rules.

- **Infrastructure**  
  Database persistence and framework-specific implementations.

- **HTTP Layer**  
  Controllers and requests acting strictly as input/output boundaries.

The guiding principle is **explicit design over magic**.

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

## Domain Design
The User domain represents the core business concepts and rules related to users,
independent of how those users are stored, displayed, or transported.