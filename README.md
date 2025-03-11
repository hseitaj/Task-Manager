# TaskManager

TaskManager is a simple web application for managing tasks built using **PHP**, **MySQL**, and a bit of **JavaScript**. This project is designed as an introduction to PHP for developers coming from a Python background. It illustrates how to set up a basic PHP project, connect to a MySQL database using PDO, and add simple client-side interactivity.

---

## Table of Contents

- [Overview](#overview)
- [Project Structure](#project-structure)
- [Deep Dive: PHP for Python Developers](#deep-dive-php-for-python-developers)
- [Setup Instructions](#setup-instructions)
- [Running the Application](#running-the-application)
- [Using Git](#using-git)
- [Additional Resources](#additional-resources)

---

## Overview

**TaskManager** demonstrates how to build a basic CRUD (Create, Read, Update, Delete) application with PHP. The project uses:

- **PHP:** For server-side scripting and handling HTTP requests.
- **MySQL:** For data storage and retrieval using a relational database.
- **JavaScript:** To provide basic interactivity on the client side.
- **Git:** For version control, enabling you to track and manage changes in your project.

---

## Project Structure
```
TaskMaster/
├── app/
│   ├── config.php        # Database and app configuration.
│   ├── database.php      # Database connection logic.
│   └── controllers/
│       └── TaskController.php  # Example controller for tasks.
├── public/
│   ├── index.php         # Entry point for the application.
│   ├── css/
│   │   └── style.css     # CSS styles.
│   └── js/
│       └── app.js        # Front-end JavaScript.
├── docker-compose.yml    # Docker Compose configuration.
├── Dockerfile            # (Optional) Dockerfile for PHP application.
├── db/
│   └── init.sql          # SQL script to create the database schema.
├── .gitignore            # Files/folders to exclude from Git.
└── README.md             # Project overview and instructions.
```


*Explanation:*
- **app/** contains the PHP files handling configuration and database connections.
- **public/** holds the web-accessible files like the main page, styles, and JavaScript.
- **db/** contains the SQL script to set up your database.
- **.gitignore** ensures that temporary files and local configurations are not pushed to Git.
- **README.md** is your guide to understand, set up, and run the project.

---

## Deep Dive: PHP for Python Developers

If you're coming from Python, here are some key points to understand PHP in the context of this project:

### Language and Syntax
- **PHP vs. Python:**  
  PHP is primarily used for web development and is embedded within HTML. Unlike Python, which is a general-purpose language, PHP code is interpreted on the server to produce HTML.
  
- **File Inclusion:**  
  PHP uses `require_once` or `include` to import code from other files. In our project, `database.php` includes `config.php` to use its constants.
  
- **Error Handling:**  
  PHP uses exceptions (try/catch blocks) similar to Python. In our PDO connection, we catch a `PDOException` to handle database connection errors.

### Web Server Context
- **Embedded in HTML:**  
  PHP scripts can be mixed with HTML. The `index.php` file shows PHP embedded within HTML to dynamically generate page content.
  
- **Server-side Execution:**  
  Unlike Python scripts you might run with `python script.py`, PHP code is executed on the server when a page is requested. This makes PHP ideal for building dynamic web pages.

### Database Interaction
- **PDO (PHP Data Objects):**  
  This is a robust method for connecting to a database, similar to using libraries like SQLAlchemy in Python. It provides a consistent interface for various databases and supports prepared statements for security.

### Project Workflow
- **Routing:**  
  For this simple project, all requests go to `index.php`. More advanced PHP applications often use a framework (like Laravel or Symfony) to manage routing, controllers, and views.
  
- **Learning Curve:**  
  Coming from Python, you might notice that PHP’s syntax is similar in many ways (e.g., if-else structures, loops), but you must pay attention to PHP-specific conventions like variable declaration with a `$` prefix.

---

## Setup Instructions

### 1. Set Up the Database
- **Create the Database:**  
  Use your MySQL client to create a database named `taskmanager`.

- **Update Configuration:**  
  Open `app/config.php` and update the following constants with your MySQL credentials:
  ```php
  define('DB_HOST', 'localhost');
  define('DB_NAME', 'taskmanager');
  define('DB_USER', 'your_username');
  define('DB_PASS', 'your_password');
