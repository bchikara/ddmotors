PHP Motor Data Viewer
A simple PHP application that fetches and displays a summary of motor data from a MySQL database, styled with Tailwind CSS.

Task 1: Fetches and displays a summary table of average motor prices grouped by drive type.

Task 2: Includes a floating "Tips" button that toggles a hidden info box using JavaScript.

🔧 Requirements
PHP 8+

MySQL

Composer for package management

Local server (e.g., Apache via MAMP or XAMPP)

📁 Folder Structure
The project uses a structured layout to separate concerns:

motor-project/
│
├── public/
│   ├── index.php         # Main page that displays the data
│   └── js/
│       └── main.js   # JavaScript for the tips toggle
│
├── src/
│   └── db.php            # Secure PDO connection logic
│
├── templates/
│   ├── header.php        # HTML head and opening body tags
│   └── footer.php        # HTML closing tags and script includes
│
├── .env                  # DB credentials (not committed to Git)
├── .env.example          # Example .env file
├── composer.json         # PHP dependencies (e.g., phpdotenv)
└── README.md             # You are here

🛠️ Setup Instructions
1. Clone the Project
git clone https://github.com/bchikara/ddmotors.git
cd ddmotors

2. Install Dependencies
Use Composer to install the required phpdotenv package.

composer install

3. Create .env File
Copy the example file and update it with your local database credentials.

cp .env.example .env

Your .env file should look like this:

DB_HOST=localhost
DB_NAME=your_database_name
DB_USER=root
DB_PASS=your_password

4. Set Up the Database
You'll need a table named motorcrossref2 with at least DriveType and Price columns. You can create and populate it with this sample SQL:

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

5. Run the Application
Navigate to the public directory and use PHP's built-in web server.

cd public
php -S localhost:8000

Now, visit http://localhost:8000 in your browser to see the application.

👨‍💻 Author
Bhupesh Chikara

Email: bhupeshchikara@gmail.com

Website: builtbychikara.dev