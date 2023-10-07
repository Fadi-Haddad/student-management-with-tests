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

6. Navigate to student-managment-backend folder
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
    
    * Start the Laravel app
    ```sh
    php artisan serve
    ```
7. Test the APIs available inside APIs.txt With a Testing Tool Like POSTMAN