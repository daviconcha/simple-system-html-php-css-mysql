<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
  
<body>

<h1>Simple System HTML PHP CSS MySQL</h1>
<p>Welcome to the Simple System project repository! This project showcases a basic implementation using HTML, PHP, CSS, and MySQL. It currently features user authentication with session management and database verification.</p>

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

<h2>Getting Started</h2>
<p>To start using the Simple System project:</p>
<ol>
    <li>Clone the repository:</li>
    <pre><code>git clone https://github.com/your-username/simple-system-html-php-css-mysql.git</code></pre>
    <li>Set Up Database:</li>
    <ul>
        <li>Create a MySQL database.</li>
        <li>Import the provided SQL file <code>database.sql</code> to set up the required tables.</li>
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
