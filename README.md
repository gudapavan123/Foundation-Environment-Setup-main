# Student Management System (PHP + MySQL + JavaScript)

## Project Overview

This project demonstrates a simple Student Management System built using
**HTML, JavaScript, PHP, and MySQL**. The application connects a
frontend form with a MySQL database using PHP.

It allows users to: - Connect PHP with MySQL - Insert student data -
Display student records - Perform basic CRUD operations

This project is created for learning **Full Stack Web Development
basics**.

------------------------------------------------------------------------

## Technologies Used

-   HTML
-   JavaScript
-   PHP
-   MySQL
-   XAMPP Server
-   phpMyAdmin
-   Git & GitHub

------------------------------------------------------------------------

## Features

-   PHP--MySQL database connection
-   Insert student records into database
-   Display stored records
-   JavaScript form validation
-   Primary Key implementation
-   Foreign Key relationship example
-   Basic CRUD functionality

------------------------------------------------------------------------

## Project Structure

PHP-PROJECT\
├── connect.php\
├── view.php\
├── index.html\
├── script.js\
└── README.md

------------------------------------------------------------------------

## Database Setup

### Create Database

``` sql
CREATE DATABASE student_db;
```

### Create Students Table

``` sql
CREATE TABLE students (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50),
email VARCHAR(100)
);
```

### Create Courses Table (Foreign Key Example)

``` sql
CREATE TABLE courses (
course_id INT AUTO_INCREMENT PRIMARY KEY,
student_id INT,
FOREIGN KEY (student_id) REFERENCES students(id)
);
```

------------------------------------------------------------------------

## PHP Database Connection Example

``` php
<?php

$conn = mysqli_connect("localhost","root","","student_db");

if(!$conn){
    die("Connection Failed");
}

echo "Database Connected Successfully";

?>
```

------------------------------------------------------------------------

# Sample Output

## 1. Database Connection Output

When running:

http://localhost/PHP-PROJECT/connect.php

Output:

Database Connected Successfully

------------------------------------------------------------------------

## 2. Student Registration Form (Frontend)

Example page:

  ---------------------------
  Student Registration Form
  ---------------------------

Name: \[\_\_\_\_\_\_\_\_\_\_\_\_\_\_\]

Email: \[\_\_\_\_\_\_\_\_\_\_\_\_\_\_\]

Course: \[\_\_\_\_\_\_\_\_\_\_\_\_\_\_\]

## Submit

JavaScript validates the form before submission.

------------------------------------------------------------------------

## 3. JavaScript Validation Output

If fields are empty and user clicks Submit:

Alert Message:

"Name field cannot be empty"

------------------------------------------------------------------------

## 4. Data Stored in MySQL Database

Example Students Table:

  id   name       email
  ---- ---------- --------------------
  1    Pavan     pavan@gmail.com
  2    Ameer     ameer@gmail.com
  3    Purush    purush@gmail.com

------------------------------------------------------------------------

## 5. Display Records using PHP

When running:

http://localhost/PHP-PROJECT/view.php

Example Browser Output:

Student Records

ID: 1\
Name: Pavan\
Email: pavan@gmail.com

ID: 2\
Name: Ameer\
Email: ameer@gmail.com

ID: 3\
Name: Purush\
Email: purush@gmail.com

------------------------------------------------------------------------

## How to Run the Project

1.  Install XAMPP
2.  Start Apache and MySQL
3.  Move project folder to:

C:`\xampp`{=tex}`\htdocs`{=tex}

4.  Open browser and run:

http://localhost/PHP-PROJECT/connect.php

5.  View records:

http://localhost/PHP-PROJECT/view.php

------------------------------------------------------------------------

## Learning Outcomes

-   Understand PHP and MySQL integration
-   Learn database CRUD operations
-   Use JavaScript for form validation
-   Implement database relationships
-   Run PHP projects using XAMPP

------------------------------------------------------------------------

## Author

Internship Project -- Full Stack Web Development
