# Online Laundry Service

A web-based laundry management platform built with PHP, MySQL, and JavaScript. The system connects customers with laundry service providers and delivery riders, allowing users to place orders online and track their laundry through the full wash-and-deliver cycle.

---

## Features

- **Multi-role system** — separate portals for Customers, Laundry Providers, Delivery Men (Riders), and Admins
- **Customer dashboard** — browse available laundry services, add items to cart, and place orders
- **Order history** — customers can view their past orders
- **Laundry provider portal** — laundry businesses can register and manage their services
- **Delivery man portal** — riders register with their license and NID details and manage deliveries
- **Admin dashboard** — administrators can oversee platform activity
- **User authentication** — login, logout, session management, and password reset via email verification
- **Profile management** — users can view and edit their profile information
- **Registration validation** — client-side and server-side form validation for all user types

---

## Tech Stack

| Layer      | Technology                          |
|------------|-------------------------------------|
| Backend    | PHP (procedural + OOP)              |
| Database   | MySQL (`laundry_service` database)  |
| Frontend   | HTML, CSS, JavaScript, jQuery       |
| Data store | JSON files (for delivery man & laundry provider data) |

---

## Project Structure

```
Online-Laundry-Service-main/
│
├── home.php                        # Public landing page
├── login.php                       # Unified login page
├── registrationRole.php            # Role selection for registration
│
├── customer_registration.php       # Customer signup form
├── customer_dashboard.php          # Customer portal
├── customer_profile.php            # Customer profile view
├── customer_profile_edit.php       # Customer profile edit
├── order_history.php               # Customer order history
├── checkout.php                    # Checkout page
│
├── show_laundry.php                # Browse available laundry services
├── show_laundry2.php               # Alternate laundry listing view
│
├── dm_registration.php             # Delivery man signup form
├── dm_login.php                    # Delivery man login
├── dm_dashboard.php                # Delivery man portal
├── dm_profile.php                  # Delivery man profile
│
├── laundryman_registration.php     # Laundry provider signup
├── laundryman_dashboard.php        # Laundry provider portal
├── laundryman_profile.php          # Laundry provider profile
│
├── adminRegistration.php           # Admin signup
├── adminDashboard.php              # Admin portal
│
├── Login_Control.php               # Login business logic
├── login_db.php                    # Login DB class (open conn, check login, reset pass)
├── customer_db.php                 # Customer DB class
├── registration_process.php        # Customer registration handler
├── dm_process.php                  # Delivery man registration handler
├── process.php                     # General process handler
├── Insert_orders.php               # Order insertion handler
├── orderHistory_control.php        # Order history query controller
│
├── forgot_password.php             # Forgot password page
├── forgotpassCheck.php             # Forgot password logic
├── verification_code.php           # Email verification code
├── get_verifyCode.php              # Retrieve/send verification code
├── reset_password.php              # Reset password page
├── set_newpass.php                 # Set new password handler
│
├── logout.php                      # Customer logout
├── dm_logout.php                   # Delivery man logout
├── laundryman_logout.php           # Laundry provider logout
│
├── customer_cart.js                # Cart functionality
├── cartBox_display.js              # Cart UI display
├── cReg_script.js                  # Customer registration JS validation
├── update_profile.js               # Profile update JS
│
├── data.json                       # Customer sample data
├── dm_data.json                    # Delivery man registration data
├── laundry_data.json               # Laundry provider data
├── customer_data.json              # Customer data store
│
└── *.css                           # Stylesheets for each section
```

---

## User Roles

| Role              | Description                                                    |
|-------------------|----------------------------------------------------------------|
| **Customer**      | Registers, browses laundry services, places and tracks orders  |
| **Laundry**       | Registers as a laundry business, manages services and items    |
| **Rider (DM)**    | Registers as a delivery man, handles pickups and deliveries    |
| **Admin**         | Oversees the entire platform                                   |

---

## Database Setup

1. Create a MySQL database named `laundry_service`.
2. Import the required tables. Based on the codebase, the following tables are expected:

   - `login_info` — stores login credentials for all user types (`login_username`, `login_email`, `login_password`, `login_role`)
   - `customer` — stores customer profile data (`c_fullname`, `c_username`, `c_email`, `c_number`, `c_birthday`, `c_pass`, `c_gender`, `c_address`, `c_role`)
   - `orders` — stores placed orders (`c_username`, `item`, `l_title`, `l_email`, `l_phone`)
   - `laundry_services` — stores laundry service items and prices

3. The default DB connection uses:
   - **Host:** `localhost`
   - **Username:** `root`
   - **Password:** *(empty)*
   - **Database:** `laundry_service`

   Update `login_db.php` and `customer_db.php` if your credentials differ.

---

## Installation

1. **Clone or extract** the project into your web server's root directory (e.g., `htdocs` for XAMPP, `www` for WAMP).

2. **Start your local server** (Apache + MySQL). XAMPP is recommended.

3. **Create the database** as described above.

4. **Open the app** in your browser:
   ```
   http://localhost/Online-Laundry-Service-main/home.php
   ```

---

## How It Works

1. A visitor lands on **home.php** and can sign up or sign in.
2. On registration, they choose a **role** (Customer, Rider, Laundry, or Admin).
3. After logging in, users are redirected to their **role-specific dashboard**.
4. Customers can browse laundry providers, add services to their cart, and **place orders**.
5. Laundry providers manage their listed services and incoming orders.
6. Riders receive delivery tasks from their dashboard.
7. Admins have oversight of all platform activity.

---

## Known Issues & Notes

> ⚠️ This is a student/demo project. The following should be addressed before any production use:

- **SQL Injection vulnerability** — raw SQL strings with user input are used throughout (e.g., `login_db.php`). Use prepared statements (PDO or MySQLi) instead.
- **Plaintext passwords** — passwords are stored and compared without hashing. Use `password_hash()` and `password_verify()`.
- **No SQL schema file included** — the database tables must be created manually.
- **JSON as a data store** — some registration data (delivery men, laundry providers) is written to JSON files rather than the database, which is not suitable for a multi-user environment.
- **Hardcoded DB credentials** — connection details are repeated across multiple files; consider a single config file.

---

## Authors

Developed as an academic project. Social links on the homepage reference:
- [Rifah Sanzida](https://www.linkedin.com/in/rifah-sanzida-b58141290/)
- GitHub: [Rifah22/Online-Laundry-Service](https://github.com/Rifah22/Online-Laundry-Service)

---

## License

This project is open source and available for educational purposes.
