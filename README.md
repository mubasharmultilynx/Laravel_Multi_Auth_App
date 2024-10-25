## Multi-Auth Laravel Application

### Requirements
- PHP 8.1 or higher
- Composer
- MySQL

### Installation
1. Clone the repository.
2. Run `composer install`.
3. Run Create Database name """.
3. Copy `.env.example` to `.env` and update the database configuration.
4. Run `php artisan migrate --seed`.
5. Run `php artisan serve` to start the development server.

### User Credentials
- Admin: `admin@devbunch.com` / `12345678`
- Teacher: `teacher@devbunch.com` / `12345678`
- Student: `student@devbunch.com` / `12345678`

### Roles & Permissions
- Admin & Teacher: Can create, read, update, and delete courses.
- Student: Can only view courses.
