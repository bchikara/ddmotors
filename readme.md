# PHP Controller Selector App

A simple PHP + MySQL + TailwindCSS project with two tasks:

- **Task 1**: A controller selector form that submits data using PHP and stores it in a MySQL database.
- **Task 2**: A floating "Tips" button that toggles a hidden info box using JavaScript.

---

## 🔧 Requirements

- PHP 8+
- MySQL
- TailwindCSS (via CDN)
- Local server (e.g. Apache via MAMP or XAMPP)
- macOS or Linux or Windows

---

## 📁 Folder Structure

controller-selector/
│
├── index.php # Main form + toggle page
├── db.php # Secure PDO connection logic
├── .env # DB credentials (not committed)
├── .env.example # Example env file
├── save.php # Handles form submission via POST
├── style.css # Optional extra CSS
├── README.md # You are here
└── sql/
└── init.sql # SQL to create the table

yaml
Copy
Edit

---

## 🛠️ Setup Instructions

### 1. Clone or Download the Project

```bash
git clone https://github.com/yourusername/controller-selector.git
cd controller-selector
2. Create .env File
Create a .env file in the root folder:

env
Copy
Edit
DB_HOST=localhost
DB_NAME=controller_db
DB_USER=root
DB_PASS=your_password
You can copy from .env.example:

bash
Copy
Edit
cp .env.example .env
3. Create the MySQL Table
Import the SQL schema:

sql
Copy
Edit
-- File: sql/init.sql

CREATE TABLE controllers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    controller_type VARCHAR(100) NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
4. Run the App
Use MAMP/XAMPP or PHP’s built-in server:

bash
Copy
Edit
php -S localhost:8000
Visit: http://localhost:8000

✅ Task Details
✅ Task 1: Form + DB
Input fields for Name and Controller Type.

On form submission:

Validates inputs.

Inserts data into MySQL DB using PDO.

Shows confirmation on the same page.

✅ Task 2: Tips Toggle Button
Floating Tips button at bottom-right.

Clicking toggles a styled tips box.

Tips box uses TailwindCSS for clean UI.

JS handles the toggle; PHP loads the page.

🛡️ Security
Uses PDO with error handling.

Environment variables used for DB credentials (via .env).

🧪 Testing
Try submitting form with valid and invalid data.

Click Tips toggle to test JavaScript interaction.

👨‍💻 Author
Bhupesh Chikara
📧 bhupeshchikara@gmail.com
🌐 builtbychikara.dev