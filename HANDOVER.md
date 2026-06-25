# PawCation Project Handover Document

## Project Overview

PawCation is an on-demand pet care and luxury stay network platform. The project aims to connect pet parents with verified caretakers, providing transparent, premium pet care services with real-time monitoring capabilities.

**Project Type:** Web Application (Academic Project)
**Technology Stack:** CodeIgniter 4, Bootstrap 5, PHP, MySQL
**Current Phase:** Phase 1 - Frontend UI/UX Showcase (Completed)
**Next Phase:** Phase 2 - Backend Implementation (Pending)

---

## Phase 1: Frontend Implementation (Completed)

### What Was Built

#### 1. Theme & UI Design
- **Color Palette:** Vibrant pet-friendly colors (Orange #FF6B35, Coral #F7931E, Teal #4ECDC4, Dark #1A1A2E, Light #F8F9FA)
- **Design Elements:** Gradient backgrounds, modern shadows, smooth animations, decorative paw patterns
- **Typography:** Poppins font family for modern, clean aesthetics
- **Responsive Design:** Fully responsive layout using Bootstrap 5 grid system

#### 2. Pages Implemented

**Home Page (`app/Views/home.php`)**
- Hero section with pet image and call-to-action
- Features overview (Verified Caretakers, Live Paws-Cam, Activity Tracking)
- "How It Works" 4-step process
- CTA section

**About Us Page (`app/Views/about.php`)**
- Company story section
- Mission & Vision cards
- Core Values (Trust & Safety, Compassion, Innovation, Community)
- "Why Pet Parents Choose Us" features
- Statistics section (500+ Happy Pets, 50+ Caretakers, 98% Satisfaction, 24/7 Support)
- Decorative paw pattern backgrounds

**Product Solution Page (`app/Views/solution.php`)**
- Problem section with visual representation
- Solution section highlighting platform benefits
- Unique Selling Point (USP) section: Live Paws-Cam & Activity Log Tracker
- Feature breakdown (24/7 Live Webcam, Activity Logs, Photo Updates)

**Services & Features Page (`app/Views/features.php`)**
- Module 1: Interactive Search & Booking (caretaker cards with filters)
- Module 2: Live Activity Log Dashboard (activity table + photo grid)
- Module 3: Caretaker Application Portal (application form)

**Pricing Page (`app/Views/pricing.php`)**
- Revenue strategy section (15% commission model)
- Service Tiers:
  - Essential Daycare: RM 35/day
  - Overnight Deluxe: RM 75/night (Most Popular)
  - Elite VIP & Medical: RM 130/night
- Feature comparison table

#### 3. Navigation & Routing
- Navigation bar with active link highlighting
- Routes configured in `app/Config/Routes.php`
- Controller methods in `app/Controllers/Home.php`

#### 4. Visual Elements
- Pet images integrated throughout (Home, Solution, Features, About pages)
- Bootstrap Icons for visual enhancement
- Hover effects and smooth transitions
- Card-based layouts with shadows

### File Structure
```
pawcation/
├── app/
│   ├── Config/
│   │   └── Routes.php (Route configuration)
│   ├── Controllers/
│   │   └── Home.php (Page controllers)
│   └── Views/
│       ├── layout.php (Main layout with CSS)
│       ├── home.php (Home page)
│       ├── about.php (About Us page)
│       ├── solution.php (Product Solution page)
│       ├── features.php (Services & Features page)
│       └── pricing.php (Pricing page)
├── public/
│   └── index.php (Entry point)
└── writable/
    └── (Writable directory for logs, cache, uploads)
```

---

## Phase 2: Backend Implementation (Future)

**Status:** Not Started
**Purpose:** Complete system with authentication, database, and protected routing

### Phase 2 System Requirements: PawCation Backend (CodeIgniter 4)

## System Overview
PawCation is an on-demand pet care and luxury stay network. The frontend GUI is already built using Bootstrap 5 and CodeIgniter 4 view layouts. This phase focuses entirely on backend logic, database integration, and protected routing.

### User Roles
The system operates with 3 distinct user roles:
1.  **Admin (Role ID: 1):** Platform overseer. Manages approvals, handles disputes, verifies payment receipts, and views platform-wide financial reports (15% commission).
2.  **Caretaker (Role ID: 2):** Service provider. Accepts bookings, manages their availability, and updates live activity logs for pets in their care.
3.  **Pet Owner (Role ID: 3):** The customer. Registers pets, books services (Essential Daycare, Overnight Deluxe, Elite VIP), uploads payment receipts, and views live activity updates.

---

## 1. CI4 Technical Requirements Implementation Plan

To satisfy the academic evaluation rubric, the agent must implement the following CodeIgniter 4 specific structures:

*   **Controllers:** Create distinct controllers for operational scopes (e.g., `AuthController.php`, `AdminController.php`, `BookingController.php`, `DashboardController.php`).
*   **File Upload Handling:** The `BookingController` MUST utilize CodeIgniter 4's `hasFile()` and `move()` methods to securely handle payment receipt image uploads and store them in the `writable/uploads/receipts/` directory.
*   **Views & Layouts:** Continue using the existing `app/Views/layout.php`. All new dynamic dashboard views must use `<?= $this->extend('layout') ?>` and `<?= $this->section('content') ?>`.
*   **Models (With JOINs):** Implement standard CI4 Models. At least one primary transaction model (e.g., `BookingModel.php`) MUST utilize a `join()` query to combine data from the `bookings`, `users` (caretaker details), and `pets` tables.
*   **Security (Protected Routes):** Implement CodeIgniter 4 **Filters** (`app/Filters/`). Create filters for `AuthGuard`, `AdminGuard`, and `CaretakerGuard` to inspect the active session. Apply these filters in `app/Config/Routes.php` to prevent unauthorized URL access.

---

## 2. Database Schema (Core Tables)

The agent must generate database migrations (`php spark make:migration`) for the following core entities:

*   **users:** `id`, `name`, `email`, `password_hash`, `role_id`, `status` (pending/approved/active), `created_at`.
*   **pets:** `id`, `owner_id` (FK -> users.id), `name`, `breed`, `vaccine_status`, `special_needs`.
*   **services:** `id`, `service_name`, `price`, `description`. (Populate with: Essential Daycare RM35, Overnight Deluxe RM75, Elite VIP RM130).
*   **bookings:** `id`, `owner_id` (FK), `caretaker_id` (FK), `pet_id` (FK), `service_id` (FK), `start_date`, `end_date`, `total_price`, `platform_fee` (15% calculation), `receipt_path` (VARCHAR), `payment_status` (pending/verified/rejected), `booking_status` (pending/confirmed/completed).
*   **activity_logs:** `id`, `booking_id` (FK), `activity_type` (e.g., Fed, Walked, Meds), `notes`, `timestamp`.

---

## 3. Module Breakdown

### Module 1: Manage User (Authentication & Roles)
*   **Registration & Login:** Implement secure password hashing using CI4's built-in authentication libraries or `password_hash()`.
*   **Session Management:** Upon successful login, store user ID, name, and role in the CI4 `$session`. Redirect users to their respective dashboards based on their role.
*   **Profile Management:** Allow Pet Owners and Caretakers to update their contact details.

### Module 2: Admin Transactions
*   **Caretaker Approval Workflow:** Caretakers register with a `pending` status. The Admin dashboard lists pending applications. The Admin clicks "Approve" to change the status to `active`.
*   **Payment Verification Workflow (Manual Gateway):** Admin views a list of bookings with a `payment_status` of `pending`. The Admin can click to view the uploaded receipt image. If valid, Admin clicks "Verify Payment", changing `payment_status` to `verified`.
*   **System Overrides:** Admin can cancel any active booking in case of emergencies or disputes.

### Module 3: User Transactions
*   **Transaction A (Pet Owner - Booking & Payment):** 
    *   Owner selects a Caretaker, a Pet, and a Service Tier.
    *   System calculates `total_price` and presents a mock bank account number.
    *   Owner uploads a screenshot/image of their bank transfer receipt.
    *   System saves the file path to `receipt_path` and inserts a record into the `bookings` table with `payment_status` as `pending`.
*   **Transaction B (Caretaker - Fulfillment):** 
    *   Once Admin sets `payment_status` to `verified`, the Caretaker sees the booking and clicks "Accept" (changes `booking_status` to `confirmed`).
    *   During the stay, the Caretaker submits updates via a form (e.g., "Fed at 8:00 AM") which inserts records into the `activity_logs` table.

### Module 4: Reports / Dashboard
*   **Admin Dashboard:** Displays a summary report using aggregation queries. Must show: Total Active Bookings, Total Verified Payments, and Total Revenue Generated (Sum of the 15% `platform_fee` column for verified bookings).
*   **Caretaker Dashboard:** Shows a financial report of "My Earnings" (Total booking price minus the 15% platform fee for verified/completed bookings) and a list of upcoming scheduled pets.
*   **Pet Owner Dashboard:** Displays the "Live Activity Log". This view MUST pull data using a JOIN query via the `BookingModel` to display the pet's name, caretaker's name, and the chronological list of activity logs for the active booking.

---

## Deployment Instructions

### Phase 1: Frontend Hosting Guide

Since Phase 1 is a static frontend showcase (no backend/database required), you can host it using several options:

#### Option 1: XAMPP (Local Development - Current Setup)
**Prerequisites:**
- XAMPP installed
- PHP 7.4 or higher
- Apache server

**Steps:**
1. Ensure XAMPP Apache and MySQL are running
2. Place the `pawcation` folder in `C:\xampp\htdocs\`
3. Access via: `http://localhost/pawcation/public/`
4. No database configuration needed for Phase 1

#### Option 2: Free Hosting (Netlify / Vercel)
**Note:** These platforms are primarily for static sites. Since this is a CodeIgniter 4 project, you'll need to export it as static HTML.

**Steps for Netlify:**
1. Export all pages as static HTML (remove PHP code)
2. Create a `netlify.toml` file if needed
3. Drag and drop the folder to Netlify dashboard
4. Get a free URL: `your-project.netlify.app`

#### Option 3: Shared Hosting (cPanel)
**Prerequisites:**
- Shared hosting account with PHP support
- cPanel access

**Steps:**
1. Compress the `pawcation` folder into a ZIP file
2. Upload to public_html via cPanel File Manager
3. Extract the ZIP file
4. Ensure `public/index.php` is accessible
5. Access via your domain: `http://yourdomain.com/`

#### Option 4: GitHub Pages (Free)
**Note:** GitHub Pages only serves static content. You'll need to convert PHP views to static HTML.

**Steps:**
1. Create a GitHub repository
2. Convert all PHP files to static HTML
3. Push to repository
4. Enable GitHub Pages in repository settings
5. Access via: `https://username.github.io/repository-name/`

### Recommended Hosting for Phase 1
**For academic showcase purposes:** Use **XAMPP locally** or **GitHub Pages** (after converting to static HTML).

**For professional presentation:** Use **shared hosting** with PHP support.

---

## Important Notes for Phase 2

### Before Starting Phase 2
1. **Backup Phase 1:** Create a complete backup of the current frontend before starting backend implementation
2. **Database Setup:** Install MySQL and create a database named `pawcation_db`
3. **Environment Configuration:** Update `.env` file with database credentials
4. **CodeIgniter CLI:** Ensure `spark` command is accessible

### Phase 2 Development Workflow
1. Create database migrations using `php spark make:migration`
2. Run migrations: `php spark migrate`
3. Implement Filters in `app/Filters/`
4. Create Controllers (Auth, Admin, Booking, Dashboard)
5. Create Models with JOIN queries
6. Implement file upload handling in BookingController
7. Apply route filters in `app/Config/Routes.php`
8. Test authentication and authorization
9. Implement dashboard views for each role
10. Test all transaction flows

---

## Contact & Support

**Project Name:** PawCation
**Phase:** 1 (Frontend) - Completed
**Next Phase:** 2 (Backend) - Pending

**Last Updated:** June 24, 2026
