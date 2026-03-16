# Student Grade Management System 🎓

A simple, user-friendly web application to manage student marks and calculate grades automatically. This project was built to demonstrate PHP basics and MySQL integration.

## 🚀 Features
* **Add Students:** Input student names and marks through a clean UI.
* **Automatic Grade Calculation:** PHP logic determines grades (A, B, C, S, F) based on marks.
* **Data Persistence:** Saves all records in a MySQL database.
* **Responsive Design:** Styled with **Bootstrap 5** for a professional look.
* **History Table:** View all previously entered student records in a sorted table.

## 🛠️ Tech Stack
* **Backend:** PHP
* **Database:** MySQL
* **Frontend:** HTML5, CSS3, Bootstrap 5

## 📋 Prerequisites
To run this project locally, you need:
* **XAMPP** or **WAMP** installed.
* Apache and MySQL services running.

## ⚙️ Installation & Setup

1. **Clone or Download:**
   Download this project and move it to your XAMPP `htdocs` directory.

2. **Database Setup:**
   * Open **phpMyAdmin** (`localhost/phpmyadmin`).
   * Create a new database named `school_db`.
   * Go to the **SQL** tab and run the following query:
   ```sql
   CREATE TABLE students (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       marks INT NOT NULL,
       grade VARCHAR(5),
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
3. **Configure Database Connection:**
   * Make sure the credentials in `includes/db.php` match your local server settings.
     
4. **Run the App:**
   * Open your browser and navigate to:
       `http://localhost/student-manager/index.php`

## 📂 Folder Structure

```text
student-manager/
├── assets/          # Custom CSS files
├── includes/        # Database connection logic
├── sql/             # Database schema (SQL files)
├── index.php        # Main User Interface
└── process.php      # Data processing and Logic
```

## 📜 License
This project is open-source and available under the MIT License.
   
