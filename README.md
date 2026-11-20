# Library Inventory System

Separate inventory management system for books, classification, acquisitions, stock, circulation, returns, overdue monitoring, lost or damaged records, QR codes, users, and reports.

## Local setup

1. Copy this folder to `C:\xampp\htdocs\LibraryInventory`.
2. Start Apache and MySQL in XAMPP.
3. Import `library_inventory.sql` in phpMyAdmin.
4. Open `http://localhost/LibraryInventory/public/`.

Database: `library_inventory`

The system includes book cataloguing and classification, acquisitions, inventory updates, search and availability checking, check-in and check-out, reservations, overdue fines, lost/damaged tracking, stock verification, Code 128 barcode labels, QR-ready Composer dependencies, user roles, CSV reports, and PDF report export.

Default administrator:

- Email: `admin@libraryinventory.edu`
- Password: `LibraryAdmin@2026`

Administrator-created accounts support Administrator, Librarian, and Staff roles. Only Administrators can create user accounts.
