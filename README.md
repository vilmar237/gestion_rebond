# Rebond | Multi-Sport Facility Booking Platform

A web application for booking time slots at a multi-purpose sports facility.
The venue hosts **football, basketball, volleyball and handball**, and this
platform lets clubs, teams and individuals reserve the field online rather
than by phone or in person.

## Features

- Browse available time slots by date and by sport
- Reserve the field for a chosen activity
- Manage bookings through a web interface

## Tech stack

- **Framework:** Laravel
- **Language:** PHP
- **Templating:** Blade
- **ORM:** Eloquent
- **Database:** MySQL
- **Frontend:** HTML, CSS, JavaScript

## Running it locally

git clone https://github.com/vilmar237/NOM-DU-DEPOT.git
cd NOM-DU-DEPOT

composer install
cp .env.example .env
php artisan key:generate

Configure your database credentials in `.env`, then run
`php artisan migrate` and `php artisan serve`. The app runs at
http://localhost:8000.

## Context

The facility handles four different sports on shared space, so the core
problem was scheduling: making sure a slot booked for one activity can't be
double-booked for another. Laravel was chosen for its built-in routing,
authentication scaffolding and Eloquent ORM, which kept the data
relationships between users, slots and bookings straightforward to express.

## Notes

The project has no automated tests — that's its main weakness and the first
thing I'd add. I'd also extract the availability-checking logic out of the
controllers into a dedicated service class so it could be tested and reused.

---

*Built by [Vilmar Djilo](https://linkedin.com/in/vilmar-djilo) · Ottawa, ON*
