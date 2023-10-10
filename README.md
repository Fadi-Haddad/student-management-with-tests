<!-- How to run -->

> To run this project locally, follow these steps:

### Prerequisites

1. Download Node.js from [https://nodejs.org/en/download]
    
2. Download XAMPP from [https://www.apachefriends.org/download.html]

3. Download Composer from [https://getcomposer.org/download/]

### Installation

1. Make sure to run MySQL and Apache from XAMPP

2. Run your favorite terminal tool inside the project's directory

3. Clone the repository to your local machine
    ```sh
    git clone https://github.com/Fadi-Haddad/student-management.git
    ```

4. Run the following command to install Laravel dependencies
    ```sh
    composer install
    ```
5. Rename .env.example file to .env and change database settings to suit your environment

6. Generate a new key for Laravel App:
    ```sh
    php artisan key:generate
    ```
7. Run the following command to install Vite:
    ```sh
    npm install --save-dev vite laravel-vite-plug
    ```
8. Navigate to student-managment-backend folder
    * Create the database tables
    ```sh
    php artisan migrate
    ```
    * Seed the project's tables:
    ```sh
    php artisan db:seed --class=CoursesTableSeeder
    ```
    ```sh
    php artisan db:seed --class=StudentsTableSeeder
    ```
    ```sh
    php artisan db:seed --class=UsersTableSeeder
    ```
    * Open a second terminal and run the following:
    ```sh
    npm run dev
    ```
    * Start the Laravel app (in the first terminal)
    ```sh
    php artisan serve
    ```
9. Test the APIs available inside APIs.txt with a testing tool like POSTMAN
10. For the feature testing and test coverage, Run the following commands :
    
    * Feature testing:
    ```sh
    php artisan test tests/Feature/ExampleTest.php
    ```
    * Test coverage:
    ```sh
    vendor/bin/phpunit --coverage-html coverage-report
    ```