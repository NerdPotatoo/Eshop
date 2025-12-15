# Agent Instructions: E-Shop Project Implementation

This document serves as a comprehensive guide for the AI agent (and developers) to implement and extend the E-Shop project. The implementation strategy follows a "Backend-First" approach, starting with the Admin Panel to establish data management, followed by the Public Website.

## 1. Project Overview
- **Type**: E-Commerce Application
- **Language**: PHP (Custom MVC structure)
- **Database**: MySQL (PDO)
- **Frontend**: HTML, Tailwind CSS (via CDN or local build)
- **Dependency Manager**: Composer

## 2. Setup & Configuration
The project now includes an automated database setup mechanism.
1.  **Database Configuration**:
    -   The `app/configs/Database.php` file is configured to automatically create the database `eshop_db` if it does not exist.
    -   It attempts to seed the database using `app/configs/eshop_db.sql` if tables are missing.
    -   **Action Required**: The `app/configs/eshop_db.sql` file is currently empty. You must populate it with the SQL `CREATE TABLE` statements for `admins`, `users`, `products`, `orders`, and `order_items`.
    -   **Fix Required**: In `app/configs/Database.php`, the check `SHOW TABLES LIKE 'admins'` is incorrect. Change it to check for a relevant table like `admins` or `products`.
    -   **Namespace Note**: The `Database.php` file uses `namespace App\config;` but resides in `app/configs/`. Ensure you use the correct namespace or path when instantiating.
2.  **Dependencies**:
    -   Run `composer install` to generate the autoloader.
    -   Ensure `vendor/autoload.php` is required in entry points.

## 3. Implementation Roadmap

### Phase 1: Admin Panel (Priority)
*Goal: Build the control center to manage data before displaying it to users.*

#### 1.1 Admin Authentication
-   **File**: `pages/admin/login.php`
-   **Task**: Implement secure login for administrators.
-   **Logic**:
    -   Create `admins` table (id, username, password_hash, created_at).
    -   Validate credentials against the database.
    -   Set `$_SESSION['admin_logged_in']` upon success.
    -   Redirect to `dashboard.php`.
    -   Implement middleware/check at the top of all admin pages to redirect unauthenticated users to login.

#### 1.2 Dashboard
-   **File**: `pages/admin/dashboard.php`
-   **Task**: Display key metrics.
-   **Logic**:
    -   Fetch counts for: Total Orders, Total Products, Total Customers, Total Sales.
    -   Display recent orders summary.

#### 1.3 Product Management (CRUD)
-   **Files**: `pages/admin/products.php`, `pages/admin/add-product.php`
-   **Task**: Full Create, Read, Update, Delete capability for products.
-   **Database**: Create `products` table (id, title, description, price, image, category_id, stock, created_at).
-   **Features**:
    -   **List**: Table view of products with Edit/Delete buttons.
    -   **Add/Edit**: Form with file upload for product images.
    -   **Delete**: Soft delete or hard delete product records.

#### 1.4 Order Management
-   **File**: `pages/admin/orders.php`
-   **Task**: View and manage customer orders.
-   **Database**: Create `orders` and `order_items` tables.
-   **Features**:
    -   List all orders with status (Pending, Processing, Completed, Cancelled).
    -   View order details (products purchased, customer info).
    -   Update order status.

#### 1.5 Customer Management
-   **File**: `pages/admin/customers.php`
-   **Task**: View registered users.
-   **Features**: List users, view their order history.

---

### Phase 2: Public Website
*Goal: Create the customer-facing storefront using data managed by the Admin Panel.*

#### 2.1 Public Authentication
-   **Files**: `pages/login.php`, `pages/signup.php`
-   **Task**: Allow customers to register and log in.
-   **Database**: Create `users` table (id, name, email, password_hash, address, phone).
-   **Logic**:
    -   **Signup**: Validate input, hash password, store in DB.
    -   **Login**: Verify credentials, set `$_SESSION['user_id']`.

