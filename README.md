# PHP CodeIgniter Blog Assessment

## Project Overview
This project is a blog application built using HTML, CSS, JavaScript, PHP, and the CodeIgniter framework. The application includes two distinct parts: an **Admin Panel** and a **User-facing Blog Website**.

### Admin Panel
The Admin Panel provides the following functionalities:
- **Signup & Login**: Admins can sign up and log in for authentication.
- **Blog Management**: Admins can create, edit, delete, and view blog posts.
- **User Query Management**: Admins can view and delete queries submitted by users.
- **Logout**: Admins can log out of the admin panel for session security.

### User-facing Blog Website
On the user-facing part of the website, users can:
- **Signup & Login**: Users can register and log in to the website.
- **View Blog Posts**: Users can see a brief overview of the blog posts, including titles, excerpts, and images.
- **Read More**: By clicking the **Read More** button, users can view the detailed blog post.
- **Commenting**: Users can add comments to blog posts, fostering interaction.
- **Light/Dark Theme Toggle**: Users can toggle between light and dark themes for better user experience.
- **Contact Form**: Users can submit queries to the admin through the contact form.
- **Logout**: Users can log out of their accounts.

This project is designed to demonstrate basic blog functionality, user interaction, and admin control, using the PHP CodeIgniter framework to manage backend operations, authentication, and CRUD functionality. It also integrates front-end technologies (HTML, CSS, JS) to deliver a dynamic and user-friendly experience.

---

## Instructions to Set Up the Project Locally

### Prerequisites
Make sure the following software is installed on your machine:
- **PHP** (version 8.x or higher)
- **Composer** (dependency manager for PHP)
- **MySQL** (or another compatible database)
- **XAMPP** (which includes PHP, MySQL, and Apache server)
- **CodeIgniter 4** framework

### Installation Steps
1. **Set Up XAMPP**:
   - Install XAMPP and start the Apache and MySQL services.
2. **Create the Database**:
   - Create a MySQL database named `blog_db`.
   - Create the required tables (`admins`, `blogs`, `comments`, `contact`, `users`) with the necessary fields. You can use the `blog_db.sql` file present in the `Databases` folder for this.
3. **Clone the repository**:
    ```bash
    git clone https://github.com/YOUR_USERNAME/php-codeigniter-blog-assessment.git
    ```
4. **Navigate into the project directory**:
    ```bash
    cd php-codeigniter-blog-assessment
    ```
5. **Install dependencies** using Composer:
    ```bash
    composer install
    ```
6. **Set up your environment** by copying `.env.example` to `.env`:
    ```bash
    cp .env.example .env
    ```
7. **Configure your database settings** in the `.env` file (DB credentials).
8. **Run migrations** to set up the database:
    ```bash
    php spark migrate
    ```

### Quick Setup (If Pre-requisites Are Met)
If you have already set up the XAMPP server, created the `blog_db` database with the required tables (`admins`, `blogs`, `comments`, `contact`, `users`) using the `blog_db.sql` file, installed Composer and CodeIgniter 4, and have PHP 8.0 or higher, you just need to:

1. Clone the repo inside the `/xampp/htdocs/` folder.
2. Open the Command Prompt and navigate to the project folder.
3. Run the following commands:
    ```bash
    composer install
    php spark serve --port=8081
    ```

After running the above commands, you can access the app by clicking on the link provided in the terminal (usually `http://localhost:8081`) or by pasting the URL into your browser.

---

## Instructions to Run the Project

1. After starting the XAMPP server, open the **Command Prompt (CMD)** and navigate to your project folder.
2. Type the following command to start the local server:
    ```bash
    php spark serve --port=8081
    ```
3. You will see a link in the terminal, usually shown as `http://localhost:8081`. Click on this link or paste it in your browser to open the application.
4. **For Admins**:
    - To log in or sign up as an admin, navigate to the **Admin Panel** by visiting the following URL:
      ```http
      http://localhost:8081/admin
      ```
5. **For Users**:
    - Users can visit the main blog page and use the **http://localhost:8081** port to log in, sign up, and access blog posts.
    - Users can browse through a list of blog posts, read the brief overview, and click on **Read More** to see the detailed post.
    - Users can add comments to blog posts and toggle between light and dark themes.

---

## Database and Application Snapshots

The database for this project is located in the `database/blog_db.sql` file. The application snapshots are available in the `Screenshots` folder.

---

## Assumptions and Limitations
- The application assumes you have a local environment set up with PHP, Composer, MySQL, and XAMPP.
- This is a basic implementation that lacks advanced features such as rich text formatting for blog posts and advanced error handling.
- The query management system for admins is limited to simple view and delete actions.
- The contact form functionality sends messages to the admin but lacks advanced validation or spam protection.
- Error handling and security mechanisms may be improved further in a production setting.

Feel free to contribute or provide feedback on improving the application.
