# Mark Angel S. Sarmiento - Personal Portfolio

## 🚀 Overview

This repository hosts the personal portfolio website for **Mark Angel S. Sarmiento**, a **Creative and Detail-Oriented UX/UI Designer**. The site is designed to showcase his skills, educational background, professional experience, and design philosophy.

## ✨ Features

The portfolio is structured to provide a comprehensive look at the designer's career and abilities.

* **Secure Access:** Includes a basic login system for user authentication or restricted content access.
* **Career Overview:** A dedicated section highlighting a strong passion for crafting **"intuitive, user-centered digital experiences"**.
* **Skills & Expertise:** Details proficiency in modern design tools and methodologies:
    * **Tools:** Figma and Adobe.
    * **Principles:** User research, usability testing, and responsive design principles.
* **Professional Sections:** Clear navigation for key information: Educational Background, Skills and Abilities, Personal Information, Certifications and Awards, and Character References.
* **Contact/Social Links:** Integration with professional and social platforms (Facebook, Instagram, GitHub).

## 💻 Technical Stack

This project is built using the **Laravel** PHP framework.

| Component | Technology | Version / Use |
| :--- | :--- | :--- |
| **Backend Framework** | **Laravel** | Web application framework |
| **Languages** | **Blade** (83.8%), **PHP** (16.0%) | Primary server-side and templating languages |
| **Development Environment** | **XAMPP Control Panel v3.3.0** | Used for local development (Apache and MySQL) |
| **Version Control** | **Git/GitHub Desktop** | Repository name: `mark_portfolio_website` |
| **Database** | **MySQL** | Running on port 3306 via XAMPP |
| **Web Server** | **Apache** | Running on ports 80 and 443 via XAMPP |

## ⚙️ Setup and Installation

### Prerequisites

You must have **XAMPP** installed to run the Apache web server and MySQL database locally.

1.  **Start XAMPP Modules:**
    * Open the XAMPP Control Panel.
    * Click **Start** for both **Apache** and **MySQL** modules.
    * Ensure both are running (Apache typically on ports 80, 443; MySQL on port 3306).

### Project Setup

1.  **Clone the Repository:**
    The project repository is named `mark_portfolio_website`.
    ```bash
    git clone [repository-link] mark_portfolio_website
    cd mark_portfolio_website
    ```
2.  **Install PHP/Laravel Dependencies:**
    ```bash
    composer install
    ```
3.  **Install Frontend Dependencies:**
    *(Assuming standard Laravel/JS stack based on `package.json` being present)*
    ```bash
    npm install
    npm run dev 
    # OR npm run prod for production assets
    ```
4.  **Configure Environment:**
    * Copy the example environment file: `cp .env.example .env`
    * Set the application key: `php artisan key:generate`
    * Configure database connection details in the `.env` file.
5.  **Run Migrations:**
    ```bash
    php artisan migrate
    ```
6.  **Start the Laravel Development Server (Optional, if not using XAMPP/Virtual Host):**
    ```bash
    php artisan serve
    ```

## 🔑 Login Credentials (For Testing/Demonstration)

* **Username/Email:** `m4rksarmiento@gmail.com`
* **Password:** `M@rkangel123sasa` (Please use test credentials configured in the database.)

## 🔑 register Credentials (For Testing/Demonstration)

* **Username/Name:** `Enter Name`
* **Username/Email:** `Enter Email`
* **Password:** `Enter Password`
* **Password:** `Confirm password`

## 🤝 Contact

**Mark Angel S. Sarmiento**

* [[GitHub Profile](https://github.com/m4rk06/mark_portfolio_website)]