#### 2.2 Home & Product Listing
-   **Files**: `pages/index.php`, `pages/products.php`
-   **Task**: Display products to visitors.
-   **Logic**:
    -   **Home**: Fetch "Featured" or latest products from the `products` table.
    -   **Products Page**: Grid view of all products with pagination.
    -   **Filtering**: Optional filtering by category or price.

#### 2.3 Shopping Cart
-   **File**: `pages/cart.php`
-   **Task**: Manage temporary product selection.
-   **Logic**:
    -   Use `$_SESSION['cart']` to store array of `[product_id => quantity]`.
    -   AJAX or form submission to Add to Cart.
    -   Calculate totals dynamically.
    -   Allow updating quantities or removing items.

#### 2.4 Checkout & Order Placement
-   **Task**: Convert Cart to Order.
-   **Logic**:
    -   Require login before checkout.
    -   Collect shipping/billing details (if not in profile).
    -   Insert record into `orders` table.
    -   Insert items into `order_items` table.
    -   Clear `$_SESSION['cart']`.
    -   Redirect to a "Thank You" page or Order History.

#### 2.5 Static Pages
-   **Files**: `pages/about.php`, `pages/contact.php`
-   **Task**: Implement static content and contact form (sending email or saving message to DB).

## 4. Coding Standards & Guidelines

### PHP
-   **Namespace**: Use `App\` namespace mapping to `app/` directory.
-   **Routing**: Use `action.php?page=page_name` for navigation.
-   **Database**: Always use the `Database` class for connections. Use Prepared Statements (`PDO::prepare`) to prevent SQL Injection.
-   **Controllers**: Keep logic in `app/controllers/` when possible, or use dedicated logic files included at the top of views if sticking to a simpler page-based structure.
-   **Security**:
    -   Sanitize all inputs.
    -   Escape outputs (`htmlspecialchars`) to prevent XSS.
    -   Use `password_hash()` and `password_verify()`.

### Frontend (Tailwind CSS)
-   Use utility classes for styling.
-   Maintain responsiveness (use `md:`, `lg:` prefixes).
-   Keep layout consistent using `include/header.php` and `include/footer.php`.

## 5. File Structure Reference
```
/
├── app/
│   ├── configs/        # Database & Config classes (contains eshop_db.sql)
│   └── controllers/    # Business logic
├── pages/              # Public views
│   ├── admin/          # Admin panel views
│   │   └── include/    # Admin-specific p (Home)
├── action.php          # Router for dynamic pages (?page=...)artials
│   └── include/        # Public partials
├── index.php           # Main entry point
└── composer.json       # Dependencies
```

## 6. GitHub Configuration (.github/*)
To ensure project quality and streamline collaboration, implement the following in the `.github` directory:

### 6.1 Workflows (`.github/workflows/`)
Create a CI pipeline to automate testing and linting.
-   **File**: `.github/workflows/php.yml`
-   **Content**:
    -   Trigger on `push` and `pull_request` to `main`.
    -   Set up PHP environment (latest stable version).
    -   Install dependencies (`composer install`).
    -   Run syntax check (`php -l`).
    -   (Optional) Run PHPUnit tests if tests are implemented.

### 6.2 Issue Templates (`.github/ISSUE_TEMPLATE/`)
Standardize bug reports and feature requests.
-   **Bug Report**: `bug_report.md`
    -   Sections: Describe the bug, Steps to reproduce, Expected behavior, Screenshots.
-   **Feature Request**: `feature_request.md`
    -   Sections: Is your feature request related to a problem?, Describe the solution you'd like.

### 6.3 Pull Request Template
-   **File**: `.github/pull_request_template.md`
-   **Content**:
    -   Description of changes.
    -   Type of change (Bug fix, New feature, Breaking change).
    -   Checklist (My code follows style guidelines, I have performed a self-review).

