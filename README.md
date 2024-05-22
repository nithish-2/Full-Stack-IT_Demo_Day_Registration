# IT Demo Day Registration System
This is a web application developed for IT Demo Day registration. It allows users to register their teams for the event and view all registered teams.

## Features
- User Authentication: Users can log in with their username and password. Only authenticated users can access the registration and listing pages.

- Team Registration: Users can register their teams by providing team details such as team name, college name, student names, and email addresses.

- Form Validation: The registration form includes validation for all input fields to ensure accurate data submission.

- Listing Registered Teams: Registered teams are listed on a separate page, displaying team details retrieved from the database.

- Database Integration: MySQL database is used to store and retrieve team registration details.

- Session Management: Sessions are used to keep users logged in throughout their browsing session until they explicitly log out.

## Technologies Used
- HTML: Used for structuring web pages.

- CSS: Used for styling the web pages and making them visually appealing.

- JavaScript: Used for client-side form validation and dynamic content handling.

- PHP: Used for server-side scripting, user authentication, form handling, and database operations.

- MySQL: Used as the relational database management system to store team registration details.

- XAMPP: Used as the local development environment for running Apache server, MySQL database, and PHP.


## Installation and Setup
- Clone the repository to your local machine.

- Set up a local server environment using XAMPP or any other similar software.

- Import the teamdetails.sql file into your MySQL database to create the necessary table.

- Update the database connection details in db_connection.php file.

- Ensure that your server environment is running, then open the application in your web browser.


## Usage
- Access the application through your web browser.

- Log in using the provided credentials (default username: admin, default password: admin).

- Once logged in, you can register your team on the registration page.

- After registration, you can view all registered teams on the listing page.

- You can log out from the application using the provided logout button.

## Author
- **Name:** Nithish Jagadeesan
- **Email:** [nithish.jagadeesan@gmail.com](mailto:nithish.jagadeesan@gmail.com)
