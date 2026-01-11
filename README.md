# Coaching App

A Laravel-based web application for managing a coaching institute, including student registration, teacher management, admin functionalities, and notice board.

## Features

- **Student Registration**: Comprehensive registration form with validation for personal details, academic info, and file uploads (signature and photo).
- **Admit Card Generation**: Automatic generation and download of admit cards in PDF format after admin assigns roll numbers.
- **Teacher Management**: Teacher registration, approval by admin, and dashboard access.
- **Admin Dashboard**: Manage students (view, assign roll numbers), teachers (activate/deactivate), and notices (create, edit, delete).
- **Notice Board**: Public display of notices with PDF attachments.
- **Authentication**: Separate guards for students, teachers, and admins.
- **Email Notifications**: Automated emails for registration completion and admit card issuance.

## Tech Stack

- **Backend:** Laravel 12 (PHP 8.2+)
- **Frontend:** Blade Templates, Bootstrap 5, Sass
- **Database:** MySQL
- **PDF Generation:** DomPDF
- **Email:** Laravel Mail
- **Build Tool:** Vite

## Installation

1. **Clone the repository:**
   ```bash
   git clone <your-repo-url>
   cd coaching-app
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies:**
   ```bash
   npm install
   ```

4. **Set up environment:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   Configure your database and mail settings in `.env`.

5. **Run migrations:**
   ```bash
   php artisan migrate --seed
   ```

6. **Link storage for file uploads:**
   ```bash
   php artisan storage:link
   ```

7. **Build assets:**
   ```bash
   npm run build
   ```

## Usage

- **Start the server:**
  ```bash
  php artisan serve
  ```

- **For development with hot reload:**
  ```bash
  npm run dev
  ```

The app will be available at `http://localhost:8000`.

## Routes Overview

### Public Routes
- **Home:** `/` - Displays notices
- **Student Login:** `/student/login` (GET/POST)
- **Student Admit Card:** `/student/admit-card` (authenticated, GET)
- **Student Admit Card Download:** `/student/admit-card/download` (authenticated, GET)
- **Teacher Login:** `/teacher/login` (GET/POST)
- **Teacher Register:** `/teacher/register` (GET/POST)
- **Admin Login:** `/admin/login` (GET/POST)
- **Registration:** `/register/{course}` (GET/POST, e.g., `/register/xi_science`)
- **Faculty:** `/faculty` - Faculty page
- **Sitemap:** `/sitemap.xml` - XML sitemap

### Admin Routes (Authenticated)
- **Admin Dashboard:** `/admin/dashboard`
- **Manage Students:** `/admin/student`
- **View Student:** `/admin/student/view/{id}`
- **Update Roll Number:** `admin/update-roll-no` (POST)
- **Manage Teachers:** `/admin/teacher`
- **Toggle Teacher Status:** `/teacher/toggle-status/{id}` (GET)
- **Manage Notices:** `/admin/notice`
- **Create Notice:** `/admin/notice/create` (GET), `/admin/notice/store` (POST)
- **Edit Notice:** `/admin/notice/edit/{id}` (GET), `/admin/notice/update/{id}` (PUT)
- **Delete Notice:** `/admin/notice/delete/{id}` (DELETE)
- **Admin Logout:** `/admin/logout` (POST)

### Teacher Routes (Authenticated)
- **Teacher Dashboard:** `/teacher/dashboard`
- **Teacher Logout:** `/teacher/logout` (POST)

## Models

- **User** (Student): Handles student data and relationships.
- **Teacher**: Manages teacher accounts.
- **Admin**: Admin authentication.
- **Department**: Teacher departments.
- **Cource**: Available courses.
- **Notice**: Announcements with optional PDF.

## Database Migrations

Key tables:
- `users` (students)
- `teachers`
- `admins`
- `departments`
- `cources`
- `notices`

## Contributing

1. Fork the repository.
2. Create a feature branch (`git checkout -b feature/your-feature`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/your-feature`).
5. Open a Pull Request.

## License

This project is licensed under the MIT License.

