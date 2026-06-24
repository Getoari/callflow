# CallFlow CRM

A lightweight Call Center Workspace for managing leads, prioritizing opportunities, and tracking sales workflows.

Built as part of the TRE+ Engineering Assessment.

---

# Features

## Lead Scoring

Each lead receives a score from 0-100 based on lead quality indicators.

Scoring rules:

- Company provided: +20
- Email provided: +10
- Phone provided: +10
- Opportunity value >= €10,000: +30
- Existing contact history: +20

Lead classification:

- 80-100: Hot
- 50-79: Warm
- 0-49: Cold


## CRM Management

Users can manage:

- First name
- Last name
- Company
- Email
- Phone
- Notes
- Opportunity value
- Status
- Lead temperature
- Last contact date


## Call Workflow

Leads move through a sales pipeline:

New
↓
Contacted
↓
Follow-up Required
↓
Qualified
↓
Won / Lost


---

# Technology Stack

## Backend

- Laravel
- PHP
- SQLite


## Frontend

- Vue 3
- Inertia.js
- Tailwind CSS
- Vite


---

# Setup

## Requirements

- PHP 8.2+
- Composer
- Node.js
- NPM


# Setup

## Requirements

Make sure you have the following installed:

* PHP 8.2+
* Composer
* Node.js
* NPM
* Git

## Installation

### 1. Clone the repository

```bash
git clone <repository-url>

cd callflow
```

### 2. Install backend dependencies

Install Laravel/PHP dependencies using Composer:

```bash
composer install
```

### 3. Configure environment file

Copy the example environment file:

```bash
cp .env.example .env
```

Generate the Laravel application key:

```bash
php artisan key:generate
```

### 4. Configure database

This project uses SQLite.

Create the database file:

```bash
touch database/database.sqlite
```

Update your `.env` file:

```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

### 5. Run database migrations and seed data

Create the required database tables:

```bash
php artisan migrate
```

(Optional) Populate the database with sample data:

```bash
php artisan db:seed
```

### 6. Install frontend dependencies

Install Node packages:

```bash
npm install
```

### 7. Build frontend assets

For development:

```bash
npm run dev
```

For production build:

```bash
npm run build
```

### 8. Start the Laravel server

Run the application:

```bash
php artisan serve
```

The application will be available at:

```
http://127.0.0.1:8000
```

## Running the project

You need two terminals:

Terminal 1:

```bash
php artisan serve
```

Terminal 2:

```bash
npm run dev
```

## Testing

Run Laravel tests:

```bash
php artisan test
```

## Project Structure

```
app/          - Laravel backend logic
resources/    - Vue/Inertia frontend
database/     - Migrations and seeders
routes/       - Application routes
```
