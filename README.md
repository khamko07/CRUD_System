
# Laravel User Management System

A simple CRUD (Create, Read, Update, Delete) application built with Laravel for managing users. This project demonstrates basic user management functionality implemented during training at Pascalia Asia Vietnam.

## Features

- View list of users
- Create new users
- Edit existing users
- Delete users
- Password management
- Form validation
- Flash messages for operations
- Responsive UI with Tailwind CSS

## Prerequisites

- PHP >= 8.0.2 
- Composer
- MySQL
- Node.js and NPM

## Installation

1. Clone the repository:
```sh
git clone https://github.com/khamko07/CRUD_System.git
```

    ```sh
    cd CRUD_System
    ```

2. Install PHP dependencies:
```sh
composer install
```

3. Install JavaScript dependencies:
```sh
npm install
```

4. Copy the example environment file and configure:
```sh
cp .env.example .env
```

5. Generate application key:
```sh
php artisan key:generate
```

6. Configure your database settings in 

.env

 file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

7. Run database migrations:
```sh
php artisan migrate
```

8. Build assets:
```sh
npm run build
```

9. Start development server:
```sh
php artisan serve
```

## Usage

Access the application at `http://localhost:8000` and navigate to the User Management section.

## Technologies Used

- Laravel 9
- MySQL
- Tailwind CSS
- SweetAlert2
- PHP
- JavaScript

## Project Structure

- app
 - Contains core application code
- views
 - Contains Blade templates
- routes
 - Contains route definitions
- migrations
 - Contains database migrations

 ## Screenshots
![Home Page](screenshots/home.jpg)
![View list of users](screenshots/)
![Create new users](screenshots/Create%20new%20users.jpg)
![Delete users](screenshots/Delete%20users.jpg)
![Edit existing users](screenshots/Edit%20existing%20users.jpg)


## Contributing

This is a training project and is not currently accepting contributions.

## License

© 2025 Khamko. All rights reserved.

