# ⚙️ PHP Motor Data Viewer

A simple, modern PHP application that **fetches and displays average motor prices** grouped by drive type, styled with **Tailwind CSS**.

---

## 📌 Features

- ✅ **Task 1**: Fetches and displays a summary table of **average motor prices grouped by drive type**.
- ✅ **Task 2**: Includes a floating **"Tips" button** that toggles a hidden info box using JavaScript.

---

## 🔧 Requirements

- PHP 8+
- MySQL
- Composer
- Local server (e.g., Apache via MAMP/XAMPP)

---

## 📁 Folder Structure

```
motor-project/
│
├── public/
│   ├── index.php         # Main entry point
│   └── assets/
│       └── js/
│           └── main.js   # JS for tips toggle
│
├── src/
│   └── db.php            # Secure PDO DB connection
│
├── templates/
│   ├── header.php        # Head + body start
│   └── footer.php        # Scripts + body end
│
├── .env                  # Environment variables (ignored by Git)
├── .env.example          # Sample env file
├── composer.json         # PHP dependencies
└── README.md             # This file
```

---

## 🚀 Setup Instructions

### 1️⃣ Clone the Repository

```bash
git clone https://github.com/bchikara/ddmotors.git
cd ddmotors
```

### 2️⃣ Install PHP Dependencies

```bash
composer install
```

### 3️⃣ Configure Environment

Create your own `.env` file:

```bash
cp .env.example .env
```

Update it with your DB credentials:

```
DB_HOST=localhost
DB_NAME=your_database_name
DB_USER=root
DB_PASS=your_password
```

### 4️⃣ Create the Database

Run the following SQL to set up the table:

```sql
CREATE TABLE motorcrossref2 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    DriveType VARCHAR(50) NOT NULL,
    Price DECIMAL(10, 2) NOT NULL
);

INSERT INTO motorcrossref2 (DriveType, Price) VALUES
('Regen', 250.75),
('Regen', 300.50),
('Series', 150.00),
('Series', 175.25),
('Regen', 275.00);
```

### 5️⃣ Start the App

```bash
cd public
php -S localhost:8000
```

Then open 👉 [http://localhost:8000](http://localhost:8000)

---

## ✨ Preview

> A clean interface with summarized motor price data grouped by drive type and a floating tips section.

---

## 👨‍💻 Author

**Bhupesh Chikara**  
📧 bhupeshchikara@gmail.com  
🌐 [builtbychikara.dev](https://builtbychikara.dev)

---

## 📝 License

This project is open-source and available under the [MIT License](LICENSE).