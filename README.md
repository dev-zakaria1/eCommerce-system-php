# Mini E-Commerce System

A lightweight, PHP-based e-commerce platform built using pure PHP, MySQL, HTML, CSS, and JavaScript, following the MVC design pattern.

---

## 🚀 Features

* **Custom MVC Architecture:** Clean separation of business logic and presentation layers.
* **Product Management:** Browse and manage store inventory.
* **Database Integration:** Secure database interactions using PDO.
* **Responsive Frontend:** Built with vanilla HTML, CSS, and JavaScript.

---

## 🛠️ Tech Stack

* **Backend:** PHP, MySQL
* **Frontend:** HTML5, CSS3, JavaScript (ES6+)
* **Dependencies:** Composer, `dcblogdev/pdo-wrapper`
* **Local Server Environment:** Apache (XAMPP/WAMP) with VirtualHost

---

## 📋 Prerequisites

Before setting up the project, ensure you have the following installed and configured:

* **XAMPP** (or any local server running Apache & MySQL)
* **Composer** (PHP Package Manager)
* **PHP 8.x** or higher

---

## ⚙️ Installation & Local Setup

### 1. Clone the Repository
Clone the project to your local machine:
```bash
git clone https://github.com/dev-zakaria1/eCommerce-system-php.git
cd eCommerce-system-php
```
### 2. Install Dependencies
Run the following commands in the project root directory to register autoloading and install the PDO database wrapper:

```bash
composer dump-autoload -o
composer require dcblogdev/pdo-wrapper
```
### 3. Virtual Host : 
Create a local Virtual Host for `mvc.test` pointing to `eCommerce-system-php/public`.
### 4. Database Import :
Import the provided `shop.sql` file into your database before running the app.