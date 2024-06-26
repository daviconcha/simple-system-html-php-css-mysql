<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h1>Simple System HTML PHP CSS MySQL</h1>
<p>Welcome to the Simple System project repository! This project showcases a basic implementation using HTML, PHP, CSS, and MySQL. It currently features user authentication with session management and database verification.</p>

<h2>Visual Examples</h2>
<p>Below are visual examples of the Simple System:</p>
<p></p>
<p>Login Page</p>
<img src="https://github.com/daviconcha/simple-system-html-php-css-mysql/assets/20704891/1dfbbee1-2e09-402b-8eae-69c3024d1eb6" alt="Login Page">
<p></p>
<p>Dashboard Page</p>   
<img src="https://github.com/daviconcha/simple-system-html-php-css-mysql/assets/20704891/69e2627d-b570-400a-a3cf-6c4c02db0491" alt="Dashboard Page">
    
<h2>Features</h2>
<ul>
    <li><strong>User Authentication:</strong> Enables users to securely log in using their email and password credentials.</li>
    <li><strong>Session Management:</strong> Manages user sessions to maintain authentication across multiple pages.</li>
    <li><strong>Database Integration:</strong> Utilizes MySQL database to store and verify user credentials.</li>
</ul>

<h2>Project Structure</h2>
<p>The project structure includes the following components:</p>
<ul>
    <li><code>index.php:</code> Entry point of the application, contains the login interface and initial session handling.</li>
    <li><code>assets/css/style.css:</code> CSS file providing styling for the project's interface.</li>
    <li><code>includes/php/:</code>
        <ul>
            <li><code>action_form.php:</code> Handles form submissions and database operations for user authentication.</li>
            <li><code>check_session.php:</code> Validates user sessions to ensure authenticated access to protected pages.</li>
            <li><code>config.php:</code> Configuration file for database connection details.</li>
            <li><code>logout.php:</code> Logs users out by destroying sessions and redirecting to the login page.</li>
        </ul>
    </li>
    <li><code>parts/:</code>
        <ul>
            <li><code>menu.php:</code> Contains the menu structure for navigation within the application.</li>
            <li><code>parts/dashboard/:</code>
                <ul>
                    <li><code>index.php:</code> Placeholder for future dashboard functionality.</li>
                </ul>
            </li>
        </ul>
    </li>
</ul>

<h2>Database Setup</h2>
<p>Set up your MySQL database with the following SQL schema:</p>

<pre><code>
CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `auth` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'admin');

ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
</code></pre>

<h3>Database Configuration</h3>
<p>Configure your database connection by editing the <code>config.php</code> file located in <code>includes/php/</code>.</p>

<pre><code>
  DB_SERVER = 'localhost';
  DB_USERNAME = 'root';
  DB_PASSWORD = '';  
  DB_NAME = 'project_php01';</code></pre>
<?php
'DB_SERVER', 'localhost'
'DB_USERNAME', 'root'
'DB_PASSWORD', ''
'DB_NAME', 'project_php01'
?>
</code></pre>

<h2>Getting Started</h2>
<p>To start using the Simple System project:</p>
<ol>
    <li>Clone the repository:</li>
    <pre><code>git clone https://github.com/your-username/simple-system-html-php-css-mysql.git</code></pre>
    <li>Set Up Database:</li>
    <ul>
        <li>Create a MySQL database.</li>
    </ul>
    <li>Configure Database Connection:</li>
    <ul>
        <li>Edit the <code>config.php</code> file in <code>includes/php/</code> to enter your MySQL database credentials.</li>
    </ul>
    <li>Run the Application:</li>
    <ul>
        <li>Ensure you have a web server (e.g., Apache, Nginx) with PHP installed and running.</li>
        <li>Navigate to the project directory on your local server using a web browser.</li>
    </ul>
    <li>Explore and Customize:</li>
    <ul>
        <li>Explore the project structure to understand its organization and functionality.</li>
        <li>Customize the project as needed or use it as a learning resource.</li>
    </ul>
</ol>

<h2>Contributing</h2>
<p>Contributions are welcome! If you encounter issues or have suggestions for improvements, feel free to open an issue or submit a pull request. Your contributions help enhance this project for everyone.</p>

</body>
</html>
