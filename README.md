# 🧺 Online Laundry Service

<p align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white"/>
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black"/>
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white"/>
</p>

> A full-stack web application for managing online laundry orders with separate portals for customers, delivery men, and admins.

---

## 📌 Table of Contents
- [About the Project](#about-the-project)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Screenshots](#screenshots)
- [Getting Started](#getting-started)
- [Database Setup](#database-setup)
- [Usage](#usage)
- [Contributing](#contributing)

---

## 📖 About the Project

Online Laundry Service is a complete web-based platform that connects customers with laundry service providers. Customers can browse services, place orders, and track them. Delivery men can manage pickups and deliveries. Admins have full control over the system.

---

## ✨ Features

### 👤 Customer
- Register & login with email verification
- Browse laundry services and pricing
- Add to cart and place orders
- Track order history
- Update profile

### 🚚 Delivery Man
- Separate login portal
- View assigned orders
- Update delivery status
- Manage profile

### 🛠️ Admin
- Dashboard with full system overview
- Manage customers, delivery men, and laundry providers
- Monitor all orders
- Register new admins

---

## 🛠️ Tech Stack

| Layer | Technology |
|-------|-----------|
| Backend | PHP (Native) |
| Frontend | HTML5, CSS3, JavaScript, jQuery |
| Database | MySQL |
| Server | Apache (XAMPP/WAMP) |

---

## 📸 Screenshots

> _Add screenshots of your home page, customer dashboard, and admin panel here_

<!-- Example:
![Home Page](screenshots/home.png)
![Customer Dashboard](screenshots/dashboard.png)
-->

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

2. **Move to your server directory**
   ```bash
   # For XAMPP:
   mv Online-Laundry-Service /xampp/htdocs/
   ```

3. **Start Apache and MySQL** in XAMPP/WAMP Control Panel

4. **Import the database** (see below)

5. **Open in browser**
   ```
   http://localhost/Online-Laundry-Service/home.php
   ```

---

## 🗄️ Database Setup

1. Open **phpMyAdmin** at `http://localhost/phpmyadmin`
2. Create a new database named `laundry_db`
3. Import the SQL file from the repo (if available)
4. Update database credentials in `login_db.php` and `customer_db.php`:
   ```php
   $host = "localhost";
   $user = "root";
   $password = "";
   $database = "laundry_db";
   ```

---

## 🧭 Usage

| Role | URL | Credentials |
|------|-----|-------------|
| Customer | `/home.php` | Register a new account |
| Delivery Man | `/dm_login.php` | Register via `/dm_registration.php` |
| Admin | `/adminRegistration.php` | Set up manually |

---

## 🤝 Contributing

Contributions are welcome! Feel free to:
- Fork this repository
- Create a feature branch (`git checkout -b feature/YourFeature`)
- Commit your changes (`git commit -m 'Add YourFeature'`)
- Push and open a Pull Request

---

## 👩‍💻 Author

**Rifah Sanzida**  
[![LinkedIn](https://img.shields.io/badge/LinkedIn-0077B5?style=flat&logo=linkedin)](https://www.linkedin.com/in/rifah-sanzida-b58141290/)
[![GitHub](https://img.shields.io/badge/GitHub-181717?style=flat&logo=github)](https://github.com/Rifah22)
