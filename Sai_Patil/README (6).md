# Job Portal - Next Hire

## Overview
Next Hire is a web-based job portal developed using PHP and MySQL. It connects job seekers and employers by providing features such as job postings, applications, and profile management. The platform is designed to simplify the job search and recruitment process.

## Features
- User Authentication (Admin, Employer, Job Seeker)
- Profile Management for Employers and Job Seekers
- Job Posting and Management by Employers
- Job Search and Application by Job Seekers
- Application Tracking for Employers
- Admin Dashboard for Monitoring and Management

## Tech Stack
- **Frontend:** HTML, CSS, JavaScript, Bootstrap
- **Backend:** PHP
- **Database:** MySQL

## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/username/next-hire.git
   ```
2. Navigate to the project directory:
   ```bash
   cd next-hire
   ```
3. Import the SQL file to your database:
   ```sql
   CREATE DATABASE next_hire;
   USE next_hire;
   SOURCE database.sql;
   ```
4. Configure database connection in `config.php`:
   ```php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_NAME', 'next_hire');
   ```
5. Start the local server:
   ```bash
   php -S localhost:8000
   ```
6. Open the application in your browser:
   ```
http://localhost:8000
   ```

## Usage
- **Admin:** Manage users, job listings, and applications.
- **Employer:** Post jobs, view applications.
- **Job Seeker:** Create profile, search jobs, apply.

## Folder Structure
- **/config:** Database configuration files.
- **/public:** Frontend files (HTML, CSS, JS).
- **/src:** Backend logic (PHP files).
- **/database:** SQL scripts.

## Contributing
1. Fork the repository.
2. Create a new branch for your feature.
3. Commit your changes.
4. Push the branch and open a pull request.

## License
This project is licensed under the MIT License.


