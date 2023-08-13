# Running the PHP Contact Form Validation with XAMPP Server

This guide will walk you through the process of setting up and running the PHP Contact Form Validation project using the XAMPP server. The project involves creating a contact form that validates user input, saves the data to a MySQL database, and sends an email notification. Let's get started!

## Prerequisites

Before you begin, make sure you have the following:

1. **XAMPP Installed**: XAMPP is a popular web server package that includes Apache, MySQL, PHP, and other tools. If you haven't already, download and install XAMPP from [https://www.apachefriends.org/](https://www.apachefriends.org/).

## Project Setup

1. **Download the Project**: Download the project files, which should include PHP, HTML, and SQL files for the contact form.

2. **Create a Database**:
   - Launch the XAMPP Control Panel and start both the Apache and MySQL services.
   - Open your web browser and navigate to [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/).
   - Create a new database named `contact_form`.

3. **Import SQL Schema**:
   - In phpMyAdmin, select the `contact_form` database.
   - Go to the "Import" tab and choose the SQL file provided in the project files to create the necessary table.

4. **Configure Email**:
   - Open the PHP file responsible for handling form submission.
   - Locate the section where the email is sent using the `mail()` function.
   - Update the recipient's email address to `test@techsolvitservice.com` or the appropriate address.

5. **Place Files in Web Root**:
   - Navigate to your XAMPP installation directory and find the "htdocs" folder.
   - Create a new folder (e.g., `contact-form-project`) and place all the project files inside it.

## Running the Application

1. **Start XAMPP**:
   - Open the XAMPP Control Panel and start the Apache and MySQL services if they are not already running.

2. **Access the Application**:
   - Open your web browser and type the following URL: [http://localhost/contact-form-project/](http://localhost/contact-form-project/)
   - You should now see the contact form in your browser.

3. **Submit and Test**:
   - Fill in the form fields with valid and invalid data to test the validation and submission process.
   - Observe the error messages and success confirmation as specified in the project requirements.

4. **Check Database**:
   - Open phpMyAdmin and access the `contact_form` database to verify that form submissions are being stored in the table.

## Notes

- Ensure that your XAMPP services (Apache and MySQL) are always started when you want to use the application.
- If you encounter any issues, check the error logs in XAMPP or your browser's developer console for more information.
- Remember to replace email addresses and other sensitive information with real data when deploying the project in a production environment.

Congratulations! You've successfully set up and run the PHP Contact Form Validation project using the XAMPP server. Feel free to explore and modify the code to further enhance your skills. If you have any questions or face challenges, don't hesitate to seek assistance. Good luck!
