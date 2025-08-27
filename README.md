# Teacher Management System

A simple **Laravel-based Teacher Management System** that allows users to register, manage, and store teacher details. 
This project demonstrates the use of **MVC architecture in Laravel**, including Models, Controllers, Migrations, and Views.

## Features
- Teacher registration form (with name, gender, DOB, email, address, phone number, grade, and profile photo).
- Store teacher details in the database.
- Upload and display teacher profile photos.
- CRUD operations for managing teachers.
- Follows Laravel MVC structure.

## Project Structure
```
Teacher/
│── app/
│   ├── Http/Controllers/TeacherController.php
│   ├── Models/Teacher.php
│
│── database/
│   ├── migrations/2025_08_15_063526_create_teachers_table.php
│
│── public/
│   ├── storage/teachers/ (Uploaded teacher photos)
│
│── resources/views/teachers/
│   ├── index.blade.php
│   ├── create.blade.php
│   ├── edit.blade.php
│
│── routes/web.php
```

## Requirements
- PHP >= 8.1
- Composer
- Laravel 12
- MySQL / MariaDB

## Installation & Setup
1. Clone the repository:
   ```bash
   git clone https://github.com/kpj31/teacher-management.git
   cd teacher-management
   ```
2. Install dependencies:
   ```bash
   composer install
   ```
3. Copy `.env.example` to `.env` and update database credentials:
   ```bash
   cp .env.example .env
   ```
4. Generate application key:
   ```bash
   php artisan key:generate
   ```
5. Run migrations:
   ```bash
   php artisan migrate
   ```
6. Create storage link (for images):
   ```bash
   php artisan storage:link
   ```
7. Start the server:
   ```bash
   php artisan serve
   ```

## Usage
- Visit `http://127.0.0.1:8000/teachers`
- Add, edit, view, and delete teacher records.

## License
This project is licensed under the MIT License.
