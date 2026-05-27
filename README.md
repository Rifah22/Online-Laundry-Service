# 🧺 Online Laundry Service

<p align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white"/>
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black"/>
  <img src="https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white"/>
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white"/>
  <img src="https://img.shields.io/badge/Apache-D22128?style=for-the-badge&logo=apache&logoColor=white"/>
</p>

> A full-stack web application for managing online laundry orders — connecting customers, laundry providers, delivery men, and admins through separate, role-based portals.

---

## 📌 Table of Contents

- [About the Project](#-about-the-project)
- [Features](#-features)
- [Tech Stack](#-tech-stack)
- [Project Structure](#-project-structure)
- [Getting Started](#-getting-started)
- [Database Setup](#-database-setup)
- [Usage](#-usage)
- [Known Issues](#-known-issues)
- [Authors](#-authors)

---

## 📖 About the Project

**Online Laundry Service** is a complete web-based platform that connects customers with laundry service providers and delivery men. Customers can browse available services, place orders via a cart system, and view their order history. Laundry providers manage their listed services, while riders handle pickups and deliveries — all overseen by an admin dashboard.

---

## ✨ Features

### 👤 Customer
- Register & login with session-based authentication
- Browse available laundry services and pricing
- Add items to cart and place orders
- View full order history
- Update and manage profile

### 🚚 Delivery Man (Rider)
- Separate registration and login portal
- Submit NID, driving license, nationality, and experience details
- View and manage assigned deliveries
- Profile management

### 🧼 Laundry Provider
- Register with service offerings (Washing, Drying, Ironing)
- Manage listed laundry services and incoming orders
- Profile management

### 🛠️ Admin
- Full system dashboard
- Register and manage customers, delivery men, and laundry providers
- Monitor all platform orders
- Admin registration with reference number verification

### 🔐 Authentication
- Unified login with role-based redirection
- Forgot password with email verification code
- Password reset flow
- Session and cookie management per role

---

## 🛠️ Tech Stack

| Layer      | Technology                        |
|------------|-----------------------------------|
| Backend    | PHP (Native — procedural + OOP)   |
| Frontend   | HTML5, CSS3, JavaScript, jQuery   |
| Database   | MySQL (`laundry_service`)         |
| Data Store | JSON files (riders & providers)   |
| Server     | Apache (XAMPP / WAMP)             |

---

## 📁 Project Structure

```
Online-Laundry-Service-main/
│
├── home.php                        # Public landing page
├── login.php                       # Unified login page
├── registrationRole.php            # Role selection (Customer / Rider / Laundry / Admin)
│
├──── Customer ──
├── customer_registration.php       # Customer signup form
├── customer_dashboard.php          # Customer portal
├── customer_profile.php            # Profile view
├── customer_profile_edit.php       # Profile edit
├── order_history.php               # Order history
├── checkout.php                    # Checkout page
├── show_laundry.php                # Browse laundry services
│
├── ── Delivery Man ──
├── dm_registration.php             # Rider signup form
├── dm_login.php                    # Rider login
├── dm_dashboard.php                # Rider portal
├── dm_profile.php                  # Rider profile
│
├── ── Laundry Provider ──
├── laundryman_registration.php     # Provider signup form
├── laundryman_dashboard.php        # Provider portal
├── laundryman_profile.php          # Provider profile
│
├── ── Admin ──
├── adminRegistration.php           # Admin signup
├── adminDashboard.php              # Admin portal
│
├── ── Controllers / Logic ──
├── Login_Control.php               # Login handler
├── login_db.php                    # DB class: login, forgot password, reset
├── customer_db.php                 # DB class: customer CRUD, orders, services
├── registration_process.php        # Customer & laundry provider registration logic
├── dm_process.php                  # Delivery man registration logic
├── adminRegistrationProcess.php    # Admin registration logic
├── Insert_orders.php               # Order insertion handler
├── orderHistory_control.php        # Order history query controller
│
├── ── Password Reset ──
├── forgot_password.php             # Forgot password page
├── forgotpassCheck.php             # Forgot password logic
├── verification_code.php           # Verification code page
├── get_verifyCode.php              # Generate & send verification code
├── reset_password.php              # Reset password page
├── set_newpass.php                 # Set new password handler
│
├── ── JavaScript ──
├── customer_cart.js                # Cart add/remove logic
├── cartBox_display.js              # Cart UI display
├── cReg_script.js                  # Customer registration validation
├── update_profile.js               # Profile update handling
│
├── ── Data ──
├── customer_data.json              # Customer sample data
├── dm_data.json                    # Delivery man registrations (JSON store)
├── laundry_data.json               # Laundry provider registrations (JSON store)
│
└── *.css                           # Role-specific stylesheets
```

---

## ⚙️ Getting Started

### Prerequisites

- [XAMPP](https://www.apachefriends.org/) or [WAMP](https://www.wampserver.com/) installed
- PHP 7.4+
- MySQL 5.7+

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/Rifah22/Online-Laundry-Service.git
   ```

2. **Move to your server's root directory**
   ```bash
   # For XAMPP:
   mv Online-Laundry-Service /xampp/htdocs/

   # For WAMP:
   mv Online-Laundry-Service /wamp64/www/
   ```

3. **Start Apache and MySQL** in your XAMPP/WAMP control panel

4. **Set up the database** (see below)

5. **Open in browser**
   ```
   http://localhost/Online-Laundry-Service/home.php
   ```

---

## 🗄️ Database Setup

1. Open **phpMyAdmin** at `http://localhost/phpmyadmin`
2. Create a new database named `laundry_service`
3. Manually create the following tables (no SQL file is included in this repo):

| Table             | Key Columns                                                                 |
|-------------------|-----------------------------------------------------------------------------|
| `login_info`      | `login_username`, `login_email`, `login_password`, `login_role`             |
| `customer`        | `c_fullname`, `c_username`, `c_email`, `c_number`, `c_birthday`, `c_pass`, `c_gender`, `c_address`, `c_role` |
| `orders`          | `c_username`, `item`, `l_title`, `l_email`, `l_phone`                       |
| `laundry_services`| Service name, price, provider info                                          |

4. Update the DB credentials in `login_db.php` and `customer_db.php` if needed:
   ```php
   $DBHostname = "localhost";
   $DBUsername = "root";
   $DBPass     = "";
   $DBName     = "laundry_service";
   ```

---

## 🧭 Usage

| Role             | Entry Point              | How to Access                          |
|------------------|--------------------------|----------------------------------------|
| Customer         | `/home.php`              | Register via role selection            |
| Delivery Man     | `/dm_login.php`          | Register via `/dm_registration.php`    |
| Laundry Provider | `/login.php`             | Register via `/laundryman_registration.php` |
| Admin            | `/adminRegistration.php` | Set up with reference number manually  |

**Typical customer flow:**
1. Visit `home.php` → Sign Up → Select **Customer** role
2. Fill in registration form
3. Log in → Browse laundry services
4. Add items to cart → Checkout → View order history

---

## ⚠️ Known Issues

> This is an academic/demo project. The following should be addressed before any production use:

- **SQL Injection** — user input is inserted directly into SQL strings. Migrate to prepared statements (PDO or MySQLi).
- **Plaintext passwords** — passwords are stored without hashing. Use `password_hash()` and `password_verify()`.
- **No SQL schema file** — database tables must be created manually; consider adding a `.sql` dump file.
- **JSON as a data store** — delivery man and laundry provider registrations are written to JSON files, not the database. Not suitable for concurrent users.
- **Hardcoded DB credentials** — connection details are repeated across files. Move to a single `config.php`.

---

## 👩‍💻 Authors

Developed as an academic group project.

**Rifah Sanzida**
[![LinkedIn](https://img.shields.io/badge/LinkedIn-0077B5?style=flat&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/rifah-sanzida-b58141290/)
[![GitHub](https://img.shields.io/badge/GitHub-181717?style=flat&logo=github&logoColor=white)](https://github.com/Rifah22)

---

## 📄 License

This project is open source and available for educational purposes.
