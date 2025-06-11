# Bryntum Grid + Laravel Example

This project demonstrates how to use the [Bryntum Grid](https://bryntum.com/products/grid/) with a Laravel backend and a SQLite database.

- **Back end:** Laravel (PHP)
- **Front end:** Bryntum Grid (JavaScript)
- **Database:** SQLite

## Getting Started

1. **Install dependencies:**
   ```sh
   composer install
   npm install
   ```
2. **Set up the database:**
   ```sh
   php artisan migrate --seed
   ```
3. **Run the Laravel server and build the front end assets:**
   ```sh
   composer run dev
   ```
4. **Open the app:**
   Visit [http://localhost:8000](http://localhost:8000) in your browser.