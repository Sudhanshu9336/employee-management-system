# Employee Management System

## 📌 Description

This is a web-based Employee Management System developed using PHP and MySQL.
It allows users to manage employee records efficiently through a simple and user-friendly interface.

---

## 🚀 Features

* ➕ Add Employee (Save Data)
* 🔍 Search Employee by ID
* ✏️ Update Employee Details
* ❌ Delete Employee Record
* 🧹 Clear Form Inputs

---

## 🛠️ Technologies Used

* PHP
* MySQL
* HTML
* CSS

---

## 🗄️ Database Structure

```sql
CREATE DATABASE employee_db;

USE employee_db;

CREATE TABLE employees (
    id INT PRIMARY KEY,
    name VARCHAR(50),
    gender VARCHAR(10),
    email VARCHAR(50),
    department VARCHAR(50),
    address TEXT
);
```

---

## ▶️ How to Run the Project

1. Install XAMPP
2. Start Apache and MySQL
3. Copy the project folder to:

   ```
   C:\xampp\htdocs\
   ```
4. Open phpMyAdmin:

   ```
   http://localhost/phpmyadmin
   ```
5. Create database `employee_db` and run the SQL script
6. Run the project in browser:

   ```
   http://localhost/employee-management-system/form.php
   ```

---

## 📂 Project Structure

```
employee-management-system/
│
├── form.php
├── connection.php
├── style.css
├── README.md
```

---

## 👨‍💻 Author

**Sudhanshu Gupta**

* GitHub: https://github.com/Sudhanshu9336

---

## 📌 Note

This project runs on a local server (XAMPP) because it uses PHP and MySQL.
GitHub Pages does not support PHP execution.
