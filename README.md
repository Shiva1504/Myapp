# Laravel Job Posting Application

A simple job posting web application built with Laravel. Employers can post jobs, and users can view job listings.

## Features
- User authentication (register/login)
- Employers can post jobs
- Job listings with pagination
- Email notification when a job is posted

## Requirements
- PHP >= 8.1
- Composer
- Node.js & npm (for frontend assets)
- SQLite/MySQL/PostgreSQL (default: SQLite)
- [XAMPP](https://www.apachefriends.org/) or similar local server (optional)

## Setup Instructions

### 1. Clone the Repository
```bash
git clone https://github.com/Shiva1504/Myapp
cd Myapp
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install Node Dependencies (for frontend assets)
```bash
npm install
```

### 4. Copy and Configure Environment File
```bash
cp .env.example .env
```
- Set your database connection in `.env` (default is SQLite):
  - For SQLite, create a `database/database.sqlite` file and set `DB_CONNECTION=sqlite`.
  - For MySQL/PostgreSQL, update the DB settings accordingly.

### 5. Generate Application Key
```bash
php artisan key:generate
```

### 6. Run Migrations and Seeders
```bash
php artisan migrate --seed
```

### 7. (Optional) Compile Frontend Assets
```bash
npm run dev
```

### 8. Start the Development Server
```bash
php artisan serve
```

Visit [http://localhost:8000](http://localhost:8000) in your browser.

## Usage
- Register a new user account.
- (If required) Create an employer profile for your user in the database.
- Post new jobs as an employer.
- View, edit, and delete job listings.

## Troubleshooting
- **Integrity constraint violation:** Make sure all required fields (like `location`) are present in your forms and controllers.
- **Employer required:** Ensure your user has an associated employer record before posting jobs.
- **Email not sending:** Configure your mail settings in `.env`.

## Project Structure
- `app/Http/Controllers/` — Application controllers
- `app/Models/` — Eloquent models
- `resources/views/` — Blade templates
- `routes/web.php` — Web routes
- `database/migrations/` — Database schema

## License
MIT
